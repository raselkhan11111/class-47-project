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
                            <th scope="col">Is_active</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                  
                </table>
            </div>
        </div>
    </div>
</x-master>
