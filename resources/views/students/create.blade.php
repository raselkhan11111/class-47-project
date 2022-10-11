<x-master>
    <div class="col-md-8 px-2 mx-3">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('student.store') }}" method="post">
                    @csrf
                    <x-form.input type="text" name="name" label="Name" class="text-dark" placeholder="Enter Student name" />

                    <x-form.input type="date" name="date_of_birth" label="Date Of Birth" class="text-dark" />



                    <x-form.select name="gender" label="Select Gender" name="gender" id="gender" :options="[
                            'Male' => 'Male',
                            'Female' => 'Female',
                            'Other' => 'Other',
                 ]" />

                    <x-form.checkbox  type="checkbox" name="category[]" lable="Hobby" id="pre-checked-2" value="Programmer" />
                    <x-form.checkbox type="checkbox" name="category[]" lable="Desiginer" id="pre-checked-2" value="Desiginer" />
                    <x-form.checkbox type="checkbox" name="category[]" lable="Etc" id="pre-checked-2" value="Etc" />

                    <x-form.select label="Nationality" name="nationality" id="nationality" :options="[
                            'Bangladeshi' => 'Bangladeshi',
                            'Indian' => 'indian',
                            'Pakistani' => 'Pakistani',
                            'Other' => 'Other',
                 ]" />


                    <button type="submit" class="btn btn-success mt-5">Resister Now</button>
                </form>
            </div>
        </div>
</x-master>