

<x-master>
    <div class="col-md-8 px-2 mx-3">
        <div class="card">
            <h4 class="text-center bg-dark text-light">Edit Patient</h4>
            <div class="card-body">
                <form action="{{ route('patient.update', $patients->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$patients->name}}">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{$patients->address}}">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone" value="{{$patients->phone}}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$patients->email}}">
                </div>
                <div class="mb-3">
                    <label for="lust_visit" class="form-label">Lust Visit</label>
                    <input type="date" class="form-control" id="lust_visit" name="lust_visit" value="{{$patients->lust_visit}}">
                </div>

                <label for="depaetment">Depertment</label>
                <select class="form-select" id="depertment" aria-label="Default select example" name="department">
                    <option value="{{$patients->department}}" selected>{{$patients->department}}</option>
                    <option value="Arthobatiks">Arthobatiks</option>
                    <option value="Newrology">Newrology</option>
                    <option value="Pathalogy">Pathalogy</option>
                    <option value="Kardiology">Kardiology</option>
                    <option value="Other">Other</option>
                </select> 
                <label for="distric">Districe</label>
                <select class="form-select" id="distric" aria-label="Default select example" name="distric">
                    <option value="{{$patients->distric}}" disabled selected>{{$patients->distric}}</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Etc">Etc</option>
                </select>
                    <button type="submit" class="btn btn-success mt-3 text-center">Update Now</button>
                </form>
            </div>
        </div>
</x-master>















