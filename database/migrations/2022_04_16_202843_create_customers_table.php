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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('store_id')->default(1);
            $table->integer('user_id')->default(2);
            $table->string('phone')->nullable();
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('sexe')->comment='0:H,1:F';
            $table->date('birth');
            $table->integer('points')->default(0);
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
        Schema::dropIfExists('customers');
    }
};
