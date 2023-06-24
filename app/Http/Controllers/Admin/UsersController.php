<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->request->add(['password' => bcrypt($request->password)]);
        User::create($request->all());
        return redirect()->route('admin.users.index')->with('success','Data berhasil ditambah');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));   
    }

    public function update(Request $request, User $user)
    {
        $request->request->add(['password' => $request->password ? bcrypt($request->password) : $request->old_password]);
        $user->update($request->all());
        return redirect()->route('admin.users.index')->with('success','Data berhasil diupdate');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success','Data berhasil dihapus');
    }


}
