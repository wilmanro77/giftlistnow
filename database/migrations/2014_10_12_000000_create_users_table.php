<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('name_event')->default("Sin nombre");
            $table->string('event_code');
            $table->date('date_start')->default(date("Y-m-d h:i:s"));
            $table->date('date_end')->default(date("Y-m-d h:i:s"));
            $table->string('name_boyfriend')->default("");
            $table->string('last_name_boyfriend')->default("");
            $table->string('name_girlfriend')->default("");
            $table->string('last_name_girlfriend')->default("");
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
