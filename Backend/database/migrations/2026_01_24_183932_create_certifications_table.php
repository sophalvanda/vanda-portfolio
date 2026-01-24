<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('issuer', 150);
            $table->year('issue_year')->nullable();
            $table->string('certificate_url', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('certifications');
    }
};
