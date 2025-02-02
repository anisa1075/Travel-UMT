<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('Admin.User.user', compact('user'));
    }

    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('Delete', "Data $user->name berhasil di hapus");
    }
}
