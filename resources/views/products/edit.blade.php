<x-master>
    <div class="col-md-8 px-2 mx-3">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <x-form.input type="text" name="name" label="Name Of Product" value="{{old('name',$product->name)}}" class="text-dark" placeholder="Name Of product" />

                    <x-form.input type="text" name="title" label="Title"  value="{{old('name',$product->title)}}" class="text-dark" placeholder="Product Title" />


                  
                    <x-form.select name="category" label="Select category" :values="[
                            'T-Shirt' => 'T-Shirt',
                             'Jeans' => 'Jeans',
                            'Glasses' => 'Glasses',
                            
                 ]" :selectedValue="$product->category"/>

                 <x-form.input type="number" name="price" label="Price"  value="{{old('price',$product->price)}}" class="text-dark" placeholder="Product Title" />

                   
                 @php
            
            if($product->is_active){
                $checkedItems=[0];
            }
            else {
                $checkedItems=[];
            }
            @endphp
                 <x-form.checkbox  type="checkbox" name="is_active"  :checklist="['Is Active']" :checkedItems="$checkedItems" lable="Is Active :" id="pre-checked-2" value="1" />

                 <x-form.textarea name="description" label="Description" value="{{old('description',$product->description)}}" class="text-dark" placeholder="Write Here ............." />

                 <x-form.input type="file" name="image" label="Picture"   />

                    <button type="submit" class="btn btn-success">Submit Now</button>
                </form>
            </div>
        </div>
</x-master>