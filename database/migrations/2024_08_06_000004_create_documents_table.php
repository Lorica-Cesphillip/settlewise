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
        Schema::create('document_type', function (Blueprint $table){
            $table->increments('id');
            $table->string('document_type');
        });

        /**Fact Table. */
        Schema::create('document_tracker', function (Blueprint $table) {
            $table->increments('document_tracking_code');
            $table->unsignedInteger('document_type_id');
            $table->unsignedInteger('from_employee_id');
            $table->unsignedInteger('to_employee_id');
            $table->unsignedInteger('request_id')->nullable();
            $table->unsignedSmallInteger('referral_id')->nullable();
            $table->boolean('urgent')->nullable();
            $table->date('date_sent');
            $table->date('date_received');
            $table->tinyText('subject');
            $table->tinyText('remarks')->nullable();
            $table->boolean('confidential');
            $table->boolean('is_archived');
            $table->timestamps();

            //Foreign Keys
            $table->foreign('document_type_id')->references('id')->on('document_type');
            $table->foreign('from_employee_id')->references('employee_id')->on('aphso_employees');
            $table->foreign('to_employee_id')->references('employee_id')->on('aphso_employees');
            $table->foreign('request_id')->references('request_id')->on('request_logs');
            $table->foreign('referral_id')->references('referral_id')->on('referral_logs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_type');
        Schema::dropIfExists('document_tracker');
    }
};
