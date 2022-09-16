<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Surat;

class SuratController extends Controller
{
    public function index(){
        return view('home',['surat'=>surat::all()]);
    }
    public function store(Request $request){

        $validated=$request->validate([
            'pdf'=>'mimes:pdf',
            
        ]);
        $dokumen=$request->file('file');
        $nama_dokumen='DOC'.date('Tmdhis').'.'.$request->file->extension() ;
        $dokumen->move('dokumen/',$nama_dokumen);

        Surat::create([
            'no_surat'=>$request->no_surat,
            'kategori'=>$request->kategori,
            'judul'=>$request->judul,
            'file'=>$nama_dokumen,
        ]);
        if ($dokumen) {
            return redirect()->route('home')->with(['success' => 'Data berhasil diarsipkan']);
        } else {
            return redirect()->back()->withInput()->with(['error' => 'Data gagal diarsipkan']);
        }
    
    }
    public function show($id)
    {  
       return view('lihat',['surat'=>Surat::find($id)]);
    }
    public function hapus($id){
        $data=Surat::find($id);
        if($data->featured_image && file_exists(storage_path('app/public/' . $data->featured_image)))
            {
                \Storage::delete('public/'.$data->featured_image);
            }
        $data->delete();
    return redirect('/home');
    }
    // public function download($file)
    // {
    //     return response()->download(public_path('uploads/' . $file));
    //     return response()->download(storage_path('/app/files/'. $file));
        
    // }
    // public function download($file)
    // {
    //     return response()->download(public_path('uploads/' . $file));
    // }
    public function cari(Request $request){
        $data=Surat::where('judul','like','%'.$request->cari.'%')->get();
        return view('home',['surat'=>$data]);
    }
}
