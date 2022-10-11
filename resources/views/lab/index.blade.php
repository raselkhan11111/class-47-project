<x-master>
        <div class="col-md-8 px-2 mx-3">
            <div class="card">
                <a href="{{ route('lab.create') }}"> <button class="btn btn-danger">Add a Lab</button></a>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Lab No</th>
                                <th scope="col">No Of PC</th>
                                <th scope="col">Capacity </th>
                                <th scope="col">Type</th>
                                <th colspan="2" scope="col">Action</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($labs as $lab)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $lab->lab_no }}</td>
                                <td>{{ $lab->no_of_pc }}</td>
                                <td>{{ $lab->capacity }}</td>
                                <td>{{ $lab->type }}</td>
                                <td>
                                    <a href="{{ route('lab.edit', $lab->id) }}"><button class="btn btn-info">Edit</button></a>
                                    <a href="{{ route('lab.delete', $lab->id) }}"><button type="submit" class="btn btn-danger">
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