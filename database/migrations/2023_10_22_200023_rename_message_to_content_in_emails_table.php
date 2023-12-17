<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('emails', function (Blueprint $table) {
            DB::statement('ALTER TABLE emails CHANGE message content TEXT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('emails', function (Blueprint $table) {
            DB::statement('ALTER TABLE emails CHANGE content message TEXT');
        });
    }
};
