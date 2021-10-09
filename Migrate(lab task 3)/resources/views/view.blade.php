
<center><h1><u>Product Details</u></h1></center>
<center><table border="1" style="border-collapse:collapse;">
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Code</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Stoke_date</th>
            <th>Rating</th>
            <th>Purchesed</th>
            <th></th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->p_names}}</td>
                <td>{{$product->id}}</td>
                <td>{{$product->p_code}}</td>
                <td>{{$product->p_dese}}</td>
                <td>{{$product->p_quantity}}</td>
                <td>{{$product->p_stoke_date}}</td>
                <td>{{$product->p_rating}}</td>
                <td>{{$product->p_purchesed}}</td>
                <td><a href="/edit/{{$product->id}}">Edit</a></td>
            </tr>
        @endforeach
    </table></center>