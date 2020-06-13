<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('customer_id');
            $table->integer('subsidiary_id');
            $table->string('photo');
            $table->string('equipament');
            $table->string('brand');
            $table->string('serial_number');
            $table->text('defect');
            $table->text('description');
            $table->text('observations');
            $table->string('numeric_digits');
            $table->string('store');
            $table->string('purchase_date');
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
        Schema::dropIfExists('products');
    }
}
