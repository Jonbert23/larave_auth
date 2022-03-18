<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            $table->string('award_title');
            $table->string('company_name');
            $table->date('year_from');
            $table->date('year_to');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('awards');
    }
};
