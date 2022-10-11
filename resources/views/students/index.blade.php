<x-master>
    <div class="col-md-8 px-2 mx-3">
        <div class="card">
            <a href="{{ route('student.create') }}"> <button class="btn btn-danger">Add a student</button></a>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date Of Birth</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Hobbys</th>
                            <th scope="col">Nationality</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $students)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $students->name }}</td>
                                <td>{{ $students->date_of_birth }}</td>
                                <td>{{ $students->gender }}</td>
                                <td>
                                    @php
                                        $hobbies = explode(',', $students->hobby);
                                        
                                    @endphp
                                    @foreach ($hobbies as $hobby)
                                        {{ $hobby }}
                                    @endforeach
                                </td>
                                <td>{{ $students->nationality }}</td>
                                <td>
                                    <a href="{{ route('student.edit', $students->id) }}"><button
                                            class="btn btn-info">Edit</button></a>
                                    <a href="{{ route('student.delete', $students->id) }}"><button type="submit"
                                            class="btn btn-danger">
                                            Delete </button></a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</x-master>
