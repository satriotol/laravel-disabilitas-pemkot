<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected function index()
    {
       $batas = 5;
       $jumlah_user = User::count();
       $user = User::orderBy('id', 'asc')->paginate($batas);
       $no = 0;
       return view('user.index', compact('user', 'no', 'jumlah_user'));
    }
    protected function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required','string', 'max:255'],
            'email' => ['required','string', 'email', 'max:255', 'unique:users'],
            'password' => ['required','string', 'min:8'],
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        Session::flash('flash_message', 'Data User berhasil disimpan');
        return redirect('/user');
    }
    public function edit(User $user)
    {
        return view('user.create', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $pass_lama = $user->password;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->update();
        return redirect('/user');

    }
    public function delete(User $user)
    {
        $user->delete();

        Session::flash('flash_message', 'Data User berhasil dihapus');
        Session::flash('penting', true);
        return redirect('/user');
    }
}
