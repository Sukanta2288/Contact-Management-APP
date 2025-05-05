@extends('layouts.app')

@section('content')
<div class="container fade-in">
    <h1>Contacts</h1>

    <div class="row mb-4">
        <div class="col-md-6">
            <form action="{{ route('contacts.index') }}" method="GET" class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search by name or email" value="{{ request('search') }}">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                </div>
            </form>
        </div>
        <!-- <div class="col-md-6 text-right">
            <a href="{{ route('contacts.create') }}" class="btn btn-primary btn-lg">Add New Contact</a>
        </div> -->
    </div>

    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>
                    <a href="{{ route('contacts.index', ['sort' => 'name', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}">
                        Name
                        @if(request('sort') === 'name')
                            <i class="fas fa-sort-{{ request('direction') === 'asc' ? 'up' : 'down' }}"></i>
                        @endif
                    </a>
                </th>
                <th>
                    <a href="{{ route('contacts.index', ['sort' => 'created_at', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}">
                        Created At
                        @if(request('sort') === 'created_at')
                            <i class="fas fa-sort-{{ request('direction') === 'asc' ? 'up' : 'down' }}"></i>
                        @endif
                    </a>
                </th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->created_at->format('Y-m-d H:i') }}</td>
                <td class="text-center">
                    <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="d-inline-block delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center">No contacts found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $contacts->links() }}
    </div>
</div>
@endsection
