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
        Schema::create('beneficiarylists', function (Blueprint $table) {
            $table->id();
            $table -> string('FullName')->nullable();
            $table -> string('FatherName')->nullable();
            $table -> string('TazkiraID')->nullable();
            $table -> string('PrimaryNumber')->nullable();
            $table -> string('SecondaryNumber')->nullable();
            $table -> string('Province_ID')->nullable();
            $table -> string('Reference_ID')->nullable();
            $table -> string('Created_By')->nullable();
            $table -> string('Owner')->nullable();




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
        Schema::dropIfExists('beneficiarylists');
    }
};
