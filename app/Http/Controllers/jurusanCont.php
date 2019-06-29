<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jurusanCont extends Controller
{
     
      public function viewJurusan(){
        
        $jrn = DB::table('jurusan')->get();

            return view('jurusan')
            ->with('jrn',$jrn)
            ->with('act','viewJurusan');
       
    }

     public function viewJurusanWithMsg($msg){
        
        $jrn = DB::table('jurusan')->get();

            return view('jurusan')
            ->with('jrn',$jrn)
            ->with('msg',$msg)
            ->with('act','viewJurusan');
    }


     public function viewTambahJurusan(){
        return view('jurusan')
        ->with('act','ViewTambahJurusan');

     }

     public function viewEditJurusan($id_Jurusan){
        
        $jrn = DB::table('jurusan')->where('id_Jurusan','=',$id_Jurusan)->first();

        return view('jurusan')
        ->with('jrn',$jrn)
        ->with('act','ViewEditJurusan');
    }


    public function viewDeleteJurusan($id_Jurusan){
        $jrn = DB::table('jurusan')->get();

        $jrn_del = DB::table('jurusan')->where('id_Jurusan','=',$id_Jurusan)->first();

        return view('jurusan')
        ->with('jrn',$jrn)
        ->with('jrn_del',$jrn_del)
        ->with('act','ViewDeleteJurusan');
    }

    public function prosesTambahJurusan(Request $req){
        $kodeJurusan = $req->kodeJurusan;
        $namaJurusan = $req->namaJurusan;

        $hasil = DB::table('jurusan')->insert(
            ['kodeJurusan' => $kodeJurusan, 'namaJurusan' => $namaJurusan]
        );

        if($hasil){
            return redirect('/jrn/msg/1');
        }else{
            return redirect('/jrn/msg/2');;
        }

    }

    public function prosesEditJurusan(Request $req){
        $id_Jurusan = $req->id_Jurusan;
        $kodeJurusan = $req->kodeJurusan;
        $namaJurusan = $req->namaJurusan;
        
        $hasil = DB::table('jurusan')
            ->where('id_Jurusan','=',$id_Jurusan)
            ->update(['kodeJurusan' => $kodeJurusan, 'namaJurusan' => $namaJurusan]);

        if($hasil){
            return redirect('/jrn/msg/3');
        }else{
            return redirect('/jrn/msg/4');
        }
    }


    public function prosesDeleteJurusan($id_Jurusan){

        $del = DB::table('jurusan')->where('id_Jurusan', '=', $id_Jurusan)->delete();

        return redirect('/jrn/msg/5');
    }

}
