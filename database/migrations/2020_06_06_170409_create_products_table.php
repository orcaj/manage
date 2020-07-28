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
            $table->integer('sn');
            $table->integer('customer_id');
            $table->integer('subsidiary_id');
            $table->string('equipament');
            $table->string('brand');
            $table->string('serial_number');
            $table->text('defect');
            $table->text('description');
            $table->text('observations');
            $table->boolean('optional');
            $table->string('numeric_digits')->nullable();
            $table->string('store')->nullable();
            $table->string('status');
            $table->string('access');
            $table->string('model');
            $table->string('purchase_date')->nullable();
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
