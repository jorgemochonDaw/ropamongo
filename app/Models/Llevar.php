<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Llevar extends Model
{
    use HasFactory;
    protected $primaryKey = '_id';
    protected $fillable = ['_id'];
    protected $collection = 'llevar_coleccion';

}
