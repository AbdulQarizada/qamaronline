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
        Schema::create('fookpacks', function (Blueprint $table) {
            $table->id();
            $table -> string('Name')->nullable();
            $table -> string('ExpectedDate')->nullable();
            $table -> integer('Province_ID')->nullable();
            $table -> integer('District_ID')->nullable();
            $table -> integer('TotalBudget')->nullable();
            $table -> integer('TargetBeneficiaries')->nullable();
            $table -> string('OrganizationName')->nullable();
            $table -> string('Description')->nullable();
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
        Schema::dropIfExists('fookpacks');
    }
};
