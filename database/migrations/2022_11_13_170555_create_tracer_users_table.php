<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracerUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracer_users', function (Blueprint $table) {
            $table->id();
            $table->char('nisn', 14)->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('nomer')->unique();
            $table->string('program_studi');
             $table->string('type');
            $table->string('tahun_lulus');
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
        Schema::dropIfExists('tracer_users');
    }
}
