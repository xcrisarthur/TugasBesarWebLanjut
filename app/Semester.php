<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $table = 'l_semester';

    protected $primaryKey = 'semester_id';

    protected $fillable = [
        'semester_id',
        'semester_name'
    ];

}
