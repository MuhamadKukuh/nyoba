<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\kelas;
use App\siswa;
use App\recapt;

class absenController extends Controller
{
    public function index(){
        // @dd(kelas::all());
        $konsol = recapt::where('date', date("Y-m-d"))
                        ->get();

        if($konsol->count() == 0){
            recapt::create([
                'id_user' => 0,
                'keterangan'    => "parameter",
                'mounth'=> date("m"),
                'date'  => date("Y-m-d")
            ]);
        }

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
            'mounth'    => date('m'),
            'date'      => date("Y-m-d")
        ]);

        return back();
    }

    public function search(Request $request){
        $request->validate([
            'search'    => 'required|min:2'
        ]);

        $search = siswa::where('nama', 'like', "%".$request->search."%")
                       ->paginate();

        return view('absen', [
            'siswa' => $search,
            'kelas' => kelas::all() 
        ]);

    }

    public function login(){
        return view('login');
    }

    public function auth(Request $request){
        $auth = $request->validate([
            'email' => ['required'],
            'password'  => ['required']
        ]);

        if(Auth::attempt($auth)){
            $request->session()->regenerate();
            return redirect('/recapts');
        }else{
            return back();
        }

    }

    public function logout(Request $req){
        Auth::logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect('/');
    }

}
