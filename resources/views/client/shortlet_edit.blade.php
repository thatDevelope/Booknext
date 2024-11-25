@extends('client.client_dashboard')
@section('admin2')

<div class="container" style="margin-top:100px;">
    <h2>Edit Shortlet</h2>
    <form action="{{ route('shortlets.update', $shortlet->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Shortlet Name</label>
            <input type="text" name="name" class="form-control" value="{{ $shortlet->name }}" >
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" class="form-control" value="{{ $shortlet->location }}" >
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="text" name="amount" class="form-control" value="{{ $shortlet->amount }}" >
        </div>
        <button type="submit" class="btn btn-success">Update Venue</button>
    </form>
</div>
@endsection
