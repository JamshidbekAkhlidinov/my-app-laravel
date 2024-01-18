@extends('layouts/main')

@section('title')
    Post category form
@endsection

@section('content')

   @if($errorsMessage = $errors->all())
       <div class="alert alert-danger mb-xl-0" role="alert">
           @foreach($errorsMessage as $error)
              <li>{{ $error }}</li>
           @endforeach
       </div>
   @endif

    <form action="{{ route('post.category.create') }}" method="post">
        @csrf

        <div>
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div>
            <label for="post-category-status" class="form-label">
                <input type="checkbox" class="form-check-info" id="post-category-status" name="status">
                Status
            </label>
        </div>

        <button type="submit" class="btn btn-success">Saqlash</button>

    </form>

@endsection
