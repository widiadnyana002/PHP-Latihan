<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengenalanController extends Controller
{
    function index(){
        return view('aritmatika');
    }

    function hasil(Request $request){
        
        $tunj_pas=0;
        $tunj_anak=0;
        $bonus_bersih=0;
        $bonus=0;
        $bonus_kotor=0;

        $gaji = $request->input('gaji');
        $status = $request->input('status');
        $jml_anak = $request->input('anak');
        $masa_kerja = $request->input('masa_kerja');

        //bonus menurut status pernikahan dan anak
        if($status=="menikah"){
            $tunj_pas = $gaji*0.3;
            if($jml_anak==0){
                $tunj_anak=0;
            } else if ($jml_anak==1){
                $tunj_anak=$gaji*0.15;
            } else {
                $tunj_anak=$gaji*0.3;
            }
        } else {
            $tunj_pas=0;
            $tunj_anak=0;
        }

        //bonus sesuai masa kerja
        if($masa_kerja=="kurang"){
            $bonus=$gaji*0.05;
        } else if ($masa_kerja=="lebih"){
            $bonus=$gaji*0.1;
        } else {
            $bonus=$gaji*0.15;
        }

        //bonus kotor
        $bonus_kotor=$tunj_pas + $tunj_anak + $bonus;

        //Pajak 
        if($status=="menikah"){
            $pajak = $bonus_kotor*0.15;
        } else {
            $pajak = $bonus_kotor*0.1;
        }

        $bonus_bersih = $bonus_kotor - $pajak;

        return redirect('/aritmatika')->with('hasil', "Bonus bersih yang diterima adalah : " .$bonus_bersih);
        

    }
}
