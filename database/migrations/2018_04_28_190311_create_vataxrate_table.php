<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVataxrateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vataxrate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('vataxrate', 8, 4);
            $table->date('validfrom')->nullable();
            $table->date('validto')->nullable();
            $table->boolean('isdefault')->default(false);
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
        Schema::dropIfExists('vataxrate');
    }
}
