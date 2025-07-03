<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBiodataToAboutContentsTable extends Migration
{
    public function up()
    {
        Schema::table('about_contents', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->date('birth')->nullable();
            $table->string('address')->nullable();
        });
    }

    public function down()
    {
        Schema::table('about_contents', function (Blueprint $table) {
            $table->dropColumn(['name', 'birth', 'address']);
        });
    }
}
