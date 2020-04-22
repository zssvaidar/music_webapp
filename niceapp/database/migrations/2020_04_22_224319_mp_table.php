<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_files', function (Blueprint $table) {
            $table->id();
            $table->string('duration');
            $table->string('filename');
            $table->timestamps();
        });
        Schema::create('mp_tags', function (Blueprint $table) {
            $table->id();
            $table->integer('mp_id');
            $table->string('mp_tag');
        });

        Schema::create('mp_genre', function (Blueprint $table) {
            $table->id();
            $table->integer('mp_id');
            $table->string('genre');
        });

        Schema::create('mp_bag', function (Blueprint $table) {
            $table->id();
            $table->integer('mp_id');
            $table->string('price');
            $table->timestamps();
        });

        Schema::create('offer_bag', function (Blueprint $table) {
            $table->id();
            $table->integer('group');
            $table->timestamps();
        });

        Schema::create('offer_desciption', function (Blueprint $table) {
            $table->id();
            $table->string('offer_bag_id');
            $table->string('description');
        });

        Schema::create('offer_item', function (Blueprint $table) {
            $table->id();
            $table->string('offer_bag_id');
            $table->integer('mp_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('music_files');
        Schema::drop('mp_tags');
        Schema::drop('mp_genre');
        Schema::drop('mp_bag');
        Schema::drop('offer_bag');
        Schema::drop('offer_desciption');
        Schema::drop('offer_item');
    }
}
