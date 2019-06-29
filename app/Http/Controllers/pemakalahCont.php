<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pemakalahCont extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     
      public function viewPemakalah(){
        
        $pemakalah = DB::table('pemakalah')
        ->join('artikel', 'pemakalah.artikel_id', '=', 'artikel.artikel_id')
        ->get();

            return view('pemakalah')
            ->with('pemakalah',$pemakalah)
            ->with('act','viewPemakalah');
       
    }

     public function viewPemakalahWithMsg($msg){
        
        $pemakalah = DB::table('pemakalah')
        ->join('artikel', 'pemakalah.artikel_id', '=', 'artikel.artikel_id')
        ->get();

            return view('pemakalah')
            ->with('pemakalah',$pemakalah)
            ->with('msg',$msg)
            ->with('act','viewPemakalah');
    }

      public function viewDetailPemakalah($pemakalah_id){
        $pemakalah = DB::table('pemakalah')
        ->join('artikel', 'pemakalah.artikel_id', '=', 'artikel.artikel_id')
        ->where('pemakalah_id','=',$pemakalah_id)->first();

        return view('pemakalah')
        ->with('pemakalah',$pemakalah)
        ->with('act','viewDetailPemakalah');
        

     }

    public function prosesKonfirmasiPemakalah(Request $req){
        $artikel_id = $req->artikel_id;
        $artikel_status = $req->artikel_status;
    
        $updateArtikel = DB::table('artikel')
            ->where('artikel_id','=',$artikel_id)
            ->update([
                'artikel_status' => $artikel_status
                ]);

        if($updateArtikel){
            return redirect('/admin/pemakalah/msg/3');
        }else{
            return redirect('/admin/pemakalah/msg/4');
        }
    }
}
