@extends('client.client_dashboard')
@section('admin2')

<div class="container" style="margin-top:100px;">
    <h2>Edit Venue</h2>
    <form action="{{ route('hotels.update', $hotel->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Hotel Name</label>
            <input type="text" name="name" class="form-control" value="{{ $hotel->name }}" >
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" class="form-control" value="{{ $hotel->location }}" >
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="text" name="amount" class="form-control" value="{{ $hotel->amount }}" >
        </div>
        <button type="submit" class="btn btn-success">Update Venue</button>
    </form>

    <form action="{{ route('agent.update.property.thumbnail') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="thambnail">Update Thumbnail:</label>
        <input type="file" name="property_thambnail" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Thumbnail</button>
</form>

</div>
@endsection
