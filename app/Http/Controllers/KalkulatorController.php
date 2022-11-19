<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    function index(){
        return view('kalkulator');
    }

    function kalkulator(Request $request){

        $angka1 = $request->input('bil_1');
        $angka2 = $request->input('bil_2');
        $operator = $request->input('operator');
        $hasil = 0;

        if($operator=="tambah"){
            $hasil = $angka1 + $angka2;
        } else if ($operator=="kurang"){
            $hasil = $angka1 - $angka2;
        } else if ($operator=="kali"){
            $hasil = $angka1 * $angka2;
        } else if ($operator=="bagi"){
            $hasil = $angka1 / $angka2;
        } else if ($operator=="modulus"){
            $hasil = $angka1 % $angka2;
        } else {
            $hasil = 0;
        }

        // echo $hasil;
        return redirect('/kalkulator')->with('hasil', "Hasil : " .$hasil);
    }
}
