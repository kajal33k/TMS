<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->string('progress')->default('Not Started')->after('employee_id');
            $table->timestamp('assigned_at')->nullable()->after('progress');
            $table->timestamp('completed_at')->nullable()->after('assigned_at');
        });
    }

    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn(['progress', 'assigned_at', 'completed_at']);
        });
    }
};
