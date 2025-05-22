@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Order Details</h1>
    <p><strong>Order ID:</strong> {{ $order->id }}</p>
    <p><strong>Customer Name:</strong> {{ $order->customer_name }}</p>
    <p><strong>Product:</strong> {{ $order->product->name }}</p>
    <p><strong>Status:</strong> {{ $order->status }}</p>
    <p><strong>Total Price:</strong> {{ $order->total_price }}</p>
    <p><strong>Comment:</strong> {{ $order->comment }}</p>
    <p><strong>Quantity:</strong> {{ $order->quantity }}</p>

    @if ($order->status !== 'completed')
        <form action="{{ route('orders.complete', $order->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-success">Mark as Completed</button>
        </form>
    @endif

    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection