<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('feed_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('url');
            $table->string('category')->nullable();
            $table->string('country')->nullable();
            $table->json('skills')->nullable();
            $table->json('budget')->nullable();
            $table->longtext('description')->nullable();
            $table->longtext('content');
            $table->string('status');
            $table->timestamp('local_datetime');
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
        Schema::dropIfExists('listings');
    }
}
