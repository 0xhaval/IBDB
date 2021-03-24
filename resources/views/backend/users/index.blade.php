@extends('backend.layouts.app')
@section('content')
<div class="page-heading">
    <h3>User Statistics</h3>
</div>
<form action="{{ route('admin.user.index') }}" method="GET"
class="d-none d-sm-inline-block form-inline  navbar-search ">
<div class="input-group">
    <input type="search" name="search" class="form-control bg-black border-0 small" placeholder="Search for..."
        aria-label="Search" aria-describedby="basic-addon2" value="{{ request('search') }}">
    <div class="input-group-append">
        <button class="btn btn-primary" type="button">
            <i class="bi bi-search"></i>
        </button>
    </div>
</div>
</form>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <span class="badge {{ $user->is_admin? 'bg-success' : 'bg-danger' }}">{{ $user->is_admin? 'Admin' : 'User' }}</span>
                        </td>
                        <td>
                            <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-info btn-sm">Edit</a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger btn-sm" onclick="document.getElementById('delete-user-{{ $user->id }}').submit();">Delete</a>
                            <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" id="delete-user-{{ $user->id }}">
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
                {{ $users->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

</section>
@endsection
