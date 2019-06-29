<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class anggotaCont extends Controller
{
     
      public function viewBeranda(){
        
        $jumpemakalah = DB::table('jumpemakalah')
        ->get();
        $jumpeserta = DB::table('jumpeserta')
        ->get();

            return view('anggota.beranda')
            ->with('jumpemakalah',$jumpemakalah)
            ->with('jumpeserta',$jumpeserta)
            ->with('act','viewBeranda');
       
    }

    public function viewArtikel(){
        
        return view('anggota.artikel')
        ->with('act','viewArtikel');
       
    }

    public function viewArtikelWithMsg($msg){
        
            return view('anggota.artikel')
            ->with('msg',$msg)
            ->with('act','viewArtikel');
    }

    public function viewKonfirmasi($artikel_id){
        $artikel = DB::table('artikel')
        ->where('artikel_id','=',$artikel_id)->first();

        return view('anggota.artikel')
        ->with('artikel',$artikel)
        ->with('act','viewKonfirmasi');
       
    }

     public function prosesKonfirmasi(Request $req){
        
        $artikel_id = $req->artikel_id;
        $artikel_penulis = $req->artikel_penulis;
        $pemakalah_email = $req->pemakalah_email;
        $pemakalah_telp = $req->pemakalah_telp;
        $pemakalah_nama_rek = $req->pemakalah_nama_rek;
        $pemakalah_bank = $req->pemakalah_bank;
        if($req->hasFile('pemakalah_bukti')){
            $req->file('pemakalah_bukti');
            //$pemakalah_bukti = $req->pemakalah_bukti->store('public/bukti');
            $upload = Storage::putFile('public/bukti', $req->file('pemakalah_bukti'));

            $storage = 'storage/';
            $slash= '/';
            $cacah = explode("/",$upload);
            $pemakalah_bukti = $storage.$cacah[1].$slash.$cacah[2];
        }
        else{
            $pemakalah_bukti = 'user/img/noimage.png';
        }
        $pemakalah_pesan = $req->pemakalah_pesan;

        $tambahPemakalah = DB::table('pemakalah')->insert(
            [   
                'pemakalah_nama' => $artikel_penulis, 
                'pemakalah_telp' => $pemakalah_telp, 
                'pemakalah_email' => $pemakalah_email,
                'pemakalah_bank' => $pemakalah_bank,
                'pemakalah_nama_rek' => $pemakalah_nama_rek,
                'pemakalah_bukti' => $pemakalah_bukti,
                'pemakalah_pesan' => $pemakalah_pesan,
                'artikel_id' => $artikel_id
            ]
        );

        $updateArtikel = DB::table('artikel')
            ->where('artikel_id','=',$artikel_id)
            ->update([
                'artikel_status' => 'pending'
                ]);

        if($tambahPemakalah&&$updateArtikel){
            return redirect('anggota/artikel/msg/1');
        }else{
            return redirect('admin/artikel/msg/2');;
        }
       
    }


    public function prosesCari(Request $req){
        $artikel_id = $req->artikel_id;
        
        $hasil = DB::table('artikel')
        ->where('artikel_id','=',$artikel_id)->first();

        if($hasil){
            return view('anggota.artikel')
            ->with('hasil',$hasil)
            ->with('act','viewHasilCari');
        }else{
            return view('anggota.artikel')
            ->with('act','notFound');
        }
    }
}
