<x-master>
        <div class="col-md-8 px-2 mx-3">
            <div class="card">
                <a href="{{ route('course.create') }}"> <button class="btn btn-danger">Add a Course</button></a>
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
                            @foreach ($courses as $course)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->category }}</td>
                                <td>{{ $course->type }}</td>
                                <td>{{ $course->tecnology }}</td>
                                <td>{{ $course->duration }}</td>
                                <td>{{ $course->start_date }}</td>
                                <td>
                                    <a href="{{ route('course.edit', $course->id) }}"><button class="btn btn-info">Edit</button></a>
                                    <a href="{{ route('course.delete', $course->id) }}"><button type="submit" class="btn btn-danger">
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