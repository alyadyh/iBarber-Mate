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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_num');
            $table->dateTime('point_date');
            $table->unsignedBigInteger('slot_id');
            $table->foreign('slot_id')
                ->references('id')
                ->on('slots');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')
                    ->references('id')
                    ->on('services');
            $table->unsignedBigInteger('hairstyle_id')->nullable();
            $table->foreign('hairstyle_id')
                    ->references('id')
                    ->on('hairstyles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
