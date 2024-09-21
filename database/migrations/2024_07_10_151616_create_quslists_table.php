<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuslistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quslists', function (Blueprint $table) {
            $table->id();
            
            $table->string('eid');

            $table->string('qusid');

            $table->string('ename');

            $table->string('question');  
            
            $table->string('op1');

            $table->string('op2');

            $table->string('op3');

            $table->string('op4');

            $table->string('ans');
            
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
        Schema::dropIfExists('quslists');
    }
}
