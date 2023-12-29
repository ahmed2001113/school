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
        Schema::create('my__parents', function (Blueprint $table) {
            $table->id();
            $table->string('Email')->unique();
            $table->string('Password');

            //Fatherinformation
            $table->string('Name_Father');
            $table->string('Name_Father_en');
            $table->string('National_ID_Father');
            $table->string('Passport_ID_Father');
            $table->string('Phone_Father');
            $table->string('Job_Father');
            $table->string('Job_Father_en');
            $table->foreignId('Nationality_Father_id')->constrained('nationalities','id')->cascadeOnDelete();
            $table->foreignId('Blood_Type_Father_id')->constrained('type__bloods','id')->cascadeOnDelete();
            $table->foreignId('Religion_Father_id')->constrained('religions','id')->cascadeOnDelete();
            $table->string('Address_Father');

            //Mother information
            $table->string('Name_Mother');
            $table->string('Name_Mother_en');
            $table->string('National_ID_Mother');
            $table->string('Passport_ID_Mother');
            $table->string('Phone_Mother');
            $table->string('Job_Mother');
            $table->string('Job_Mother_en');
            $table->foreignId('Nationality_Mother_id')->constrained('nationalities','id')->cascadeOnDelete();
            $table->foreignId('Blood_Type_Mother_id')->constrained('type__bloods','id')->cascadeOnDelete();
            $table->foreignId('Religion_Mother_id')->constrained('religions','id')->cascadeOnDelete();
            $table->string('Address_Mother');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my__parents');
    }
};
