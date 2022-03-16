<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('message');
            $table->dateTime('message_at');
            $table->string('pair', 8);
            $table->foreignId('pair_id')
                ->constrained('pairs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->double('price', 12, 6);
            $table->double('tp', 12, 6);
            $table->double('sl', 12, 6);
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->enum('position', ['sale', 'buy']);
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
        Schema::dropIfExists('notifications');
    }
}
