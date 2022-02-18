@extends('base')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    @foreach ($category as $cat)
                        <a href="{{ route('categoryFilter', ['cat_id'=> $cat->id]) }}" class="list-group-item list-group-item-action">{{ $cat->cat_title }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    @foreach ($products as $item)
                        <div class="col-3">
                            <div class="card">
                                <img src="{{ asset("product_image/".$item->image) }}" class="w-100" style="object-fit: cover;height:220px" alt="">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $item->title}}</h6>
                                    <p class="small text-muted">{{ $item->category }}</p>
                                    <a href="{{ route('singleView',['pro_id'=> $item->id]) }}" class="btn btn-success">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection