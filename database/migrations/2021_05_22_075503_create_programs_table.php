<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->constrained('users');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('description');
            $table->text('contents');
            $table->string('img_path');
            $table->boolean('is_featured')->default(0)->comment('Nổi bật');
            $table->boolean('is_published')->default(1)->comment('Hiển thị');
            $table->unsignedBigInteger('views')->default(0)->comment('Lượt xem');
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
        Schema::dropIfExists('programs');
    }
}