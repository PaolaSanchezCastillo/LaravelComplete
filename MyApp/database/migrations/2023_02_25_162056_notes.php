<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       Schema::create('notes', function (Blueprint $table) {
        $table->id(); 
        $table->string('titulo'); 
        $table->string('description'); 
        $table->string('contenido'); 
        $table->string('ejemplo'); 
       });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::drop('notes');
    }
};
