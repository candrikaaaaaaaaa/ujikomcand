<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KriditPaket extends Model
{
    protected $table="Motor";
    protected $primaryKey="id";
    protected $fillable=['kode_paket','paket_hargacash','paket_uangmuka','paket_jumlahcicilan','paket_bunga','paket_nilaicicilan'];
}
