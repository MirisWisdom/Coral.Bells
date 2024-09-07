<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('description');
        });

        DB::table('guides')->insert(
            [
                [
                    'description' => file_get_contents(__DIR__ . '/../../resources/html/01.html'),
                ],
                [
                    'description' => file_get_contents(__DIR__ . '/../../resources/html/02.html'),
                ],
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guides');
    }
};
