<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Calzado extends Model
{
    use HasFactory;
    protected $primaryKey = '_id';
    protected $fillable = ['_id', 'talla', 'marca', 'precio','color'];
    protected $collection = 'calzado_coleccion';
    public function llevar() {
        return $this->hasOne(Llevar::class);
    }
}
