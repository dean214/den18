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
        Schema::create('type', function (Blueprint $table) {
            $table->id();
            $table->string("type_name" , 100);
            $table->unsignedBigInteger("category_id");
            $table->timestamps();

            $table->foreign("category_id")->references("id")->on("inventory_category")->onDelete("cascade")->onUpdate("cascade");

        });

        DB::table("type")->insert([
         [
            'type_name' => 'backwrench',
            'category_id' => '1'
         ],
 
         [
            'type_name' => 'Glass',
            'category_id' => '2'
         ],

         [
            'type_name' => 'Havoline',
            'category_id' => '3'
         ],




        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type');
    }
};
