<x-master>
        <div class="col-md-8 px-2 mx-3">
            <div class="card">
                <a href="{{ route('order.create') }}"> <button class="btn btn-danger">Add a Order</button></a>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Order</th>
                                <th scope="col">Price</th>
                                <th scope="col">City </th>
                                <th scope="col">Unit</th>
                                <th scope="col">Delevery Date</th>
                                <th scope="col">Status</th>
                                <th colspan="2" scope="col">Action</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $order->orders }}</td>
                                <td>{{ $order->price }}</td>
                                <td>{{ $order->city }}</td>
                                <td>{{ $order->unit }}</td>
                                <td>{{ $order->delevary_date }}</td>
                                <td>{{ $order->status }}</td>
                                <td>
                                    <a href="{{ route('order.edit', $order->id) }}"><button class="btn btn-info">Edit</button></a>
                                    <a href="{{ route('order.delete', $order->id) }}"><button type="submit" class="btn btn-danger">
                                            Delete </button></a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </x-master>