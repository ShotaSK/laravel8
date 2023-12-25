<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFANGAColumnsToFangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fang', function (Blueprint $table) {
            $table->integer('f')->nullable();
            $table->float('a')->nullable();
            $table->string('n')->nullable();
            $table->date('g')->nullable();
            $table->text('j')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fang', function (Blueprint $table) {
            //
        });
    }
}
