<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indexs extends Model
{
    protected $table = 'indexs';
    protected $fillable = ['judul','deskripsi'];
    public $timestamps = true;
}
