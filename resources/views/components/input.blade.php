<div>

    <div class="wrap-input1 validate-input" >
         <input class="input1" type="{{$type }}" name="{{ $name }}" id="{{ $id }}" placeholder="{{ $placeholder }}">
         <span style="!color:red"></span>
         @error( $name)
         <div>{{ $message }}</div>
         @enderror
     </div>
</div>
