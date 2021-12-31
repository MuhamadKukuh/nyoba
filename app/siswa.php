<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    public function kelas(){
        return $this->belongsTo(kelas::class, 'id_kelas');
    }

    public function gender(){
        return $this->belongsTo(gender::class, 'id_gender');
    }
    
    public function agama(){
        return $this->belongsTo(agama::class, 'id_agama');
    }
}
