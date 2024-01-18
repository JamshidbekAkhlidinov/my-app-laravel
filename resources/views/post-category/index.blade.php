@extends('layouts/main')

@section('title')
    Post category
@endsection

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h2>
                Hello post category
            </h2>
            <a href="{{ route('post.category.create') }}" class="btn btn-success">
                <i class="ri-folder-add-line"></i>
            </a>
        </div>
        <div class="card-content">
            <table class="table table-bordered table-striped">
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>status</th>
                    <th>actions</th>
                </tr>

                @foreach($categories as $i=>$category)
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= $category['name'] ?></td>
                        <td><?= $category['status'] ?></td>
                        <td>
                            <a href="" class="btn btn-sm btn-info">
                                <i class="las la-eye"></i>
                            </a>
                            <a href="{{ route('post.category.update',$category) }}" class="btn btn-sm btn-primary">
                                <i class="las la-edit"></i>
                            </a>
                            <a href="{{route('post.category.delete',$category)}}" class="btn btn-sm btn-danger">
                                <i class="las la-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

@endsection

