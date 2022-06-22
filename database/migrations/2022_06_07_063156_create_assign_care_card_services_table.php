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
        Schema::create('assign_care_card_services', function (Blueprint $table) {
            $table->id();
            $table -> integer('Assignee_ID')->nullable();
            $table -> integer('RequestedService_ID')->nullable();
            $table -> integer('ServiceProvince_ID')->nullable();
            $table -> integer('ServiceDistrict_ID')->nullable();
            $table -> integer('ServiceProvider_ID')->nullable();
            $table -> integer('Discount')->nullable();
            $table -> integer('IsFree')->nullable()->default(0);
            $table -> string('Status')->nullable();
            $table -> integer('Status_By')->nullable();
            $table -> integer('Created_By')->nullable();
            $table -> integer('Owner')->nullable();
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
        Schema::dropIfExists('assign_care_card_services');
    }
};
