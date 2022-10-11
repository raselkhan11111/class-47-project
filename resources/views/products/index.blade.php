<x-master>
    <div class="col-md-8 px-2 mx-3">
        <div class="card">
            <a href="{{ route('product.create') }}"> <button class="btn btn-danger">Add a Product</button></a>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Is_active</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $products)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $products->name }}</td>
                            <td>{{ $products->title }}</td>
                            <td>{{ $products->category }}</td>
                            <td>{{ $products->price }}</td>
                            <td>{{ $products->is_active == 1 ? 'Active' : 'Disable' }}</td>
                            <td>{{ $products->description }}</td>

                            <td><img src="{{asset('storage/products/'
                            .$products->image)}}" height="50" alt="no image"></td>


                            <td>
                                <a href="{{ route('product.edit', $products->id) }}"><button class="btn btn-info">Edit</button></a>
                                {{-- <a href="{{ route('product.delete', $products->id) }}"><button type="submit" class="btn btn-danger">
                                        Delete </button></a> --}}
                                <form action="{{ route('product.destroy', $products->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-outline-danger">Delete </button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-master>