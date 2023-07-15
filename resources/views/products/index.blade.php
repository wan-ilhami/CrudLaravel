<!DOCTYPE html>
<html>

<body>

    <h1>Go to Product</h1>
    <a href="/product/create"><button>Create product</button></a>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product )
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    
                    
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
