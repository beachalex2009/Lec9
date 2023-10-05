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
        Schema::table('tasks', function (Blueprint $table) {
            $table->text('note');
            $table->renameColumn('task_name','name');
            // composer require doctrine/dbal
            $table->bigInteger('task_no')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('note') ;
            $table->renameColumn('name','task_name');
            $table->Integer('task_no')->change();
        });
    }
};
