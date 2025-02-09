@extends('layouts.app')

@section('title', 'Chi tiết sản phẩm')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Chi tiết sản phẩm</h1>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $product->id }}</td>
        </tr>
        <tr>
            <th>Tên sản phẩm</th>
            <td>{{ $product->name }}</td>
        </tr>
        <tr>
            <th>Giá</th>
            <td>{{ number_format($product->price, 2) }} VNĐ</td>
        </tr>
        <tr>
            <th>Mô tả</th>
            <td>{{ $product->description }}</td>
        </tr>
        <tr>
            <th>Số lượng tồn kho</th>
            <td>{{ $product->stock_quantity }}</td>
        </tr>
        <tr>
            <th>Ảnh sản phẩm</th>
            <td>
                @if ($product->image_url)
                    <img src="{{ asset('storage/' . $product->image_url) }}" class="img-thumbnail" style="width: 200px; height: 200px; object-fit: cover;">
                @else
                    <p>Không có ảnh</p>
                @endif
            </td>
        </tr>
    </table>
@endsection