<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dkbs extends Model
{
    protected $table = 'l_dkbs';

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_id',
        'l_ruangan_id_ruangan',
        'mk_id',
        'semester_id',
    ];

    public function MataKuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'mk_id', 'mk_id');
    }

    public function Ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'id_ruangan', 'id_ruangan');
    }

    public function Semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id', 'semester_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
