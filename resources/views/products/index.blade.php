@extends('layout.main')

@section('content')

<div class="container">
    <div class="card">
        <table class="table table-hover shopping-cart-wrap">
            <thead class="text-muted">
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col" width="120">Quantity</th>
                    <th scope="col" width="120">Price</th>
                    <th scope="col" width="200" class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($products as $product)
                <tr>
                    <td>
                        <figure class="media">
                            <div class="img-wrap"><img src="{{asset("/assets/img/products/".$product->photo)}}"
                                    class="img-thumbnail img-thumbnail-product img-sm">
                            </div>
                            <figcaption class="media-body">
                                <h3 class="title text-truncate text-center"><a title="{{ $product->name }}"
                                        href="{{ route('products.show', $product->id) }}">{{ Str::limit($product->name, 38, '...') }}</a>
                                </h3>
                            </figcaption>
                        </figure>
                    </td>
                    <td>
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </td>
                    <td>
                        <div class="price-wrap">
                            <var class="price">USD {{ $product->price }}</var>
                            <small class="text-muted">(USD5 each)</small>
                        </div> <!-- price-wrap .// -->
                    </td>
                    <td class="text-right">
                        <a title="" href="" class="btn btn-outline-success" data-toggle="tooltip"
                            data-original-title="Save to Wishlist"> <i class="fa fa-heart"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> <!-- card.// -->

</div>
<!--container end.//-->
<br>

@endsection

@section('scripts')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection
