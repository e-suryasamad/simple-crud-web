<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class artikelCont extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
      public function viewArtikel(){
        
        $artikel = DB::table('artikel')
        ->get();

            return view('artikel')
            ->with('artikel',$artikel)
            ->with('act','viewArtikel');
       
    }

     public function viewArtikelWithMsg($msg){
        
        $artikel = DB::table('artikel')
        ->get();

            return view('artikel')
            ->with('artikel',$artikel)
            ->with('msg',$msg)
            ->with('act','viewArtikel');
    }


     public function viewTambahArtikel(){
        return view('artikel')
        ->with('act','viewTambahArtikel');
        

     }

      public function viewDetailArtikel($artikel_id){
        $artikel = DB::table('artikel')
        ->where('artikel_id','=',$artikel_id)->first();

        return view('artikel')
        ->with('artikel',$artikel)
        ->with('act','viewDetailArtikel');
        

     }

     public function viewEditArtikel($artikel_id){
        
        $artikel = DB::table('artikel')
        ->where('artikel_id','=',$artikel_id)->first();

        return view('artikel')
        ->with('artikel',$artikel)
        ->with('act','viewEditArtikel');
    }


    public function viewDeleteArtikel($artikel_id){
        $artikel = DB::table('artikel')
        ->get();

        $artikel_del = DB::table('artikel')->where('artikel_id','=',$artikel_id)->first();

        return view('artikel')
        ->with('artikel',$artikel)
        ->with('artikel_del',$artikel_del)
        ->with('act','viewDeleteArtikel');
    }

    public function prosesTambahArtikel(Request $req){
        $artikel_id = $req->artikel_id;
        $artikel_judul = $req->artikel_judul;
        $artikel_penulis = $req->artikel_penulis;
        $artikel_abstrak = $req->artikel_abstrak;
        $artikel_status = "unknown";
        
        $tambahArtikel = DB::table('artikel')->insert(
            [   'artikel_id' => $artikel_id, 
                'artikel_judul' => $artikel_judul, 
                'artikel_penulis' => $artikel_penulis, 
                'artikel_abstrak' => $artikel_abstrak,
                'artikel_status' => $artikel_status
            ]
        );

        if($tambahArtikel){
            return redirect('admin/artikel/msg/1');
        }else{
            return redirect('admin/artikel/msg/2');;
        }

    }

    public function prosesEditArtikel(Request $req){
        $artikel_id = $req->artikel_id;
        $artikel_judul = $req->artikel_judul;
        $artikel_penulis = $req->artikel_penulis;
        $artikel_abstrak = $req->artikel_abstrak;
        
        $editArtikel = DB::table('artikel')
            ->where('artikel_id','=',$artikel_id)
            ->update([
                'artikel_judul' => $artikel_judul, 
                'artikel_penulis' => $artikel_penulis, 
                'artikel_abstrak' => $artikel_abstrak
                ]);

        if($editArtikel){
            return redirect('/admin/artikel/msg/3');
        }else{
            return redirect('/admin/artikel/msg/4');
        }
    }


    public function prosesDeleteArtikel($artikel_id){

        $del = DB::table('artikel')->where('artikel_id', '=', $artikel_id)->delete();

        return redirect('admin/artikel/msg/5');
    }

}
