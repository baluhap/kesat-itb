<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHandleReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('handle_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_handler');
            $table->integer('id_report');
            $table->timestamps();
            $table->integer("report_label");
            $table->text("detail");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('handle_reports');
    }
}
