<?php
namespace ViewMyMail\GetMyMail;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Log;
use Illuminate\Support\Facades\Artisan;
class InsertUserController extends Controller
{
    public function __construct()
    {
        Log::info('controller constructor');

    }

    /**
     * Creates a new database schema.

     * @param  string $schemaName The new schema name.
     * @return bool


    public function createSchema()
    {
        // We will use the `statement` method from the connection class so that
        // we have access to parameter binding.
        DB::statement('CREATE DATABASE IF NOT EXISTS ClientsDB DEFAULT CHARACTER SET utf8');
        Log::info('created the db');
        env('DB_DATABASE','ClientsDB');
        $this->insertClient();
    }
     */
    public function insertClient(){
           env('DB_DATABASE','test');
        env('DB_USERNAME','root');
        env('DB_PASSWORD','');
//        define('STDIN',fopen("php://stdin","r"));
//        Artisan::call('migrate', ['--path' => 'Gkblabs/Phani/database/migrations']);
       Log::info('loading insertUserController');
        //createSchema('ClientsDB');
       DB::table('clients')->insert(['name'=>'phani','emailId'=>'bhpshekhar4@gmail.com','password'=>'Shekhar4$']);
    }
}
