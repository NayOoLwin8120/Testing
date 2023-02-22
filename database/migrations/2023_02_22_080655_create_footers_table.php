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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->String('phone_number')->nullable();
            $table->String('short_description')->nullable();
            $table->String('Country')->nullable();
            $table->String('address')->nullable();
            $table->String('email')->nullable();
            $table->String('facebook_link')->nullable();
            $table->String('twitter_link')->nullable();
            $table->String('Linked_in')->nullable();
            $table->String('Instrgram')->nullable();
            $table->String('copyright')->nullable();
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
        Schema::dropIfExists('footers');
    }
};
