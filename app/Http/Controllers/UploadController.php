<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function storeFoto(Request $request){
        $request->validate([
            'url'             => 'required',
            'judul_foto'      => 'required',
            'deskripsi_foto'  => 'required'
        ]);

        $fotoFile = $request->file('url');
        $fotoExtention = $fotoFile->getClientOriginalExtension();
        $fotoName = date('dmyhis').'.'.$fotoExtention;
        $fotoFile->move('assets', $fotoName);

        $dataFoto = [
            'url'            => $fotoName,
            'judul_foto'     => $request->judul_foto,
            'deskripsi_foto' => $request->deskripsi_foto,
            'user_id'        => Auth::user()->id,
        ];

        Foto::create($ataFoto);
        return redirect()->back()->with('succes', 'Foto Berhasil Di Upload');
    }
}
