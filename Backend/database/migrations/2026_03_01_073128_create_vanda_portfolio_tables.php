<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        // 1. Projects: Enterprise Solutions & Architecture
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title_en'); // e.g., "Enterprise Backup Monitoring" [cite: 43]
            $table->string('title_km')->nullable(); 
            $table->enum('category', ['Backup', 'HA', 'Monitoring', 'Automation', 'Migration'])->index();
            $table->string('db_type')->default('Oracle')->index(); // [cite: 13, 18]
            $table->text('description_en'); // 
            $table->text('description_km')->nullable();
            $table->json('technologies')->nullable(); // ["RMAN", "Python", "SQL"] [cite: 43, 48]
            $table->string('image_url')->nullable(); 
            $table->string('github_url')->nullable(); // [cite: 75]
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });

        // 2. Skills: Technical Proficiencies
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., "Oracle Database", "Performance Tuning" [cite: 18, 23]
            $table->enum('category', ['Databases', 'Security', 'Linux', 'Automation'])->index();
            $table->enum('level', ['Beginner', 'Intermediate', 'Advanced', 'Expert']);
            $table->integer('percentage')->default(0); 
            $table->string('icon')->nullable(); 
            $table->timestamps();
        });

        // 3. Experience: Career History
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('company'); // e.g., "Enterprise Data Solutions" 
            $table->string('role'); // [cite: 31]
            $table->date('start_date');
            $table->date('end_date')->nullable(); // Null = Present
            $table->text('description_en'); // [cite: 33, 34]
            $table->text('description_km')->nullable();
            $table->json('tools_used')->nullable(); // [cite: 47]
            $table->timestamps();
        });

        // 4. Certifications: Professional Validations
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., "Oracle Certified Professional (OCP)" [cite: 55]
            $table->string('issuer'); // [cite: 56, 59]
            $table->year('issue_year');
            $table->string('verify_url')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });

        // 5. Messages: Lead Generation
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // [cite: 77]
            $table->string('email'); // [cite: 79]
            $table->text('content'); // [cite: 81]
            $table->boolean('is_read')->default(false)->index();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('messages');
        Schema::dropIfExists('certificates');
        Schema::dropIfExists('experiences');
        Schema::dropIfExists('skills');
        Schema::dropIfExists('projects');
    }
};