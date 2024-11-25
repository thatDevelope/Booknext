
@extends('admin.admin_dashboard')
@section('admin')


<form action="{{ route('admin.email') }}" method="POST" class="p-4 border rounded shadow-sm bg-white" style="margin-top:70px;">
    @csrf
    <h4 class="mb-4 text-primary">Compose New Email</h4>
    
    <div class="form-group mb-3">
        <label for="emails" class="form-label fw-bold">To (Separate multiple emails with commas):</label>
        <input type="text" name="emails" id="emails" class="form-control" placeholder="example1@gmail.com, example2@gmail.com" required>
        <small class="form-text text-muted">Enter valid email addresses separated by commas.</small>
    </div>
    
    <div class="form-group mb-3">
        <label for="subject" class="form-label fw-bold">Subject:</label>
        <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter subject" required>
    </div>
    
    <div class="form-group mb-4">
        <label for="message" class="form-label fw-bold">Message:</label>
        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter your message" required></textarea>
    </div>
    
    <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-lg shadow-sm" style="background-color: #007bff;">
            <i class="fas fa-paper-plane"></i> Send Email
        </button>
    </div>
</form>

<!-- Additional styling -->
<style>
    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
    }

    button.btn-primary {
        transition: background-color 0.3s ease;
    }

    button.btn-primary:hover {
        background-color: #0056b3;
    }
</style>
@endsection