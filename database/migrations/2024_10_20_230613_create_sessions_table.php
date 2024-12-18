<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->text('payload');
            $table->integer('last_activity')->unsigned();
            $table->unsignedBigInteger('user_id')->nullable(); 
            $table->string('ip_address')->nullable();
            $table->string('user_agent')->nullable(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('sessions');
    }
};
