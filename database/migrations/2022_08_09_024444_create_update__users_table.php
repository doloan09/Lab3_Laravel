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
        Schema::table('users', function (Blueprint $table) {
            $table->timestamp('google_id')->nullable();
            $table->timestamp('google_token')->nullable();
            $table->timestamp('google_refresh_token')->nullable();
            $table->timestamp('facebook_id')->nullable();
            $table->timestamp('facebook_token')->nullable();
            $table->timestamp('facebook_refresh_token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
