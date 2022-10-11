<x-master>
    <div class="col-md-8 px-2 mx-3">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('course.update', $courses->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $courses->title }}">
                    </div>
                    <select class="form-select" aria-label="Default select example" name="category">
                        <option value="{{ $courses->category }}" selected>{{ $courses->category }}</option>
                        <option value="Snikers">Snikers</option>
                        <option value="T-shirt">T-shirt</option>
                        <option value="Shirt">Shirt</option>
                        <option value="Electronic">Electronic</option>
                        <option value="Other">Other</option>
                    </select>
                    <div class="form-group">
                        <label><strong>Type</strong></label><br>

                        <label><input type="radio" name="type"
                                value="HTML"{{ $courses->type == 'HTML' ? 'checked' : '' }}>HTML</label>
                        <label><input type="radio" name="type" value="CSS"
                                {{ $courses->type == 'CSS' ? 'checked' : '' }}> CSS</label>
                        <label><input type="radio" name="type" value="PHP"
                                {{ $courses->type == 'PHP' ? 'checked' : '' }}> PHP</label>
                    </div>

                    <select class="form-select" aria-label="Default select example" name="tecnology">

                        <option value="{{ $courses->tecnology }}" selected>{{ $courses->tecnology }}</option>

                        <option value="Softwore">Softwore</option>
                        <option value="Data-Science">Data-Science</option>
                        <option value="Web Development">Web Development</option>

                    </select>

                    <label for="duration">Duration</label>
                    <input type="number" name="duration" id="duration" class="form-control"
                        value="{{ $courses->duration }}" />
                    <br>
                    <label for="start_date">Start Date</label>
                    <input type="date" name="start_date" id="start_date" class="form-control"
                        value="{{ $courses->start_date }}" />
                    <br>

                    <button type="submit" class="btn btn-success">Update Now</button>
                </form>
            </div>
        </div>
</x-master>
