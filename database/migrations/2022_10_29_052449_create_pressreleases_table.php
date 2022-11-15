<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePressreleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pressreleases', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('category') -> default('Uncategorized');
            $table->string('tag') ->default('eps');
            $table->longText('description');
            $table->string('featured_image');
            $table->string('alt_text');
            $table->string('meta_description') ->nullable();
            $table->string('canonical_url') ->nullable();
            $table->string('schema') ->nullable();
            $table->string('foucs_keyword');
            $table->string('alt_keywords');
            $table->string('published_by');
            $table->integer('approved') -> dafault('1');
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
        Schema::dropIfExists('pressreleases');
    }
}
