<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class farmer extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function farmer_agent()
    {
    return $this -> belongsTo(agent::class,'agent_id','id');
    }
}
