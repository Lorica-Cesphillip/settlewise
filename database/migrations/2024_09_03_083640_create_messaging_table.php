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

        Schema::create('conversation_message', function (Blueprint $table){
            $table->bigIncrements('message_id');
            $table->unsignedInteger('employee_id');
            $table->unsignedInteger('document_tracking_code');
            $table->text('reply');
            $table->timestamps();

            $table->foreign('employee_id')->references('employee_number')->on('users');
            $table->foreign('document_tracking_code')->references('document_tracking_code')->on('document_tracker');
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
