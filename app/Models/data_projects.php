<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_projects extends Model
{
    protected $table = 'data_projects';
    protected $primarykey = 'id_data_project';
    protected $fillable = [
        'id_data_project', 'name', 'description', 'team_name'
    ];
}
