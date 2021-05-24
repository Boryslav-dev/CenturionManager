<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactToCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_to_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contactId');
            $table->unsignedBigInteger('categoryId');
            $table->foreign('contactId')
                ->references('id')
                ->on('contacts')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('categoryId')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_to_categories');
    }
}
