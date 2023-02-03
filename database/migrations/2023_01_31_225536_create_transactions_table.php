<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id')->nullable();
            $table->integer('user_id');
            $table->enum('plan', ['standard','pro','deluxe','gold','business','carhouse']);
            $table->float('amount');
            $table->integer('transaction_type_id');
            $table->enum('status', ['pending','success','failed','paid'])->default('pending');
            $table->boolean('is_credit');
            $table->string('referral_link')->nullable();
            $table->string('details')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
