@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Order</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="customer_name">Customer Name</label>
            <input type="text" name="customer_name" id="customer_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="product_id">Product</label>
            <select name="product_id" id="product_id" class="form-control" required>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="1" min="1" required onchange="updateTotalPrice()">
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea name="comment" id="comment" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="total_price">Total Price</label>
            <input type="text" id="total_price" class="form-control" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

<script>
    const products = @json($products->pluck('price', 'id'));

    function updateTotalPrice() {
        const productId = document.getElementById('product_id').value;
        const quantity = document.getElementById('quantity').value;
        const price = products[productId] || 0;
        document.getElementById('total_price').value = (price * quantity).toFixed(2);
    }

    document.getElementById('product_id').addEventListener('change', updateTotalPrice);
    document.addEventListener('DOMContentLoaded', updateTotalPrice);
</script>
@endsection