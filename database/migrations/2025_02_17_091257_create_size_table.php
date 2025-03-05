<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('size', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("type_id");
            $table->string("size_name",100) ;
            $table->timestamps();

            $table->foreign("type_id")->references("id")->on("type")->onDelete("cascade")->onUpdate("cascade");
        });


        DB::table("size")->insert([
            [
               'type_id' => '1',
               'size_name' => '12'
            ],
    
            [
               'type_id' => '2',
               'size_name' => 'Full Mirror'
            ],
   
            [
               'type_id' => '3',
               'size_name' => '500ml'
            ],
   

   
           ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('size');
    }
};
