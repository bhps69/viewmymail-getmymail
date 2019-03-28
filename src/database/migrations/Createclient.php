<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createclient extends Migration
{

    /**
     * Creates a new database schema.

     * @param  string $schemaName The new schema name.
     * @return bool
     */

// Now we can create a MySQL Database
            /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        createSchema('ClientsDB');
        Log::info('setting the environment variable');
        env('DB_DATABASE','ClientsDB');
        Schema::table('clients', function(Blueprint $table){
            Log.info('creating the table');
            $table->integer('id')->autoIncrement();
            $table->string('name');
            $table->string('emailId');
            $table->string('password');
        }); //
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
