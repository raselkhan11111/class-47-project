@props(['name','values'=>'', 'label' => '','selectedValue'=>''])


<div class="mb-3">
    @if($label)
    <label for="{{ $name }}Input">{{ $label }}<br>
        @endif
        <select id="{{ $name }}Input" class="form-control" name="{{ $name }}"  {{ $attributes->merge(['class' => 'form-control']) }}>
            <option value="" disabled selected>--{{ $label }} --</option>


            @foreach ($values  as $keys=>$value)


            <option  value="{{ $value}}" @if($value==$selectedValue) selected @endif>
                {{ $value}}
                
            </option>
            @endforeach


        </select><br>
    @error('gender')
    <div class="form-text text-danger">{{ $message }}</div>
    @enderror

</div>