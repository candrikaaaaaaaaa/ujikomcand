<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table="Motor";
    protected $primaryKey="id";
    protected $fillable=['kode_motor','merk_motor','type_motor','warna_motor','harga_motor','gambar_motor'];
}
