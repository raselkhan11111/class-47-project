

<x-master>
    <div class="col-md-8 px-2 mx-3">
        <div class="card">
            <h4 class="text-center bg-dark text-light">Edit Patient</h4>
            <div class="card-body">
                <form action="{{ route('lab.update', $labs->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                    <label for="lab_no" class="form-label">Lab No</label>
                    <input type="number" class="form-control" id="lab_no" name="lab_no" value="{{$labs->lab_no}}">
                </div>
                <div class="mb-3">
                    <label for="no_of_pc" class="form-label">No Of Pc</label>
                    <input type="number" class="form-control" id="no_of_pc" name="no_of_pc" value="{{$labs->no_of_pc}}">
                </div>
                <div class="mb-3">
                    <label for="capacity" class="form-label">Capacity</label>
                    <input type="text" class="form-control" id="capacity" name="capacity"  value="{{$labs->capacity}}">
                </div>

                <label for="type" class="form-label">Type</label>
                <select class="form-select" aria-label="Default select example" id="type" name="type">
                    <option value="{{$labs->type}}" selected>{{$labs->type}}</option>
                    <option value="Server">Server</option>
                    <option value="Web Development">Web Development</option>
                </select>
                 
                    <button type="submit" class="btn btn-success mt-3 text-center">Update Now</button>
                </form>
            </div>
        </div>
</x-master>















