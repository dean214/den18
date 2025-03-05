<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory_Category extends Model
{
    use HasFactory;
    protected $table ="Inventory_Category";
    protected $fillable =["category_name"];


  
   
}
