<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_table extends Model
{
    use HasFactory;

    protected $table ="Type";
    protected $fillable =["type_name","category_id"];

    public function inventory_type(){
        return $this->hasMany(inventory:: class);
    }
    public function size_type(){
        return $this->hasMany(size:: class);
    }
    public function type(){
        return $this->belongsto(type:: class,'type_id');
    }
}
