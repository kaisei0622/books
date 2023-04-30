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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'name')->comment(comment:'本の名前');
            $table->tinyInteger(column: 'status')->comment(comment:'本のステータス');
            $table->string(column: 'author')->nullable()->comment(comment:'著者');
            $table->string(column: 'publication')->nullable()->comment(comment:'出版');
            $table->date(column: 'read_at')->nullable()->comment(comment:'読み終わった日');
            $table->text(column: 'note')->nullable()->comment(comment:'メモ（備考）');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
