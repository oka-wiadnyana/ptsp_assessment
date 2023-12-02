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


class ReferenceController extends Controller
{
    public function getOfficer(Request $request)
    {
        if ($request->ajax()) {
            $data = Officer::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="" class="edit btn btn-success btn-sm" onclick="showModalEdit(\'show-modal-edit-officer\','.$row->id.'); return false">Edit</a> <a href=""  onclick="deleteData(\''.route('reference.destroy_officer').'\','.$row->id.',\'Ubah Aktivasi?\');return false" class="delete btn btn-danger btn-sm">Ubah Aktivasi</a> ';
                    return $actionBtn;
                })
                ->addColumn('unit_name', function($row){
                    
                    return $row->unitName->unit_name;
                })
                ->addColumn('active', function($row){
                    
                    return $row->active=='true'?'Aktif':'Tidak Aktif';
                })
               
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function insertOfficer(Request $request){
        $validate=Validator::make(
            $request->all(),
            [
                'name'=>['required'],
                'nick_name'=>['required'],
                'nip'=>['required'],
                'department'=>['required'],
                'unit_id'=>['required'],
              
                'foto'=>['required_without:foto_lama','mimes:jpeg,jpg,bmp,png']
            ]
        );

        if($validate->fails()){
            // dd($validate->errors()->all());
            Alert::error('Validation Error', $validate->errors()->all());
            return back();
        }

        $validated=$validate->safe()->all();
     
        if($request->hasFile('foto') && $request->foto->isValid()){
            $foto=$validated['nip'].'-'.time().'.'.$request->foto->getClientOriginalExtension();
            $request->foto->storeAs('officer_image',$foto,'real_public');
        }else {
            $foto=$request->foto_lama;
        }

        Officer::updateOrCreate(
            ['id'=>$request->id],
            [
                'name'=>$request->name,
                'nick_name'=>$request->nick_name,
                'nip'=>$request->nip,
                'department'=>$request->department,
                'unit_id'=>$request->unit_id,
                'foto'=>$foto
            ]
        );

        Alert::success('Success', __('messages.insert'));
        return back();
    }
    

    public function destroyOfficer(Request $request){

        $officer=Officer::find($request->id);
        $isActive=$officer->active=='true'?'false':'true';
        Officer::where('id',$request->id)->update(['active'=>$isActive]);

        Alert::success('Success',__('messages.update'));
        return response()->json(['success']);

    }

    public function getSigner(Request $request)
    {
        if ($request->ajax()) {
            $data = Signer::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="" class="edit btn btn-success btn-sm" onclick="showModalEdit(\'show-modal-edit-signer\','.$row->id.'); return false">Edit</a> <a href=""  onclick="deleteData(\''.route('reference.destroy_signer').'\','.$row->id.');return false" class="delete btn btn-danger btn-sm">Delete</a> ';
                    return $actionBtn;
                })
               
               
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function insertSigner(Request $request){
        $validate=Validator::make(
            $request->all(),
            [
                'name'=>['required'],
              
                'nip'=>['required'],
                'department'=>['required'],
                
            ]
        );

        if($validate->fails()){
            // dd($validate->errors()->all());
            Alert::error('Validation Error', $validate->errors()->all());
            return back();
        }

        
        Signer::updateOrCreate(
            ['id'=>$request->id],
            [
                'name'=>$request->name,
               
                'nip'=>$request->nip,
                'department'=>$request->department,
               
            ]
        );

        Alert::success('Success', __('messages.insert'));
        return back();
    }

    public function destroySigner(Request $request){
        Signer::destroy($request->id);
        Alert::success('Success',__('messages.delete'));
        return response()->json(['success']);

    }

    public function getUser(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="" class="edit btn btn-success btn-sm" onclick="showModalEdit(\'show-modal-edit-user\','.$row->id.'); return false">Edit</a> <a href=""  onclick="deleteData(\''.route('reference.destroy_user').'\','.$row->id.');return false" class="delete btn btn-danger btn-sm">Delete</a> ';
                    return $actionBtn;
                })
             
               
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function insertUser(Request $request){
        $validate=Validator::make(
            $request->all(),
            [
                'name'=>['required'],
                'username'=>['required'],
              
                'password'=>['required','confirmed'],
                
                
            ]
        );

        if($validate->fails()){
            // dd($validate->errors()->all());
            Alert::error('Validation Error', $validate->errors()->all());
            return back();
        }

        $validated=$validate->safe()->all();
      
        
        User::updateOrCreate(
            ['id'=>$request->id],
            $validated
        );

        Alert::success('Success', __('messages.insert'));
        return back();
    }

    public function editUser(Request $request){
        $validate=Validator::make($request->all(),
        [
            'name'=>['required'],
            'username'=>['required'],
          
            'password'=>['nullable','confirmed']
               
        ]
        );

        if($validate->fails()){
            return back()->withErrors($validate);
        }
     

        if($request->password){
            $inputValue= [
                'name'=>$request->name,
                'username'=>$request->username,
               
                'password'=>Hash::make($request->password)
            ];
        }else {
            $inputValue= [
                'name'=>$request->name,
                'username'=>$request->username,
                
            ];
        }
       
        if(User::where('id',$request->id)->update(
           $inputValue
        )){
            Alert::success('Success', __('messages.update'));
            return back()->with('success','Akun berhasil diupdate');
        }else {
            Alert::error('Success', __('messages.fail'));
            return back()->with('fail','Akun gagal diupdate');
        }


    }

    public function destroyUser(Request $request){
        User::destroy($request->id);
        Alert::success('Success',__('messages.delete'));
        return response()->json(['success']);

    }
}
