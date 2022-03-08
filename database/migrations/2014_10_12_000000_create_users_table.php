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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_email')->unique();
            $table->string('user_username')->unique();
            $table->string('user_password');
            $table->string('user_telp')->unique();
            // $table->integer('user_role_id');
            $table->foreignId('user_role_id')->nullable()->index('fk_users_to_roles');
            $table->string('user_photo');
            $table->boolean('user_is_active')->default(false);
            $table->text('user_alamat');
            $table->timestamp('user_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
