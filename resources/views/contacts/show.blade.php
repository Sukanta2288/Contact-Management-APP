@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contact Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $contact->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $contact->email }}</p>
            <p class="card-text"><strong>Phone:</strong> {{ $contact->phone ?? 'N/A' }}</p>
            <p class="card-text"><strong>Address:</strong> {{ $contact->address ?? 'N/A' }}</p>

            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
            </form>
            <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
