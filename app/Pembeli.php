<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table="Pembeli";
    protected $primaryKey="id";
    protected $fillable=['No_KTP','nama_pembeli','alamat_pembeli','notlp_pembeli'];
}
