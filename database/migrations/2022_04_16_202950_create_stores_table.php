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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('senderId');
            $table->integer('ownerId');
            $table->integer('activityId');
            $table->string('logo')->nullable();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('contact')->nullable();
            $table->text('address')->nullable();
            $table->integer('tva');
            $table->text('invoice_message')->nullable();
            $table->tinyInteger('allow_camp')->default(1)->comment('0:NO;1:Yes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
};
