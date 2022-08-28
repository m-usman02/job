<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id');
            $table->string('job_id', 255);
            $table->bigInteger('type_id');
            $table->string('issue_described', 1000)->nullable();
            $table->string('issue_found', 1000)->nullable();
            $table->string('status', 255)->default('pending');
            $table->string('completion_date', 255);
            $table->double('price', 8, 2);
            $table->string('note', 2000)->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
