<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    protected $table = 'l_program_studi';

    protected $primaryKey = 'ps_id';

    protected $fillable = [
        'ps_id',
        'ps_name'
    ];
}
