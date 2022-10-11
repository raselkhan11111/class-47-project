<x-master>
    <div class="col-md-8 px-2 mx-3">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('course.store') }}" method="post">
                    @csrf
                    <x-form.input type="text" name="title" label="Title" class="text-dark" />

                    <x-form.select name="category" label="Select Category" name="category" id="category" :options="[
                            'Snikers' => 'Snikers',
                            'T-shirt' => 'T-shirt',
                            'Shirt' => 'Shirt',
                            'Electronic' => 'Electronic',
                 ]" />
                    <x-form.radieo value="HTML" lable="HTML" />
                    <x-form.radieo value="CSS" lable="CSS" />
                    <x-form.radieo value="PHP" lable="PHP" />

                    <x-form.select name="tecnology" label="Select Tecnology" name="tecnology" id="tecnology" :options="[
                            'Softwore' => 'Softwore',
                            'Data-Science' => 'Data-Science',
                            'Shirt' => 'Shirt',
                            'Web Development' => 'Web Development',
                 ]" />
                 <x-form.input type="number" name="duration" label="Duration" class="text-dark" />
                 <x-form.input type="date" name="start_date" label="Start Date" class="text-dark" />

                    <button type="submit" class="btn btn-success">Submit Now</button>
                </form>
            </div>
        </div>
</x-master>