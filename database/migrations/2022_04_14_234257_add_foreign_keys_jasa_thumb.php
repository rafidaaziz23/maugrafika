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
        Schema::table('jasa_thumbs', function (Blueprint $table) {
            $table->foreign('jasa_id', 'fk_jasa_to_thumb')->references('id')->on('jasas')
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
        Schema::table('jasa_thumbs', function (Blueprint $table) {
            $table->dropForeign('fk_jasa_to_thumb');
        });
    }
};
