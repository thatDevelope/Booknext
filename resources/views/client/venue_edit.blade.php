@extends('client.client_dashboard')
@section('admin2')

<div class="container" style="margin-top:100px;">
    <h2>Edit Venue</h2>
    <form action="{{ route('venues.update', $venue->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Venue Name</label>
            <input type="text" name="name" class="form-control" value="{{ $venue->name }}" >
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" class="form-control" value="{{ $venue->location }}" >
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="text" name="amount" class="form-control" value="{{ $venue->amount }}" >
        </div>
        <button type="submit" class="btn btn-success">Update Venue</button>
    </form>
</div>
@endsection
