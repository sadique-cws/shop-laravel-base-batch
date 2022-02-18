@extends('base')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                @include('side')
            </div>
            <div class="col-9">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="h5">Create Category</h2>
                        <form action="{{ route('category.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">title</label>
                                <input type="text" name="cat_title" class="form-control">
                                @error('cat_title')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">description</label>
                                <textarea name="cat_description" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>description</th>
                        <th>action</th>
                    </tr>
                    @foreach ($category as $cat)
                        <tr>
                            <td>{{ $cat->id }}</td>
                            <td>{{ $cat->cat_title }}</td>
                            <td>{{ $cat->cat_description }}</td>
                            <td>
                                <a href="{{ route('category.update',['id'=>$cat->id]) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('category.delete',['id'=>$cat->id]) }}" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection