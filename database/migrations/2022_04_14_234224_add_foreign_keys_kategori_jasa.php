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
        Schema::table('jasas', function (Blueprint $table) {
            $table->foreign('jasa_kategori_id', 'fk_kategori_to_jasa')->references('id')->on('kategori_jasas')
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
        Schema::table('jasas', function (Blueprint $table) {
            $table->dropForeign('fk_kategori_to_jasa');
        });
    }
};
