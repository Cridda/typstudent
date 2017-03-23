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
    		$table->string('kind');
    		$table->integer('subject');
    		$table->integer('minutes');
    		$table->text('comments');
    		$table->timestamps();
    		$table->integer('status');
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
