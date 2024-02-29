<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PinController extends Controller
{
    public function getdatapin(Request $request, $id){
        $dataUser = User::where('id', $id)->first();
        $dataJumlahFollower = DB::select('SELECT COUNT(id_user) as jmlfollower FROM follows where id_follow ='.$id);
        $dataJumlahFollow = DB::select('SELECT COUNT(id_follow) as jmlfollow FROM follows where id_user ='.$id);
        $dataFollow = Follow::where('id_follow', $id)->where('id_user', auth()->user()->id)->first();
       return response()->JSON([
        'dataUser' => $dataUser,
        'jumlahFollower' => $dataJumlahFollower,
        'jumlahFollow' => $dataJumlahFollow,
        'dataUserActive' => auth()->user()->id,
        'dataFollow' => $dataFollow,
    ], 200);
    }
    public function getdata(Request $request){
        $explore = Foto::with(['likefoto', 'favorites'])->withCount(['likefoto', 'comments'])->where('id_user', $request->idUser)->paginate();
        return response()->JSON([
            'data' => $explore,
            'statuscode' => 200,
            'idUser' => auth()->user()->id
        ]);
    }
}
