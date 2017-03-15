<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsCategoriesRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // Create the column
            $table->integer('categories_id')->unsigned();

            // Create the relationship
            $table->foreign('categories_id')->
                    references('id')->
                    on('categories')->
                    onDelete('restrict')->
                    onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_categories_id_foreign');

            $table->dropColumn('categories_id');
        });
    }
}
