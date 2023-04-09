<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class legalitas extends Model
{
    protected $table = 'legalitas'
    protected $primarykey = 'id_legalitas'
    protected $fillable = [
        'id_legalitas', 'name', 'description', 'status'
    ];
}
