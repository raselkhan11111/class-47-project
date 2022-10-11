<x-master>
    <div class="col-md-8 px-2 mx-3">
        <div class="card">
            <h4 class="text-center bg-dark text-light">Add Order</h4>
            <div class="card-body">
                <form action="{{ route('order.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="orders" class="form-label">Orders</label>
                        <input type="text" class="form-control" id="orders" name="orders">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price">
                    </div>
                    <label for="city">City</label>
                    <select class="form-select" aria-label="Default select example" id="city" name="city">
                        <option value="" disabled selected>(select One)</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Barishal">Barishal</option>
                    </select>

                    <label for="unit">Unit</label>
                    <select class="form-select" aria-label="Default select example" id="unit" name="unit">
                        <option value="" disabled selected>(select One)</option>
                        <option value="KG">KG</option>
                        <option value="Pices">Pices</option>
                    </select>

                    <div class="mb-3">
                        <label for="delevary_date" class="form-label">Delevery Date</label>
                        <input type="date" class="form-control" id="delevary_date" name="delevary_date">
                    </div>
                    <label for="status">Status</label>
                    <select class="form-select" aria-label="Default select example" id="status" name="status">
                        <option value="" disabled selected>(select One)</option>
                        <option value="Prossing">Prossing</option>
                        <option value="Shipped">Shipped</option>
                        <option value="Delevared">Delevared</option>
                        <option value="Covering">Covering</option>
                    </select>


                    <button type="submit" class="btn btn-success">Submit Now</button>
                </form>
            </div>
        </div>
</x-master>