<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\Category;
use App\Models\PesananDetail;
use App\Models\KontakKami;
use App\Models\ProductImage;
use App\Models\SocialMedia;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index($id){
        $product = Product::where('id', $id)->first();

        return view('interface.detail', compact('product'));
    }

    public function pesan(Request $request, $id){
        $product = Product::where('id', $id)->first();
        $tanggal = Carbon::now();

        //validasi apakah melebihi stok
    	if($request->jumlah_pesan > $product->stock)
    	{
    		return redirect('pesan/'.$id);
    	}

        //cek validasi
    	$cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        //simpan ke database pesanan
    	if(empty($cek_pesanan))
        {
            $pesanan = new Pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            $pesanan->price = 0;
            $pesanan->kode = mt_rand(100, 999);
            $pesanan->save();
        }
        //simpan ke database pesanan detail
    	$pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        //cek pesanan detail
    	$cek_pesanan_detail = PesananDetail::where('product_id', $product->id)->where('pesanan_id', $pesanan_baru->id)->first();
    	if(empty($cek_pesanan_detail))
    	{
            //save pesanandetail
            $pesanan_detail = new PesananDetail;
            $pesanan_detail->product_id = $product->id;
            $pesanan_detail->pesanan_id = $pesanan_baru->id;
            $pesanan_detail->jumlah = $request->jumlah_pesan;
            $pesanan_detail->price = $product->price*$request->jumlah_pesan;
            $pesanan_detail->save();
        }else{
            $pesanan_detail = PesananDetail::where('product_id', $product->id)->where('pesanan_id', $pesanan_baru->id)->first();

    		$pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

    		//harga sekarang
    		$harga_pesanan_detail_baru = $product->price*$request->jumlah_pesan;
	    	$pesanan_detail->price = $pesanan_detail->price+$harga_pesanan_detail_baru;
	    	$pesanan_detail->update();
        }
        //jumlah total
    	$pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    	$pesanan->price = $pesanan->price+$product->price*$request->jumlah_pesan;
    	$pesanan->update();
        return redirect('/home/cart');
    }

    public function cart(){
        $categories = Category::all();
        $socialmedia = SocialMedia::all();
        $kontak_kami = KontakKami::all();
        $product = Product::all();
        // $product_images = ProductImage::where('product_id', $product->id)->get();
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
 	    $pesanan_details = [];
        if(!empty($pesanan))
        {
            $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        }

        return view('interface.cart', compact('pesanan', 'pesanan_details','socialmedia', 'categories', 'kontak_kami','product'));
    }

    public function delete(Request $request, $id)
    {
        $pesanan_detail = PesananDetail::find($id);
        $pesanan_detail->delete();

        //jumlah total

        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->price = $pesanan->price-$pesanan_detail->price;
        $pesanan->update();

        Session::flash('flash_message', 'Data berhasil dihapus');
        return redirect('/home/cart');
    }
}
