<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'l_ruangan';

    protected $primaryKey = 'id_ruangan';

    protected $fillable = [
        'id_ruangan',
        'nama'
    ];

    public function DetailMK()
    {
        return $this->hasMany(DetailMK::class, 'id_ruangan', 'id_ruangan');
    }

}
