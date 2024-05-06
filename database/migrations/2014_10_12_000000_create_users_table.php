<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

$host = "localhost";
$username = "root";

$password ="";

$db = "asetict"; 


$connection = new mysqli($host, $username, $password,$db); 

if($connection === false){
    die ("Not connected to database"); 
}

//copy the records using the sql query

$sql_query = "INSERT users select * from customers"; 

if($connection->query($sql_query) === true){
    echo "Data copied successfully"; 
}
else{
    echo"Error occured in copying data"; 
}

$connection->close();

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
