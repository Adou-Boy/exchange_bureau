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
            $table->enum('type', ['SENDING', 'RECEIVING']);
            $table->string('service');
            $table->string('sender_name');
            $table->string('sender_telephone');
            $table->string('destination');
            $table->string('receiver_name');
            $table->string('receiver_telephone');
            $table->string('currency');
            $table->decimal('exchange_rate');
            $table->decimal('amount', 9, 2);
            $table->decimal('total_amount', 9, 2);
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
