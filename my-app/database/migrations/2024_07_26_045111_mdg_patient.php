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
        Schema::create('mdg_patient', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->unique();
            $table->string('first_name', 50);
            $table->string('last', 50);
            $table->string('middle_name', 50)->nullable();
            $table->string('suffix', 5)->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mdg_patient', function (Blueprint $table) {
            //
        });
    }
};
