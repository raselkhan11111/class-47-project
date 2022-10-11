<x-master>
        <div class="col-md-8 px-2 mx-3">
    <div class="card">
    <h4 class="text-center bg-dark text-light">Add Patient</h4>
        <div class="card-body">
            <form action="{{ route('lab.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="lab_no" class="form-label">Lab No</label>
                    <input type="number" class="form-control" id="lab_no" name="lab_no">
                </div>
                <div class="mb-3">
                    <label for="no_of_pc" class="form-label">No Of Pc</label>
                    <input type="number" class="form-control" id="no_of_pc" name="no_of_pc">
                </div>
                <div class="mb-3">
                    <label for="capacity" class="form-label">Capacity</label>
                    <input type="text" class="form-control" id="capacity" name="capacity">
                </div>

                <select class="form-select" aria-label="Default select example" name="type">
                    <option value="" disabled selected>(select One)</option>
                    <option value="Server">Server</option>
                    <option value="Web Development">Web Development</option>
                </select> 
                <button type="submit" class="btn btn-success">Submit Now</button>
            </form>
        </div>
    </div>
</x-master>
