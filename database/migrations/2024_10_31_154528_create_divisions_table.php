<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('divisions', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('abbreviation');
        $table->string('head');
        $table->timestamps();
    });
    Schema::table('aphso_division', function (Blueprint $table) {
        $table->string('division_name')->nullable()->change();
        // or set a default value
        // $table->string('division_name')->default('Default Name')->change();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('divisions');
    }
};
