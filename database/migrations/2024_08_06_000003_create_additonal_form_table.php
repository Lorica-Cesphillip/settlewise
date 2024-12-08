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
        Schema::create('request_logs', function (Blueprint $table) {
            $table->increments('request_id');
            $table->string('request_type', 50);
            $table->string('others', 140)->nullable();;
            $table->string('requested_document', 150)->nullable();
            $table->string('request_purpose', 150)->nullable();
            $table->string('request_details', 150)->nullable();
            $table->string('comments_if_granted', 150)->nullable();
            $table->string('rejection_reason', 150)->nullable();
            $table->timestamps();
        });

        Schema::create('referral_logs', function(Blueprint $table){
            $table->smallIncrements('referral_id');
            $table->unsignedInteger('employee_number');
            $table->string('for');
            $table->boolean('for_urgent');
            $table->string('please');
            $table->boolean('please_urgent');
            $table->string('remarks')->nullable();
            $table->timestamps();
        });

        Schema::create('document_status', function(Blueprint $table){
            $table->smallIncrements('status_id');
            $table->string('document_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_logs');
        Schema::dropIfExists('referral_logs');
    }
};
