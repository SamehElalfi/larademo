@extends('dashboard.layout.main')

@section('title', 'Create New Product')

@section('content')

{{-- Show Succes Message if everything is OK --}}
@if (Session()->has('success'))
<div class="alert alert-success" role="alert"><i class="fas fa-check-circle"></i> {{ session()->get('success') }}</div>
@endif

@section('card-content')
@include('layout.input', ['name'=>'name', 'label'=>'Name'])
@include('layout.input', ['name'=>'price', 'label'=>'Price'])
@include('layout.input', ['name'=>'description', 'label'=>'Description'])

<div class="form-group row">
    <label for="category" class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-10">
        <select name="category" class="form-control selectpicker" data-live-search="true">
            <option value=""></option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        @if ($errors->has("category"))
        <span class="text-danger">{{$errors->first("category")}}</span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="photo" class="col-sm-2 col-form-label">Photo</label>
    <div class="col-sm-10">
        <input name="photo" type="file">

        @if ($errors->has('photo'))
        <span class="text-danger">{{$errors->first("photo")}}</span>
        @endif

    </div>
</div>

<button type="submit" class="btn btn-success">Create</button>
@endsection

@include('layout.card', ['cardTitle' => 'Create Product', "formAction"=>route("products.store") ])

@endsection
