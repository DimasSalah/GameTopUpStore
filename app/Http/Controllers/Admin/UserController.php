<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = user::all();
        return view('admin.user.index', compact('users'));
    }

    public function edit($id)
    {
        $users = user::find($id);
        return view('admin.user.edit', compact('users'));
    }

    public function update(Request $request,$id)
    {
        $users = user::find($id);
        if($users)
        {
            $users->role = $request-> role;
            $users->update();
            return redirect('admin/users')->with('message','Updated Succes');
        }
        return redirect('admin/users')->with('message','No User found');
    }

    public function delete($id)
    {
        user::destroy($id);
        return back();
    }

}
 