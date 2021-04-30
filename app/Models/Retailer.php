<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    protected $guarded=[];
    use HasFactory;

public function retailer(){
    return $this -> belongsTo(User::class,'user_id','id');
}
}
