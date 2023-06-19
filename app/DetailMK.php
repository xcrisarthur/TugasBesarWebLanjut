<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailMK extends Model
{
    protected $table = 'l_detail_mk';

//    protected $primaryKey = 'mk_id';

    protected $fillable = [
        'mk_id',
        'id_ruangan',
        'hari',
        'jam_mulai',
        'jam_selesai',
        'max_participants',
        'semester_id',
        'kelas',
        'tipe',
    ];

    public function MataKuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'mk_id', 'mk_id');
    }

    public function Ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'id_ruangan', 'id_ruangan');
    }
}
