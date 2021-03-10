<option>--- Pilih Kab/Kota ---</option>

@if(!empty($states))
  @foreach($states as $key => $value)
    <option value="{{ $key }}"><?php echo $value;?></option>
  @endforeach
@endif