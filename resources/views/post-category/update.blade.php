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

    <form method="post" action="{{route('post.category.update.request')}}">
        @csrf
        <input type="hidden" name="id" value="<?=$post['id']?>">

        <div>
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?=$post['name']?>">
        </div>
        <div>
            <label for="post-category-status" class="form-label">
                <input @checked($post['status'])  type="checkbox" class="form-check-info" id="post-category-status" name="status">
                Status
            </label>
        </div>

        <button type="submit" class="btn btn-success">Saqlash</button>

    </form>

@endsection
