<x-master>
        <div class="col-md-8 px-2 mx-3">
            <div class="card">
                <a href="{{ route('patient.create') }}"> <button class="btn btn-danger">Add a Patient</button></a>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Type</th>
                                <th scope="col">Tecnology</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Start Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $patient->name }}</td>
                                <td>{{ $patient->address }}</td>
                                <td>{{ $patient->phone }}</td>
                                <td>{{ $patient->email }}</td>
                                <td>{{ $patient->lust_visit }}</td>
                                <td>{{ $patient->department }}</td>
                                <td>{{ $patient->distric }}</td>
                                <td>
                                    <a href="{{ route('patient.edit', $patient->id) }}"><button class="btn btn-info">Edit</button></a>
                                    <a href="{{ route('patient.delete', $patient->id) }}"><button type="submit" class="btn btn-danger">
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