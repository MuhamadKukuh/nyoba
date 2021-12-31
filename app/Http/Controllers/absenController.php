<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kelas;
use App\siswa;
use App\recapt;

class absenController extends Controller
{
    public function index(){
        // @dd(kelas::all());
        return view('cobaa', [
            "kelas" => kelas::all()
        ]);
    }

    public function show(kelas $kelas){
        return view('absen', [
            "siswa" => siswa::where('id_kelas', $kelas->id)
                            ->orderBy('nis', 'ASC')
                            ->get(),
            "kelas" => kelas::all()
        ]);
    }

    public function input(Request $request){
        recapt::create([
            'id_user' => $request->parameter,
            'keterangan' => "Hadir",
            'tanggal'   => date('Y-m-d')
        ]);

        return back();
    }

    public function search(Request $request){
        $search = siswa::where('nama', 'like', "%".$request->search."%")
                       ->paginate();

        return view('absen', [
            'siswa' => $search,
            'kelas' => kelas::all() 
        ]);

    }
}
