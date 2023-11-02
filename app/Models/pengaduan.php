<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;
    protected $table='pengaduan';
    protected $primaryKey = 'id_pengaduan';
    public $incrementing = false;
   
    protected $keyType = 'string';
    protected $guarded = [];

}
