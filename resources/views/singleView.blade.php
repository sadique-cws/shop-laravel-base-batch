@extends('base')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                    {{-- for category list --}}
                    <div class="list-group">
                        @foreach ($category as $cat)
                            <a href="{{ route('categoryFilter', ['cat_id'=> $cat->id]) }}" class="list-group-item list-group-item-action">{{ $cat->cat_title }}</a>
                        @endforeach
                    </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-3">
                        {{-- for image product --}}
                        <img src="{{ asset("product_image/".$products->image) }}" alt="" class="w-100">
                    </div>
                    <div class="col-9">
                        {{-- table for product details --}}
                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <th>{{ $products->title }}</th>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{ $products->category_id }}</td>
                            </tr>
                            <tr>
                                <th>Brand</th>
                                <td>{{ $products->brand }}</td>
                            </tr>
                            <tr>
                                <th>Quantity</th>
                                <td>{{ $products->qty }}</td>
                            </tr>
                        </table>

                        <h1>
                            <span class="text-danger">{{ $products->discount_price }}</span> 
                            <span class="text-muted"><del>{{ $products->price }}</del></span>
                        </h1>

                        <a href="" class="btn btn-success btn-lg">Add to Cart</a>
                        <a href="" class="btn btn-warning btn-lg">Buy Now</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card border border-primary">
                            <div class="card-header bg-primary text-white">Description</div>
                            <div class="card-body">
                                <p class="lead">{{ $products->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection