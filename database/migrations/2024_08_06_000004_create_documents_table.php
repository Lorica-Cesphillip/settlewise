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
            $table->string('others')->nullable();
            $table->unsignedInteger('from_employee_id');
            $table->unsignedInteger('to_employee_id');
            $table->unsignedInteger('request_id')->nullable();
            $table->unsignedSmallInteger('referral_id')->nullable();
            $table->string('document_name');
            $table->boolean('urgent');
            $table->boolean('confidential');
            $table->string('subject');
            $table->string('remarks')->nullable();
            $table->timestamps();
            $table->unsignedSmallInteger('status_id'); //Pending, Request Rejected, Request Approved, To be Referred to Employee in a Department, Referral Granted, Referral Rejected, Document Forwarded.
            $table->string('file_path'); //important since the user will always view the document attached.
            $table->boolean('is_archived');
            $table->boolean('is_forwarded');

            //Foreign Keys
            $table->foreign('document_type_id')->references('id')->on('document_type');
            $table->foreign('from_employee_id')->references('employee_number')->on('users');
            $table->foreign('to_employee_id')->references('employee_number')->on('users');
            $table->foreign('request_id')->references('request_id')->on('request_logs');
            $table->foreign('referral_id')->references('referral_id')->on('referral_logs');
            $table->foreign('status_id')->references('status_id')->on('document_status');
        });

        Schema::create('announcement_logs', function (Blueprint $table){
            $table->increments('announcement_id');
            $table->unsignedInteger('document_tracking_code');
            $table->string('what', 141);
            $table->dateTime('when');
            $table->string('where', 141);
            $table->string('who', 50);
            $table->string('notes', 141);
            $table->date('date_posted');
            $table->date('date_expired');
            $table->boolean('is_posted');

            $table->foreign('document_tracking_code')->references('document_tracking_code')->on('document_tracker');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_type');
        Schema::dropIfExists('document_tracker');
        Schema::dropIfExists('announcement_logs');
    }
};
