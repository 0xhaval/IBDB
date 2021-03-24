@extends('layouts.app')
@section('content')
<section class="container mt-5" >
    <div class="card" >
        <div class="card-header">
            <h4 class="card-title">Update information</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Error!</strong> <br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Full Name</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" value="{{ $user->name }}" name="name"
                                        placeholder="Input with icon left" id="first-name-icon">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">

                                <div class="form-group has-icon-left">
                                    <label for="email-id-icon">Email</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Email" value="{{ $user->email }}" name="email"
                                            id="email-id-icon">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group has-icon-left">
                                    <label for="password-id-icon">Password</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" placeholder="Password" name="password"
                                            id="password-id-icon">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group has-icon-left">
                                    <label for="password-id-icon">Repeat Password</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" placeholder="Password" name="password_confirmation"
                                            id="password-id-icon">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
