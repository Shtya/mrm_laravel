<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('_url')->nullable() ;
            $table->string("title")->nullable() ;
            $table->text("description")->nullable() ;
            $table->string("category")->nullable() ;
            $table->string("thumbnail")->nullable() ;
            $table->string("meta_title")->nullable() ;
            $table->string("meta_desc")->nullable() ;
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
        Schema::dropIfExists('blogs');
    }
};
