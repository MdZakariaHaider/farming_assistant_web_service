<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->integer('farmer_id');
            $table->integer('land');
            $table->string('product',20);
            $table->text('investment');
            $table->string('c_rate');
            $table->integer('c_quantity')->default(0);
            $table->integer('r_crop')->default(0);
            $table->integer('dew')->default(0);
            $table->date('d_date');
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
        Schema::dropIfExists('investments');
    }
}
