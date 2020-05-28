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
            $table->string('nama_produk', 100);
            $table->longText('diskripsi')->nullable()->default('text');
            $table->string('merk', 100)->nullable();
            $table->string('nomor_produk', 100);
            $table->string('tipe_produk', 100);
            $table->string('max_power', 100);
            $table->string('certificate', 100);
            $table->string('payment', 100);
            $table->string('warrant', 100);
            $table->string('tag', 100);
            $table->string('category', 100);
            $table->string('status', 100);
            $table->string('create_by', 100);
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
