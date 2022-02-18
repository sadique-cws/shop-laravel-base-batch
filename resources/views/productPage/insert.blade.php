@extends('base')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                @include('side')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col">
                        <h5>Insert Product</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">title</label>
                                <input type="text" class="form-control" name="title">
                                @error('title')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">brand</label>
                                <input type="text" class="form-control" name="brand">
                                @error('brand')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">qty</label>
                                <input type="text" class="form-control" name="qty">
                                @error('qty')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">price</label>
                                <input type="text" class="form-control" name="price">
                                @error('price')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">discount_price</label>
                                <input type="text" class="form-control" name="discount_price">
                                @error('discount_price')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">category</label>
                                <select class="form-select" name="category_id">
                                    <option value="">select category</option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->cat_title }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                                
                            </div>
                            <div class="mb-3">
                                <label for="">description</label>
                                <textarea rows="5" name="description" class="form-control"></textarea>
                                @error('description')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection