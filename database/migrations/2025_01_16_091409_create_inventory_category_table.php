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
        Schema::create('inventory_category', function (Blueprint $table) {
            $table->id();
            $table->string("category_name" , 100);
            $table->timestamps();
        });

        




        DB::table("inventory_category")->insert([
             [
                'category_name' => 'Tools'
             ],
             [
                    'category_name' => 'Parts'
             ],
             [
                    'category_name' => 'Oil'
             ],









        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_category');
    }
};
