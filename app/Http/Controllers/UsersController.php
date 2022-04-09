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

        return redirect('ShowUsers')->with('UserDeleted', 'OK');
    }

    public function upload(Request $request)
    {
        if($request->hasFile("url")){

            $file = $request->file("url");
            $name = $request->file("url")->getClientOriginalName();
            $path = public_path("storage/".$name);

            copy($file, $path);

            $user = DB::table('users')
                        ->where('email','=', $request->userEmail)
                        ->get();

            $idUser = $user[0]->id;        
            $nameUser =$user[0]->name;

            DB::table('files')->insert([
                'idUser' => $idUser,
                'nameUser' => $nameUser,
                'file' => $name
            ]);

            return redirect('ShowUsers')->with('FileUploaded', 'OK');

        }

        return redirect('ShowUsers')->with('ErrorUploaded', 'OK');
    }
}
