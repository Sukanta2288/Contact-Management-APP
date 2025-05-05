@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $contact->name) }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $contact->email) }}" required>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Phone (Optional)</label>
            <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', $contact->phone) }}">
        </div>

        <div class="form-group">
            <label for="address">Address (Optional)</label>
            <input type="text" id="address" name="address" class="form-control" value="{{ old('address', $contact->address) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Contact</button>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
