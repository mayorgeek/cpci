<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('uploaded_by');
            $table->string('event_pic')->nullable();

            $table->string('title');
            $table->string('slug');
            $table->string('content');
            $table->string('venue')->nullable();
            
            $table->string('event_link')->nullable();
            
            $table->dateTime('scheduled_time');
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
        Schema::dropIfExists('events');
    }
};
