<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dosenCont extends Controller
{
     
      public function viewDosen(){
        
        $dosen = DB::table('dosen')
        ->join('jurusan', 'dosen.kodeJurusan', '=', 'jurusan.kodeJurusan')
        ->get();

            return view('dosen')
            ->with('dosen',$dosen)
            ->with('act','viewDosen');
       
    }

     public function viewDosenWithMsg($msg){
        
        $dosen = DB::table('dosen')
        ->join('jurusan', 'dosen.kodeJurusan', '=', 'jurusan.kodeJurusan')
        ->get();

            return view('dosen')
            ->with('dosen',$dosen)
            ->with('msg',$msg)
            ->with('act','viewDosen');
    }


     public function viewTambahDosen(){
        $jrn = DB::table('jurusan')->get();
        return view('dosen')
        ->with('act','ViewTambahDosen')
        ->with('jrn',$jrn);

     }

     public function viewEditDosen($id){
        
        $dosen = DB::table('dosen')
        ->join('jurusan', 'dosen.kodeJurusan', '=', 'jurusan.kodeJurusan')
        ->where('dosen.id','=',$id)->first();

        $jrn = DB::table('jurusan')->get();
        return view('dosen')
        ->with('dosen',$dosen)
        ->with('jrn',$jrn)
        ->with('act','ViewEditDosen');
    }


    public function viewDeleteDosen($id){
        $dosen = DB::table('dosen')
        ->join('jurusan', 'dosen.kodeJurusan', '=', 'jurusan.kodeJurusan')
        ->get();

        $dosen_del = DB::table('dosen')->where('id','=',$id)->first();

        return view('dosen')
        ->with('dosen',$dosen)
        ->with('dosen_del',$dosen_del)
        ->with('act','ViewDeleteDosen');
    }

    public function prosesTambahDosen(Request $req){
        $nip = $req->nip;
        $nama = $req->nama;
        $kodeJurusan = $req->kodeJurusan;
        $alamat = $req->alamat;
        
        $hasil = DB::table('dosen')->insert(
            ['nip' => $nip, 'nama' => $nama, 'kodeJurusan' => $kodeJurusan, 'alamat' => $alamat]
        );

        if($hasil){
            return redirect('/dosen/msg/1');
        }else{
            return redirect('/dosen/msg/2');;
        }

    }

    public function prosesEditDosen(Request $req){
        $id = $req->id;
        $nip = $req->nip;
        $nama = $req->nama;
        $kodeJurusan = $req->kodeJurusan;
        $alamat = $req->alamat;
        
        $hasil = DB::table('dosen')
            ->where('id','=',$id)
            ->update(['nip' => $nip, 'nama' => $nama, 'kodeJurusan' => $kodeJurusan, 'alamat' => $alamat]);

        if($hasil){
            return redirect('/dosen/msg/3');
        }else{
            return redirect('/dosen/msg/4');
        }
    }


    public function prosesDeleteDosen($id){

        $del = DB::table('dosen')->where('id', '=', $id)->delete();

        return redirect('/dosen/msg/5');
    }

}
