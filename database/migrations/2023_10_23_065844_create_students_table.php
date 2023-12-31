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
        Schema::create('students', function (Blueprint $table){
            $table->id();
            $table->char('npm', 10)->unique();
            $table->string('name');
            $table->string('kelas', 2);
            $table->year('tahun_masuk');
            $table->char('nidn', 10);
            $table->timestamps();

            $table->foreign('nidn')
                ->references('nidn')
                ->on('lecturers');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
