<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mahasiswaCont extends Controller
{ 
    
      public function viewMahasiswa(){
        
        $mhs = DB::table('mahasiswa')
            ->join('jurusan', 'mahasiswa.kodeJurusan', '=', 'jurusan.kodeJurusan')
            ->get();
        //dd($mhs);
        
            return view('mahasiswa')
            ->with('mhs',$mhs)
            ->with('act','viewMahasiswa');
       
    }

     public function viewMahasiswaWithMsg($msg){
        
        $mhs = DB::table('mahasiswa')
        ->join('jurusan', 'mahasiswa.kodeJurusan', '=', 'jurusan.kodeJurusan')
        ->get();

            return view('mahasiswa')
            ->with('mhs',$mhs)
            ->with('msg',$msg)
            ->with('act','viewMahasiswa');
    }


     public function viewTambahMahasiswa(){

        $jrn = DB::table('jurusan')->get();

        return view('mahasiswa')
        ->with('act','ViewTambahMahasiswa')
        ->with('jrn',$jrn);

     }

     public function viewEditMahasiswa($id){
        
        $mhs = DB::table('mahasiswa')
        ->join('jurusan', 'mahasiswa.kodeJurusan', '=', 'jurusan.kodeJurusan')
        ->where('id','=',$id)->first();

        $jrn = DB::table('jurusan')->get();
        return view('mahasiswa')
        ->with('mhs',$mhs)
        ->with('jrn',$jrn)
        ->with('act','ViewEditMahasiswa');
    }


    public function viewDeleteMahasiswa($id){
        $mhs = DB::table('mahasiswa')
        ->join('jurusan', 'mahasiswa.kodeJurusan', '=', 'jurusan.kodeJurusan')
        ->get();

        $mhs_del = DB::table('mahasiswa')->where('id','=',$id)->first();
        //dd($mhs_del);
        
        return view('mahasiswa')
        ->with('mhs',$mhs)
        ->with('mhs_del',$mhs_del)
        ->with('act','ViewDeleteMahasiswa');
    }

	public function prosesTambahMahasiswa(Request $req){
    	$nim = $req->nim;
    	$nama = $req->nama;
    	$kodeJurusan = $req->kodeJurusan;
        $alamat = $req->alamat;
    	
        $hasil = DB::table('mahasiswa')->insert(
            ['nim' => $nim, 'nama' => $nama, 'kodeJurusan' => $kodeJurusan, 'alamat' => $alamat]
        );

        if($hasil){
            return redirect('/mhs/msg/1');
        }else{
            return redirect('/mhs/msg/2');;
        }

    }

    public function prosesEditMahasiswa(Request $req){
        $id = $req->id;
        $nim = $req->nim;
        $nama = $req->nama;
        $kodeJurusan = $req->kodeJurusan;
        $alamat = $req->alamat;
        
        $hasil = DB::table('mahasiswa')
            ->where('id','=',$id)
            ->update(['nim' => $nim, 'nama' => $nama, 'kodeJurusan' => $kodeJurusan, 'alamat' => $alamat]);

        if($hasil){
            return redirect('/mhs/msg/3');
        }else{
            return redirect('/mhs/msg/4');
        }
    }


    public function prosesDeleteMahasiswa($id){

        $del = DB::table('mahasiswa')->where('id', '=', $id)->delete();

        return redirect('/mhs/msg/5');
    }

}
