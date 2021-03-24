@extends('backend.layouts.app')
@section('content')
<div class="page-heading">
    <h3>Category Statistics</h3>
</div>
<div  class="mt-3">
    <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Add a Category</a>
</div>
@if ($message = Session::get('message'))
<div class="alert alert-success mt-3">
    <p>{{ $message }}</p>
</div>
@endif
<section class="section mt-3">
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-info btn-sm">Edit</a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger btn-sm" onclick="document.getElementById('delete-user-{{ $category->id }}').submit();">Delete</a>
                            <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST" id="delete-user-{{ $category->id }}">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                    @empty
                    <h6>There is not result</h6>
                    @endforelse

                </tbody>
            </table>
            <div>
                {{ $categories->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

</section>
@endsection
