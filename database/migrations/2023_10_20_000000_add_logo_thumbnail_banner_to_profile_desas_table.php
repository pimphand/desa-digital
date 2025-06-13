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
        Schema::table('profile_desas', function (Blueprint $table) {
            $table->string('logo')->nullable()->after('website');
            $table->string('thumbnail')->nullable()->after('logo');
            $table->json('banner_data')->nullable()->after('thumbnail')->comment('Data banner dalam format JSON');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profile_desas', function (Blueprint $table) {
            $table->dropColumn(['logo', 'thumbnail', 'banner_data']);
        });
    }
};
