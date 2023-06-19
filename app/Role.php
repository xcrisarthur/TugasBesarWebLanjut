<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'l_role';

    protected $primaryKey = 'role_id';

    protected $fillable = [
        'role_id',
        'role_name'
    ];
}
