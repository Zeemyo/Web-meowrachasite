<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use illuminate\Support\Str;
use App\User;

class UserController extends Controller
{
    //     public function __construct()
    //   {
    //       $this->middleware('guest');
    //   }

    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('admin/users/index', compact('users'));
    }


    public function edit($id)
    {

        $users = User::whereId($id)->first();

        return view('admin/users/edit', compact('users'));
    }

    public function update($id, Request $request)
    {
        $users = User::findOrFail($id);

        $input = $request->all();
        $users->update($input);


        $request->session()->flash('sukses', '
        <div class="alert alert-success" role="alert">
            Data berhasil diubah
        </div>
    ');

        return redirect('/users');
    }

    public function destroy(Request $request, $id)
    {
        User::whereId($id)->delete();

        $request->session()->flash('sukses', '
            <div class="alert alert-success" role="alert">
                Data berhasil dihapus
            </div>
        ');
        return redirect('/users');
    }
}
