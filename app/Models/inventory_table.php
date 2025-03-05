<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory_table extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "Inventory";
    protected $fillable =["inventory_name","quantity","category_id","type_id","size_id"];


    public function inventory_category(){
        return $this->belongsto(Inventory_Category:: class,'inventory_category_id');
    }
    public function size(){
        return $this->belongsto(size_table:: class,'size_id');
    }

    public function type(){
        return $this->belongsto(type_Table:: class,'type_id');
    }
}

