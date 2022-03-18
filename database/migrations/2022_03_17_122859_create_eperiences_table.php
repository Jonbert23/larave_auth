<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('eperiences', function (Blueprint $table) {
            $table->id();
            $table->string('job_position');
            $table->string('company_name');
            $table->date('year_from');
            $table->date('year_to');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('eperiences');
    }
};
