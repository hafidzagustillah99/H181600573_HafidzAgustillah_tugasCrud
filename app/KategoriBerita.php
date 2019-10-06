<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    protected $table='kategori_artikel';

    protected $fillable=[
        'nama','user_id'
    ];
}
