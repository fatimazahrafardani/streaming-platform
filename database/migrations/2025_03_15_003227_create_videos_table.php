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
    Schema::create('videos', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->string('url');
        $table->string('thumbnail');
        $table->unsignedBigInteger('views_count')->default(0);
        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')->references('id')->on('persones')->onDelete('cascade');
        $table->timestamps();
    });
} 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
