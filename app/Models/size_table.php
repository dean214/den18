<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class size_table extends Model
{
    use HasFactory;
    protected $table = "Size";
    protected $fillable =["type_id","size_name"];
    

    public function inventory_size(){
        return $this->hasMany(inventory:: class);
    }
    public function type(){
        return $this->belongsto(type:: class,'type_id');
    }


}
