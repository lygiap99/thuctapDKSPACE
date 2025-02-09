@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Chỉnh sửa sản phẩm</h1>

        <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">Giá sản phẩm</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $product->price) }}" required>
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea name="description" id="description" class="form-control">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="stock_quantity">Số lượng tồn kho</label>
                <input type="number" name="stock_quantity" id="stock_quantity" class="form-control" value="{{ old('stock_quantity', $product->stock_quantity) }}" required>
                @error('stock_quantity')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Ảnh hiện tại</label><br>
                @if ($product->image_url)
                    <img src="{{ asset('storage/' . $product->image_url) }}" class="img-thumbnail mb-2" style="width: 150px; height: 150px; object-fit: cover;">
                @else
                    <p>Không có ảnh</p>
                @endif
            </div>

            <div class="form-group">
                <label for="image">Chọn ảnh mới</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Cập nhật sản phẩm</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Hủy</a>
        </form>
    </div>
@endsection