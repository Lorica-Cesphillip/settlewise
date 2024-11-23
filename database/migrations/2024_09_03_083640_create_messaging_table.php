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
        Schema::create('document_conversation', function (Blueprint $table) {
            $table->bigIncrements('conversation_id');
            $table->unsignedInteger('document_tracking_code');
            $table->unsignedInteger('employee_id_one'); //Sender Id
            $table->unsignedInteger('employee_id_two'); //Receiver Id
            $table->timestamps();

            $table->foreign('document_tracking_code')->references('document_tracking_code')->on('document_tracker');
            $table->foreign('employee_id_one')->references('employee_number')->on('users');
            $table->foreign('employee_id_two')->references('employee_number')->on('users');
        });

        Schema::create('conversation_message', function (Blueprint $table){
            $table->bigIncrements('message_id');
            $table->unsignedInteger('employee_id');
            $table->unsignedBigInteger('conversation_id');
            $table->text('reply');

            $table->foreign('employee_id')->references('employee_number')->on('users');
            $table->foreign('conversation_id')->references('conversation_id')->on('document_conversation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_conversation');
        Schema::dropIfExists('conversation_message');
    }
};
