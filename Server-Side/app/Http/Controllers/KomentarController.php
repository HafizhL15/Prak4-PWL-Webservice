<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;
use App\Http\Resources\KomentarResource;

class KomentarController extends Controller
{
    public function index($id){
        return KomentarResource::collection(Komentar::query()->where('project_id', $id)->get());
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'komentar'=>'required',
        ]);

        try{
            Komentar::create($request->post());
            return response()->json([
                'message'=>'Komentar Berhasil Ditambahkan!!'
            ]);
        }catch(\Exception $e){
            return response()->json([
                'message'=>'Terjadi kesalahan saat menambahkan komentar!!'
            ],500);
        }
    }
}
