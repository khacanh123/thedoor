<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id_staff');
            $table->unsignedBigInteger('id_dept');
            $table->foreign('id_dept')->references('id_dept')->on('dept')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('staff_name',30);
            $table->string('phone',10);
            $table->string('address',100);
            $table->string('photo',20);
            $table->longText('story');
            $table->boolean('delete_status')->default('1');
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
        Schema::dropIfExists('staff');
    }
}
