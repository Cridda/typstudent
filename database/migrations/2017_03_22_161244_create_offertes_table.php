<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffertesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('offertes', function (Blueprint $table) {
    		$table->increments('id');
    		$table->string('name');
    		$table->string('email')->unique();
    		$table->string('telephone');
    		$table->string('soort');
    		$table->integer('subject');
    		$table->integer('minuten');
    		$table->text('opmerkingen');
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
        //
    }
}
