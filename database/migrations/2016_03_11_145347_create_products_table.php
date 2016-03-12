<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->nullable();
            $table->string('name'); // Normal Name
            $table->float('price', 9, 2); // 2 decimal point
            $table->boolean('available')->default(true);
            $table->string('slug')
                  ->unique(); // Url /productlink
            $table->string('caption'); // Production Caption
            $table->text('description'); // Product Description
            $table->binary('featured_image'); // Single Upload
            // $table->json('images'); // Admin MultipleUpload
            // $table->json('attributes'); // Admin add Color/Size
            // $table->json('dimensions'); // Admin Add LxWxH Wt. Ml
            $table->float('rating_cache', 2, 1)->default(0); // User
            $table->integer('rating_count')->default(0); // User
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
        Schema::drop('products');
    }
}
