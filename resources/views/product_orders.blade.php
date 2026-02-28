<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Product's Orders</title>
</head>
<body>
<div>
    <table class="table table-striped table-bordered">
             <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
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
                     <tr>
                               <th >  total</th>
                               <th colspan=3 >{{ $orders->sum('total_price') }}</th,>   
                    </tr>

            </tbody>
    </table>
</div>
</body>
</html>
