@extends('backend.layouts.app')
@section('content')
<div class="page-heading">
    <h3>Category Statistics</h3>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contacts as $contact)
                    <tr>
                        <td>
                            <a href="{{ route('contact.show', $contact->id) }}">{{ $contact->name }}</a>
                        </td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-sm" onclick="document.getElementById('delete-user-{{ $contact->id }}').submit();">Delete</a>
                            <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" id="delete-user-{{ $contact->id }}">
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
                {{ $contacts->links('pagination::bootstrap-4') }}
            </div>

        </div>
    </div>

</section>
@endsection
