<x-master>
    <div class="col-md-8 px-2 mx-3">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('student.update', $student->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                            placeholder="name............" value="{{ $student->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control" name="date_of_birth"
                            value="{{ $student->date_of_birth }}">
                    </div>
                    <select class="form-select" aria-label="Default select example" name="gender">

                        <option selected value="{{ $student->gender }}">{{ $student->gender }}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>


                    <div class="form-group">
                        <label><strong>Hobbys :</strong></label><br>
                        <label><input type="checkbox" name="category[]" value="Programmer"
                                {{ in_array('Programmer', $student->hobby) ? 'checked' : ' ' }}> Programmer</label>
                        <label><input type="checkbox" name="category[]" value="Desiginer"
                                {{ in_array('Desiginer', $student->hobby) ? 'checked' : ' ' }}> Desiginer</label>
                        <label><input type="checkbox" name="category[]" value="Etc"
                                {{ in_array('Etc', $student->hobby) ? 'checked' : ' ' }}> Etc</label>
                    </div>
                    <select class="form-select" aria-label="Default select example" name="nationality">
                        <option value="{{ $student->nationality }}">{{ $student->nationality }}</option>
                        <option value="Bangladeshi">Bangladeshi</option>
                        <option value="Other">other</option>
                    </select>

                    <button type="submit" class="btn btn-success">Resister Now</button>
                </form>
            </div>
        </div>
</x-master>
