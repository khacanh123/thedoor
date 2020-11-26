<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHirePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hire_page', function (Blueprint $table) {
            $table->bigIncrements('id_hp');
            $table->string('partner_name',30);
            $table->string('email',30);
            $table->string('project_name',100);
            $table->longText('intro_project');
            $table->string('service',30);
            $table->string('budget',10);
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
        Schema::dropIfExists('hire_page');
    }
}
