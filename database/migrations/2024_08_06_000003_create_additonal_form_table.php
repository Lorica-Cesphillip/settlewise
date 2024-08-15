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
            $table->string('details', 150);
            $table->string('requested_document');
            $table->string('purpose');
            $table->boolean('granted');
            $table->string('comments');
        });

        Schema::create('referral_logs', function(Blueprint $table){
            $table->smallIncrements('referral_id');
            $table->unsignedSmallInteger('aphso_division_id');
            $table->string('for');
            $table->boolean('for_urgent');
            $table->string('please');
            $table->boolean('please_urgent');
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
