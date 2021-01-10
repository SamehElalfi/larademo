@extends('dashboard.layout.main')

@section('title', 'Manage Categories')

@section('content')

{{-- Show Succes Message if everything is OK --}}
@if (Session()->has('success'))
<div class="alert alert-success" role="alert"><i class="fas fa-check-circle"></i> {{ session()->get('success') }}</div>
@endif

@section('card-content')
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody class="table-striped">

        @foreach ($categories as $category)
        <tr>
            <th scope="row">{{ $category->id }}</th>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description }}</td>
            <td>
                <a href="{{ route("dashboard.categories.edit", $category->id) }}" class="btn btn-success">Edit</a>
                <a class="btn btn-danger" data-link="{{ route("dashboard.categories.destroy", $category->id) }}"
                    onclick="deleteCategory(this)">Delete</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection

@include('layout.card', ["cardTitle" => "All Categories"])

@endsection

@section('scripts')
<script>
    function deleteCategory(ele) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: $(ele).data("link"),
            type: 'DELETE',
            success: function(result) {
                alert(result);
            }
        });
    }
</script>
@endsection
