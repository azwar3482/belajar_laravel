<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album';
    public function photos(){
        return $this->hasMany('App\Models\galeri', 'id_album', 'id');
    }
}
