<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddViewsColumnToBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('blog', function (Blueprint $table) {
        $table->integer('views')->default(0); // Add default 0 for the views
    });
}

public function down()
{
    Schema::table('blog', function (Blueprint $table) {
        $table->dropColumn('views');
    });
}

}
