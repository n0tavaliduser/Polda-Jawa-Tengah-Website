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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('herotext');
            $table->string('moto');
            $table->string('heroimage');
            $table->string('leftcardimage');
            $table->string('leftcardtitle');
            $table->text('leftcardtext');
            $table->string('centercardimage');
            $table->string('centercardtitle');
            $table->text('centercardtext');
            $table->string('rightcardimage');
            $table->string('rightcardtitle');
            $table->text('rightcardtext');
            $table->string('mail');
            $table->string('address');
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
        Schema::dropIfExists('homes');
    }
};
