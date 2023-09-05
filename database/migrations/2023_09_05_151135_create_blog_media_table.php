<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('blog_media', function (Blueprint $table) {
            $table->foreignId('blog_id');
            $table->foreignId('media_id');
            $table->primary(['blog_id', 'media_id']);
            $table->smallInteger('order');
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog_media');
    }
};
