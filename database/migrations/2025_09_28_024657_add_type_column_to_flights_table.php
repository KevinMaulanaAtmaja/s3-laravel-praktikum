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
        // Schema::hasColumn('flights', 'type')
        // Schema::hasTable('flights')
        // Schema::rename('flights')
        // Schema::dropIfExists()
        Schema::table('flights', function (Blueprint $table) {
            // $table->string("type");
            // $table->renameColumn('name', 'full_name');
            $table->string('name', 50)->change();
            $table->char('name2', 100);
            $table->decimal('amount', $precision = 8, $scale = 2);
            $table->double('amount2', 8, 2);
            $table->enum('difficulty', ['easy', 'medium', 'hard']);
            $table->integer('id')->autoIncrement()->change();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('flight_id');
            $table->foreign('flight_id')->references('id')->on('bibliografi_kategori');
            // $table->dropForeign('flight_id');
            // Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('flights', function (Blueprint $table) {
            $table->dropColumn("type");
        });
    }
};
