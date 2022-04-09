<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function indexUsers()
    {
        $users = User::all();

        return view('usersViews.showUsers')->with('users', $users);
    }


    public function editUser($id)
    {

        $users = User::all();
        $user = User::find($id);

        return view('usersViews.editUser', compact('users','user'));
    }


    public function updateUser(Request $request, $id)
    {

        DB::table('users')->where('id', $id)->update(['name' => $request->name, 'email' => $request->email, 'role' => $request->role]);

        return redirect('showUsers')->with('UserEdited', 'OK');

    }

    public function destroy($id)
    {
        $user = User::find($id);
                
        User::destroy($id);

        return redirect('showUsers')->with('UserDeleted', 'OK');
    }
}
