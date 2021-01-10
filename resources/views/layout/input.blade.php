<div class="form-group row">
    <label for="{{$name}}" class="col-sm-2 col-form-label">{{$label}}</label>
    <div class="col-sm-10">
        <input name="{{$name}}" type="text" class="form-control" placeholder="{{$label}}" value="{{ $value ?? '' }}">

        @if ($errors->has($name))
        <span class="text-danger">{{$errors->first($name)}}</span>
        @endif
    </div>
</div>
