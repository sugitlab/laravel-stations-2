<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->integer('published_year')->comment('公開年');
            $table->text('description')->comment('概要');
            $table->tinyInteger('is_showing')->default(false)->comment('上映中かどうか');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('published_year');
            $table->dropColumn('description');
            $table->dropColumn('is_showing');
        });
    }
}
