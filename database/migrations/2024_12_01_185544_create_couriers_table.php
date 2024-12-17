<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('couriers', function (Blueprint $table) {
            $table->id();
            $table->date('bdate');
            $table->string('sname');
            $table->string('rname');
            $table->string('senderaddress');
            $table->string('receiveraddress');
            $table->bigInteger('charges');
            $table->bigInteger('qty');
            $table->bigInteger('sendercontact');
            $table->string('receivedby');
            $table->date('receiveddate');
            $table->bigInteger('receivercontact');
            $table->bigInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('couriers');
    }
};
