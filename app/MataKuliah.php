<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProgramStudi;

class MataKuliah extends Model
{
    protected $table = 'l_mata_kuliah';

//    protected $primaryKey = 'mk_id';

    protected $fillable = [
        'mk_id',
        'mk_name',
        'sks',
        'ps_id',
    ];

    public function DetailMK()
    {
        return $this->hasMany(DetailMK::class, 'mk_id', 'mk_id');
    }

    public function ProgramStudi()
    {
        return $this->belongsTo(ProgramStudi::class, 'ps_id');
    }
}
