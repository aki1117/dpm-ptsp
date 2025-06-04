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
        Schema::table('lapors', function (Blueprint $table) {
            $table->enum('status', ['received', 'progress', 'done'])->default('received');
        });
    }

    public function down()
    {
        Schema::table('lapors', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
