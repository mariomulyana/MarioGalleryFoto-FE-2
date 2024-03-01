<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(Request $request){
        return view('page.index');
    }

    public function sign_in(Request $request){
        return view('page.index');
    }

    public function sign_up(Request $request){
        return view('page.register');
    }

    public function explore(Request $request){
        $user = auth()->user();
        return view('page.explore', compact('user'));
    }

    public function upload(Request $request){
        $user = auth()->user();
        $album = Album::where('user_id', Auth::user()->id)->get();
        return view('page.upload', compact('albums', 'user'));
    }

    public function profile(Request $request){
        $user = auth()->user();
        return view('page.myprofile', compact('user'));
    }

    public function detail(Request $request){
        $user = auth()->user();
        return view('page.detail', compact('user'));
    }

    public function userlain(Request $request){
        $user = auth()->user();
        return view('page.userlain', compact('user'));
    }

    public function ubahpassword(Request $request){
        $user = auth()->user();
        return view('page.ubahpasword', compact('user'));
    }

    public function ubahprofile(Request $request){
        $user = auth()->user();
        return view('page.ubahprofile', compact('user'));
    }

    public function buatalbum(Request $request){
        $user = auth()->user();
        return view('page.buatalbum', compact('user'));
    }
}
