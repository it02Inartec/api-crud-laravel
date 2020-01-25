<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address', 500);
            $table->char('firstname', 25);
            $table->char('lastname', 25);
            $table->tinyInteger('age');
            $table->char('gender', 2);
            $table->date('birthday')->nullable();
            $table->char('phone', 14);
            $table->timestamps();
            $table->collation = 'utf8_unicode_ci';
            $table->charset = 'utf8';
        });

        Schema::table('clients', function (Blueprint $table) {
            $table->unsignedBigInteger('id_image')->nullable();
            $table->foreign('id_image')->references('id')->on('images')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
