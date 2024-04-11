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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', length: 255)->nullable();
            $table->string('lastname', length: 255)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('education_qualification', length: 255)->nullable();
            $table->text('address')->nullable();
            $table->string('email', length: 255)->nullable();
            $table->string('phone', length: 15)->nullable();
            $table->text('photo')->nullable();
            $table->text('resume')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
