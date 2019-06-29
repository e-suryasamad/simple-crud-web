<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pesertaCont extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
      public function viewPeserta(){
        
        $peserta = DB::table('peserta')
        ->get();

            return view('peserta')
            ->with('peserta',$peserta)
            ->with('act','viewPeserta');
       
    }

     public function viewPesertaWithMsg($msg){
        
        $peserta = DB::table('peserta')
        ->get();

            return view('peserta')
            ->with('peserta',$peserta)
            ->with('msg',$msg)
            ->with('act','viewPeserta');
    }

      public function viewDetailPeserta($peserta_id){
        $peserta = DB::table('peserta')
        ->where('peserta_id','=',$peserta_id)->first();

        return view('peserta')
        ->with('peserta',$peserta)
        ->with('act','viewDetailPeserta');
        

     }

    public function prosesKonfirmasiPeserta(Request $req){
        $peserta_id = $req->peserta_id;
        $peserta_status = $req->peserta_status;
    
        $updatePeserta = DB::table('peserta')
            ->where('peserta_id','=',$peserta_id)
            ->update([
                'peserta_status' => $peserta_status
                ]);

        if($updatePeserta){
            return redirect('/admin/peserta/msg/3');
        }else{
            return redirect('/admin/peserta/msg/4');
        }
    }
}
