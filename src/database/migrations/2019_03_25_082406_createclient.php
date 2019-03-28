<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createclient extends Migration
{

protected $table='clients';
// Now we can create a MySQL Database
            /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hastable('clients'))
        {
            Schema::create('clients', function(Blueprint $table){
            $table->integer('id')->autoIncrement();
            $table->string('name');
            $table->string('emailId')->varchar(255);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        }); //
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');//
    }
}
