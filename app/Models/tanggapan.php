<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tanggapan extends Model
{
    use HasFactory;
    //set tabel
    protected $table = "tanggapan";
    //set primary key
    protected $primaryKey = "id_tanggapan";
    //set auto increment
    public $incrementing = false;

    //setting kolom yang dapat diisi
    protected $guarded = []; 
}
