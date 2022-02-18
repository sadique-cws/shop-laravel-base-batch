@extends('base')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-5 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2 class="h5">edit Category</h2>
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">title</label>
                                <input type="text" name="cat_title" value="{{ $category->cat_title }}"  class="form-control">
                                @error('cat_title')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">description</label>
                                <textarea name="cat_description" class="form-control" rows="10">
                                    {{ $category->cat_description }}
                                </textarea>
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