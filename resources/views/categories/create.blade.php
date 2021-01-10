@extends('dashboard.layout.main')

@section('title', 'Create New Category')

@section('content')

{{-- Show Succes Message if everything is OK --}}
@if (Session()->has('success'))
<div class="alert alert-success" role="alert"><i class="fas fa-check-circle"></i> {{ session()->get('success') }}</div>
@endif

@section('card-content')
@include('layout.input', ['name'=>'name', 'label'=>'Name'])
@include('layout.input', ['name'=>'description', 'label'=>'Description'])

<button type="submit" class="btn btn-success">Create</button>
@endsection

@include('layout.card', ['cardTitle' => 'Create Product', "formAction"=>route('categories.store')])

@endsection
