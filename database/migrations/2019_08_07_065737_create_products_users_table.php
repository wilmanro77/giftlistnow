<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("id_producto");
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('cascade');
            $table->unsignedBigInteger("id_usuario");
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_users');
    }
}
