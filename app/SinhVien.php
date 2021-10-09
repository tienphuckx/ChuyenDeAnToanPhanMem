<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    protected $fillable = [
        'name',
        'code',
        'class',
        'email',
        'password',
    ];
}
