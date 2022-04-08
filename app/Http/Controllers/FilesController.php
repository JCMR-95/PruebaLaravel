<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilesController extends Controller
{

    public function indexFiles()
    {
        $currentUser = auth()->user()->id;
        
        $files = DB::table('files')
                ->where('idUser', '=', $currentUser)
                ->get();

        return view('filesViews.showFiles')->with('files', $files);
    }

    public function indexAllFiles()
    {
        $files = Files::all();

        return view('filesViews.showAllFiles')->with('files', $files);
    }

    public function uploadIndex()
    {
        return view('filesViews.uploadFile');
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function download(Request $request)
    {
        $path = public_path("storage/".$request->file);

        return response()->download($path);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function show(Files $files)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function edit(Files $files)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Files $files)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function destroy(Files $files)
    {
        //
    }
}
