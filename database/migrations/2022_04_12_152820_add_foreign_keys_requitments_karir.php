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
        Schema::table('reqruitments', function (Blueprint $table) {
            $table->foreign('karir_id', 'fk_karirs_to_reqruitments')->references('id')->on('karirs')
                ->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reqruitments', function (Blueprint $table) {
            $table->dropForeign('fk_karirs_to_reqruitments');
        });
    }
};
