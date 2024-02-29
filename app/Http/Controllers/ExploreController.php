<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Follow;
use App\Models\Comment;
use App\Models\Favorite;
use App\Models\Likefoto;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;
use Illuminate\Support\Facades\DB;

class ExploreController extends Controller
{
    public function getdata(Request $request){
        $explore = Foto::with(['likefoto', 'favorites'])->withCount(['likefoto', 'comments'])->paginate();
        return response()->JSON([
            'data' => $explore,
            'statuscode' => 200,
            'idUser' => auth()->user()->id
        ]);
    }
    public function likesfoto(Request $request){
        try {
            $request->validate([
                'idfoto' => 'required'
            ]);

            $existingLike = Likefoto::where('id_foto', $request->idfoto)->where('id_user', auth()->user()->id)->first();
            if(!$existingLike){
                $dataSimpan = [
                    'id_foto' => $request->idfoto,
                    'id_user' => auth()->user()->id,
                ];
                Likefoto::create($dataSimpan);
            }else{
                Likefoto::where('id_foto', $request->idfoto)->where('id_user', auth()->user()->id)->delete();
            }

            return response()->json('Data Berhasil Disimpan', 200);
            } catch (\Throwable $th){
            return response()->json('Something went wrong', 500);
            }
        }
        public function pinned(Request $request){
            try {
                $request->validate([
                    'idfoto' => 'required'
                ]);

                $existingFavorite = Favorite::where('id_foto', $request->idfoto)->where('id_user', auth()->user()->id)->first();
                if(!$existingFavorite){
                    $dataSimpan = [
                        'id_foto' => $request->idfoto,
                        'id_user' => auth()->user()->id,
                    ];
                    Favorite::create($dataSimpan);
                }else{
                    Favorite::where('id_foto', $request->idfoto)->where('id_user', auth()->user()->id)->delete();
                }

                return response()->json('Data Berhasil Disimpan', 200);
                } catch (\Throwable $th){
                return response()->json('Something went wrong', 500);
                }
            }
            public function getdatafavorite(Request $request){
                $favoriteuserid = auth()->user()->id;
                $explore = Foto::with(['likefoto', 'favorites'])->withCount(['likefoto', 'comments'])->whereHas('favorites', function($query) use($favoriteuserid){ $query->where('id_user', $favoriteuserid);})->paginate();
                return response()->JSON([
                    'data' => $explore,
                    'statuscode' => 200,
                    'idUser' => auth()->user()->id
                ]);
            }
            public function getdatadetail(Request $request, $id){
                $dataDetailFoto = Foto::with('user')->where('id', $id)->firstOrFail();
                $dataJumlahPengikut = DB::table('follows')->selectRaw('count(id_follow) as jmlfolow')->where('id_follow',  $dataDetailFoto->user->id)->first();
                $dataFollow =Follow::where('id_follow', $dataDetailFoto->user->id)->where('id_user', auth()->user()->id)->first();

                return response()->JSON([
                    'dataDetailFoto' => $dataDetailFoto,
                    'dataJumlahFollow' => $dataJumlahPengikut,
                    'dataUser' => auth()->user()->id,
                    'dataFollow' => $dataFollow
                ], 200);
            }
            public function ambildatakomentar(Request $request, $id){
                $ambilkomentar = Comment::with('user')->where('id_foto', $id)->get();
                return response()->JSON([
                    'data' => $ambilkomentar,
                ], 200);
            }
            public function kirimkomentar(Request $request){
                try {
                    $request->validate([
                        'idfoto'=>'required',
                        'isi_komentar'=> 'required'
                    ]);
                    $dataStoreKomentar = [
                        'id_user' => auth()->user()->id,
                        'id_foto' =>$request->idfoto,
                        'isi_komentar' => $request->isi_komentar,
                    ];
                    Comment::create($dataStoreKomentar);
                    return response()->JSON([
                        'data' => 'Data berhasil disimpan'
                    ], 200);
                } catch (\Throwable $th) {
                   return response()->JSON('Data komentar gagal di simpan', 500);
                }
            }
            public function ikuti(Request $request){
                try {
                    $request->validate([
                        'idfollow' => 'required',

                    ]);
                    $existingFollow = Follow::where('id_user', auth()->user()->id)->where('id_follow', $request->idfollow)->first();
                    if(!$existingFollow){
                        $dataSimpan = [
                            'id_user' => auth()->user()->id,
                            'id_follow' => $request->idfollow,
                        ];
                        Follow::create($dataSimpan);
                    }else{
                        Follow::where('id_user', auth()->user()->id)->where('id_follow', $request->idfollow)->delete();
                    }
                    return response()->JSON('Data Berhasil di Eksekusi', 200);
                } catch (\Throwable $th) {
                    return response()->JSON('Something went wrong', 500);
                }
            }
}

