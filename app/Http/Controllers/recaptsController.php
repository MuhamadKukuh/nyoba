<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kelas;
use App\siswa;
use App\recapt;

class recaptsController extends Controller
{
    public function index(){
        return view('recapts', [
            "kelas" => kelas::all()
        ]);
    }

    public function show(kelas $kelas){
        $parameter = recapt::where('id_user', 0)->get();

        return view('recapt', [
            "kelas" => siswa::where('id_kelas', $kelas->id)->first(),
            "bulan" => $parameter,
            "no"    => 1
        ]);
    }

    public function show2(Request $request, kelas $kelas){
        // @dd($request->parameter);
        $recapt = recapt::join('siswas', 'recapts.id_user', '=', 'siswas.id')
                        ->where('recapts.mounth', $request->parameter)->where('siswas.id_kelas', $kelas->id)
                        ->orderBy('recapts.date', "ASC")
                        ->get();

        // @dd($recapt->all());

        return view('recaptBulan', [
            "recapt"    => $recapt,
            "kelas"     => $kelas->kelas,
            "no"        => 1,
            "parameter" => recapt::where('id_user', 0)->where('mounth', $request->parameter)->orderBy('date', 'ASC')->get()
        ]);
        
    }

    public function asw(recapt $bulan, $kelas){
        // @dd($kelas);
        $ajg = kelas::where('kelas', $kelas)->first();
        $kelas = kelas::where('kelas', $kelas)->first();
        $asw = recapt::join('siswas', 'recapts.id_user', 'siswas.id')
                     ->where('date', $bulan->date)->where('siswas.id_kelas', $ajg->id)
                     ->orderBy('siswas.nama', 'ASC')
                     ->get();

        // @dd($ajg->id);
        return view('recaptHari', [ 
            "parameter" => recapt::where('id_user', 0)->orderBy('date', 'ASC')->get(),
            "kelas"     => $kelas->kelas,
            "recapt"    => $asw
        ]);
    }
}
