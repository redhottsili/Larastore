<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VatTariff extends Model
{
    use HasFactory;

    protected $hidden = ['created_at','updated_at'];

    public function products(){
        return $this->hasMany('App\Models\Product');
    }

}
