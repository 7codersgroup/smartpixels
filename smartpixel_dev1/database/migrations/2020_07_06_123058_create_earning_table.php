<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEarningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('earning', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('current_balance', 100)->nullable ();
            $table->string('last_withdrawal_amount', 100)->nullable ();
            $table->string('total_withdrawal', 100)->nullable ();
            $table->string('total_income', 100)->nullable ();
            $table->timestamp('last_withdrawal_date')->nullable ();
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
        Schema::dropIfExists('earning');
    }
}
