@include('inc.header')
    @if(session('info'))
    <div class="alert alert-success">
        {{ session('info')}}
    </div>
    @endif
    <table class="table table-hover">
        <thead style="background-color:#804000; color: #ffffff">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Type</th>
            <th scope="col">PriceL</th>
            <th scope="col">PriceM</th>
            <th scope="col">PriceS</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @if(count($products)>0)
            @foreach($products->all() as $products) 
                @if($products->type == "frappe")
                    <tr class="table-active">
                    <td>{{ $products->id }}</td>
                    <th scope="row"><img src="{{asset('uploads/products/'.$products->image)}}" id="p1" class="img-fluid" style="width:100px;height:60px"  ></th>
                    <td>{{ $products->title }}</td>
                    <td>{{ $products->type }}</td>
                    <td>${{ $products->pricel }}</td>
                    <td>${{ $products->priceM }}</td>
                    <td>${{ $products->priceS }}</td>
                    <td>{{ $products->description }}</td>
                    <td>
                        <a href='{{ ("/update/{$products->id}") }}' class="btn btn-success"> Update </a>|
                        <a href='{{ ("/delete/{$products->id}") }}' class="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                @endif       
            
            @endforeach
        @endif
        </tbody>
    </table>
    @include('inc.footer')