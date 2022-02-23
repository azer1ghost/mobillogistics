<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->string('image2')->nullable();
            $table->string('banner')->nullable();
            $table->string('btn_text')->nullable();
            $table->string('btn_url')->nullable();
            $table->string('dynamic_image')->nullable();
            $table->string('heading')->nullable();
            $table->string('title')->nullable();
            $table->string('icon_awesome')->nullable();
            $table->text('detail')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('slug')->unique();
            $table->boolean('status')->default(true);
            $table->boolean('in_menu')->default(true);
            $table->boolean('featured')->default(true);
            $table->boolean('advanced')->default(false);
            $table->integer('ordering')->nullable();
            $table->foreignId('service_id')->nullable()->constrained()->nullOnDelete();
            $table->softDeletes();
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
        Schema::dropIfExists('services');
        Storage::deleteDirectory('services');
    }
}
