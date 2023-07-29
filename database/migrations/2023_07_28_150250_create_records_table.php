<?php

use App\Models\Education;
use App\Models\Guardian;
use App\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Education::class, 'education_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Role::class, 'role_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Guardian::class, 'guardian_id')->constrained()->cascadeOnDelete();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->enum('suffix', ['Jr', 'Sr', 'I', 'II', 'III', 'IV', 'V'])->nullable();
            $table->date('birth_date');
            $table->string('course')->nullable();
            $table->string('college')->nullable();
            $table->year('school_year')->nullable();
            $table->string('level')->nullable();
            $table->string('section')->nullable();
            $table->string('school_id')->nullable();
            $table->string('signature')->nullable();
            $table->string('picture')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
};