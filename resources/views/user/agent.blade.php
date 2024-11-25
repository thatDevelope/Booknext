<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .registration-container {
            max-width: 500px;
            margin: 50px auto;
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-header h3 {
            font-weight: bold;
            color: #007bff;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .submit-btn {
            background-color: #007bff;
            border: none;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="registration-container">
    <div class="form-header">
        <h3>Agent Registration</h3>
        <p class="text-muted">Join us as an agent and get started.</p>
    </div>

    <form action="{{ route('agent.register') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <!-- Full Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
        </div>
        
        <!-- Phone Number -->
        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="tel" id="phone_number" name="phone_number" class="form-control" placeholder="Enter your phone number" required>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Create a password" required>
        </div>

        <!-- Image Upload -->
        <div class="mb-3">
            <label for="photo" class="form-label">Profile Image</label>
            <input type="file" id="photo" name="photo" class="form-control" accept="image/*" required>
        </div>

        <!-- Submit Button -->
        <div class="d-grid">
            <button type="submit" class="btn btn-primary submit-btn">Register</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
