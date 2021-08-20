<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEssayPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('essay_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uid');
            $table->string('status')->nullable(false);
            $table->string('reason')->nullable(true);
            $table->string('method')->nullable(false);
            $table->string('img')->nullable(false);
            $table->timestamps();

            $table->foreign('uid')->references('id')->on('essays');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('essay_payments');
    }
}
