<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAstsJuliasBrunoYamiNoelColumnsToSaxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sax', function (Blueprint $table) {
            $table->integer('asta')->nullable();
            $table->float('julias')->nullable();
            $table->string('bruno')->nullable();
            $table->date('yami')->nullable();
            $table->text('noel')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sax', function (Blueprint $table) {
            //
        });
    }
}
