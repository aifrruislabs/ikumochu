<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    use HasFactory;

    //Fillables
    protected $fillable = [

        'user_id', 'dataset_name', 'dataset_info', 'dataset_columns'

    ];
}
