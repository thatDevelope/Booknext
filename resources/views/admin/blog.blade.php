@extends('admin.admin_dashboard')
@section('admin')



<form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="p-4 shadow-sm rounded bg-white">
    @csrf
    <h3 class="mb-4 text-primary">Create a New Blog Post</h3>
    
    <div class="form-group mb-3">
        <label for="title" class="form-label text-muted">Blog Title</label>
        <input type="text" name="title" class="form-control border-primary" placeholder="Enter the blog title" required>
    </div>
    
    <div class="form-group mb-3">
        <label for="author" class="form-label text-muted">Author Name</label>
        <input type="text" name="author" class="form-control border-primary" placeholder="Enter the author's name" required>
    </div>
    
    <div class="form-group mb-3">
        <label for="published_date" class="form-label text-muted">Published Date</label>
        <input type="date" name="published_date" class="form-control border-primary" required>
    </div>
    
    <div class="form-group mb-3">
        <label for="content" class="form-label text-muted">Content</label>
        <textarea name="content" class="form-control border-primary" rows="6" placeholder="Write your blog content here..." required></textarea>
    </div>
    
    <div class="form-group mb-4">
        <label for="image" class="form-label text-muted">Upload Image</label>
        <input type="file" name="image" class="form-control border-primary">
        <small class="form-text text-muted">Optional. Maximum size: 2MB.</small>
    </div>
    
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary px-4">Publish Blog</button>
    </div>
</form>
@endsection