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
        Schema::table('flights_tables', function (Blueprint $table) {
            
            $table->string('title');
        });
    }

    // php artisan make:migration add_title_to_flights_tables
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flights_tables', function (Blueprint $table) {
            //
        });
    }
};
