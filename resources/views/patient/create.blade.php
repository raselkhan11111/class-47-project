<x-master>
        <div class="col-md-8 px-2 mx-3">
    <div class="card">
    <h4 class="text-center bg-dark text-light">Add Patient</h4>
        <div class="card-body">
            <form action="{{ route('patient.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="lust_visit" class="form-label">Lust Visit</label>
                    <input type="date" class="form-control" id="lust_visit" name="lust_visit">
                </div>
                <select class="form-select" aria-label="Default select example" name="department">
                    <option value="" disabled selected>(select One)</option>
                    <option value="Arthobatiks">Arthobatiks</option>
                    <option value="Newrology">Newrology</option>
                    <option value="Pathalogy">Pathalogy</option>
                    <option value="Kardiology">Kardiology</option>
                    <option value="Other">Other</option>
                </select> 
                <select class="form-select" aria-label="Default select example" name="distric">
                    <option value="" disabled selected>(select One)</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Etc">Etc</option>
                </select>
              

                <button type="submit" class="btn btn-success">Submit Now</button>
            </form>
        </div>
    </div>
</x-master>
