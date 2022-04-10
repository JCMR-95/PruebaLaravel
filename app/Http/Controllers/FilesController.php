<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function validateAdmin()
    {
        if(auth()->user()->role != "Administrador"){

            return false;
        }

        return true;
    }


    public function indexFiles()
    {
        $currentUser = auth()->user()->id;
        
        $files = DB::table('files')
                ->where('idUser', '=', $currentUser)
                ->get();

        return view('filesViews.showFiles')->with('files', $files);
    }


    public function upload(Request $request)
    {
        if($request->hasFile("url")){

            $file = $request->file("url");
            $name = $request->file("url")->getClientOriginalName();
            $path = public_path("storage/".$name);

            copy($file, $path);

            $idUser = auth()->user()->id;
            $nameUser = auth()->user()->name;

            DB::table('files')->insert([
                'idUser' => $idUser,
                'nameUser' => $nameUser,
                'file' => $name
            ]);

            return redirect('UploadFile')->with('FileUploaded', 'OK');

        }

        return redirect('UploadFile')->with('ErrorUploaded', 'OK');

    }


    public function download(Request $request)
    {
        $path = public_path("storage/".$request->file);

        return response()->download($path);
    }


    public function indexAllFiles()
    {
        $isAdmin = $this->validateAdmin();
        if (!$isAdmin) return view('home');

        $files = Files::all();

        return view('filesViews.showAllFiles')->with('files', $files);
    }
    

    public function uploadIndex()
    {
        return view('filesViews.uploadFile');
    }


    public function destroy($file)
    {
        DB::table('files')->where('file', '=', $file)->delete();

        return back()->with('FileDeleted', 'OK');
    }
}
