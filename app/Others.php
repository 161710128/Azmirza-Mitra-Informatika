<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Others extends Model
{
    protected $table = 'others';
    protected $fillable = ['judul','gambar','deskripsi'];
    public $timestamps = true;
}
