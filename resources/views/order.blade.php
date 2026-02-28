<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Orders</h1>

    @if($orders->count() > 0)
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product id </th>
                    <th>Quantity</th>
                    <th>Total Price </th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order ->id }}</td>
                        <td>{{ $order ->product_id }}</td>
                        <td>{{ $order ->quantity}}</td>
                        <td>${{ number_format($order  ->total_price, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination Links --}}
        <div class="d-flex justify-content-center mt-4">
            {{ $orders->links() }}
        </div>
    @else
        {{-- Show this if the collection is empty --}}
        <div class="alert alert-info">
            <p class="mb-0"><strong>Notice:</strong> No order s found in the database.</p>
        </div>
    @endif
</body>
</html>