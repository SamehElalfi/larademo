@extends('dashboard.layout.main')

@section('title', 'Manage Product')

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
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody class="table-striped">

        @foreach ($products as $product)
        <tr>
            <th scope="row">{{ $product->id }}</th>
            <th scope="row"><img src="{{ asset("/assets/img/products/".$product->photo) }}" alt="{{ $product->name }}"
                    width="50">
            </th>
            <td data-toggle="tooltip" data-placement="bottom"
                title="{{ Str::limit($product->description, 255, '...') }}">{{ $product->name }}
            </td>
            <td>{{ Str::limit($product->description, 100, '...') }}</td>
            <td>
                <a href="{{ route("products.edit", $product->id) }}" class="btn btn-success">Edit</a>
                <a data-link="{{ route("products.destroy", $product->id) }}" onclick="deleteProduct(this)"
                    class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection

@include('layout.card', ['cardTitle' => 'Create Product', "formAction"=>route("products.store") ])

@endsection

@section('scripts')
<script>
    function deleteProduct(ele) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: $(ele).data("link"),
            type: 'DELETE',
            success: function(result) {
                ele.parentElement.parentElement.remove();
                console.log(result);
            }
        });
    }
</script>
@endsection
