<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id_product');
            $table->unsignedBigInteger('id_customer');
            $table->foreign('id_customer')->references('id_customer')->on('customer')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->unsignedBigInteger('id_service');
            $table->foreign('id_service')->references('id_service')->on('service')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('name');
            $table->string('begin_date');
            $table->string('finnish_date');
            $table->string('members');
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
        Schema::dropIfExists('product');
    }
}
