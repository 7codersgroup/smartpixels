<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId ('user_id');
            $table->string ('reference')->nullable ();
            $table->string ('req_amount')->nullable ();
            $table->string ('amount_paid')->nullable ();
            $table->string ('status')->nullable ();
            $table->string ('channel')->nullable ();
            $table->timestamp ('createdAt')->nullable ();
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
        Schema::dropIfExists('payments');
    }
}
