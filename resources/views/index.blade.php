<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Products</h1>

    @if($products->count() > 0)
        {{-- Table only appears if products exist --}}
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                    <th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td><a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm">View Orders</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination Links --}}
        <div class="d-flex justify-content-center mt-4">
            {{ $products->links() }}
        </div>
    @else
        {{-- Show this if the collection is empty --}}
        <div class="alert alert-info">
            <p class="mb-0"><strong>Notice:</strong> No products found in the database.</p>
        </div>
    @endif
</div>
<div>
    <a href={{route('orders.index')}}>Orders</href=>
</div>

</body>
</html>
