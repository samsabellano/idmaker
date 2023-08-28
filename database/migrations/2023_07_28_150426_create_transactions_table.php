<?php

use App\Models\Record;
use App\Models\School;
use App\Models\Status;
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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(School::class, 'school_id')->constrained('schools')->cascadeOnDelete();
            $table->foreignIdFor(Record::class, 'record_id')->constrained('records')->cascadeOnDelete();
            $table->foreignIdFor(Status::class, 'status_id')->constrained('statuses')->cascadeOnDelete();
            $table->uuid();
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
        Schema::dropIfExists('transactions');
    }
};