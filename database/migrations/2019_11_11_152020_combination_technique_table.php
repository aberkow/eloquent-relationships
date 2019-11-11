<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CombinationTechniqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combination_technique', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('combination_id');
            $table->unsignedBigInteger('technique_id');
            $table->timestamps();

            $table->foreign('combination_id')
                ->references('id')
                ->on('combinations')
                ->onUpdate('cascade')
                ->onDelete('cascade');
                
            $table->foreign('technique_id')
                ->references('id')
                ->on('techniques')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combination_technique');
    }
}
