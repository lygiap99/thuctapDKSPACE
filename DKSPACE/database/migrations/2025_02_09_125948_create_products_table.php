<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Tự động tạo cột 'id' là khóa chính
            $table->string('name', 255); // Tên sản phẩm
            $table->float('price'); // Giá sản phẩm
            $table->text('description')->nullable(); // Mô tả sản phẩm (cho phép null)
            $table->string('image_url', 255)->nullable(); // Đường dẫn ảnh sản phẩm
            $table->integer('stock_quantity'); // Số lượng tồn kho
            $table->timestamps(); // Tạo cột created_at và updated_at tự động
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
