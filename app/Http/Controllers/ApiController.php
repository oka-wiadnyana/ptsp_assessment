<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use App\Models\Signer;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use RealRashid\SweetAlert\Facades\Alert;


class ApiController extends Controller
{


    public function uploadFoto(Request $request)
    {

        $validate = Validator::make(
            $request->all(),
            [

                'foto' => ['mimes:jpeg,jpg,bmp,png']
            ]
        );

        if ($validate->fails()) {
            // dd($validate->errors()->all());
            return response()->json(['message' => 'Upload gagal', 'code' => 500]);
        }



        if ($request->hasFile('foto') && $request->foto->isValid()) {
            $fotoFile = $request->foto;
            $foto = $fotoFile->getClientOriginalName();
            $fotoFile->storeAs('officer_image', $foto, 'real_public');
            return response()->json(['message' => 'Gambar berhasil diupload', 'code' => 200]);
        } else {
            return response()->json(['message' => 'Error', 'code' => 200]);
        }
    }

    public function uploadFotoSatpam(Request $request)
    {

        $validate = Validator::make(
            $request->all(),
            [

                'foto' => ['mimes:jpeg,jpg,bmp,png']
            ]
        );

        if ($validate->fails()) {
            // dd($validate->errors()->all());
            return response()->json(['message' => 'Upload gagal', 'code' => 500]);
        }



        if ($request->hasFile('foto') && $request->foto->isValid()) {
            $fotoFile = $request->foto;
            $foto = $fotoFile->getClientOriginalName();
            $fotoFile->storeAs('satpam_image', $foto, 'real_public');
            return response()->json(['message' => 'Gambar berhasil diupload', 'code' => 200]);
        } else {
            return response()->json(['message' => 'Error', 'code' => 200]);
        }
    }
}
