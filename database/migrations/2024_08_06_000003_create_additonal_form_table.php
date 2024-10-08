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
            $table->string('requested_document', 150)->nullable();
            $table->string('details_purpose', 150);
            $table->boolean('granted')->nullable();
            $table->string('comments_if_granted', 150)->nullable();
        });

        Schema::create('referral_logs', function(Blueprint $table){
            $table->smallIncrements('referral_id');
            $table->unsignedInteger('employee_number');
            $table->string('for');
            $table->boolean('for_urgent');
            $table->string('please');
            $table->boolean('please_urgent');
            $table->string('remarks')->nullable();
            $table->mediumText('employee_response');
            $table->boolean('approved_by_head');
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
