
<div class="form-group">

    <label><strong>{{$lable}}</strong></label><br>
    <label><input type="radio" name="type" > {{$value}}</label>
    @error('name')
    <div class="form-text text-danger">{{ $message }}</div>
    @enderror
</div>