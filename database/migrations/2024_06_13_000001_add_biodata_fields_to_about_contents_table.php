<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBiodataFieldsToAboutContentsTable extends Migration
{
    public function up()
    {
        Schema::table('about_contents', function (Blueprint $table) {
            $table->string('education')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('nationality')->nullable();
            $table->string('status')->nullable();
        });
    }

    public function down()
    {
        Schema::table('about_contents', function (Blueprint $table) {
            $table->dropColumn([
                'education',
                'phone',
                'email',
                'gender',
                'religion',
                'nationality',
                'status'
            ]);
        });
    }
}
