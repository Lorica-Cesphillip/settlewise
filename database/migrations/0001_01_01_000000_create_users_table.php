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
        Schema::create('aphso_division', function(Blueprint $table){
            $table->smallIncrements('division_id');
            $table->string('division_name');
            $table->string('abbreviation', 5);
            $table->boolean('has_head');
            $table->integer('no_of_employees');
        });

        /*Employee Number Format Example: ADMIN-0001 */
        /*Need natin kumuha ng employment form na ginagamit ni APHSO sa pag-kuha ng employees nila. */
        Schema::create('aphso_employees', function (Blueprint $table) {
            $table->increments('employee_number');
            $table->unsignedSmallInteger('division_id');
            $table->string('lname', 50);
            $table->string('fname', 50);
            $table->string('mname', 50)->nullable();
            $table->string('position', 50);
            $table->mediumText('address');
            $table->date('birthdate');
            $table->string('martial_status', 20);
            $table->string('contact_nos', 12);
            $table->string('email')->unique();
            $table->string('image_path');
            $table->timestamp('email_verified_at')->nullable();

            $table->foreign('division_id')->references('division_id')->on('aphso_division');
        });

        Schema::create('users', function (Blueprint $table){
            $table->id();
            $table->unsignedInteger('employee_number');
            $table->string('password');
            $table->rememberToken();

            $table->foreign('employee_number')->references('employee_number')->on('aphso_employees');
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aphso_divisions');
        Schema::dropIfExists('aphso_job_titles');
        Schema::dropIfExists('aphso_employees');
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
