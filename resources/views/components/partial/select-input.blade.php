@props(['selectLabel','selectName','selectId'=>'','selectValue','optValue','optText', 'optUpdateValue'=>"", 'selectPlaceHolder'=>''])

<div {{ $attributes->merge(['class'=>'form-group']) }}>
    <label for="">{{ $selectLabel }}</label>
  <select name="{{ $selectName }}" id="{{ $selectId }}" class="form-control">
    <option value="" selected disabled>Pilih {{ $selectPlaceHolder }}</option>
    @foreach ($selectValue->toArray() as $value)
        <option value="{{ $value[$optValue] }}" @selected($value[$optValue]==$optUpdateValue)>{{ $value[$optText] }}</option>
    @endforeach
  </select>
</div>