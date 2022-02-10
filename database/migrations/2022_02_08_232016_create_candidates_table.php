<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->boolean('active');
            $table->unsignedBigInteger('request_id')->nullable();
            $table->foreign('request_id')->references('id')
                    ->on('requests')->onDelete('cascade');

            $table->unsignedBigInteger('election_id')->nullable();
            $table->foreign('election_id')->references('id')
                    ->on('elections')->onDelete('cascade');
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
        Schema::dropIfExists('candidates');
    }
}
