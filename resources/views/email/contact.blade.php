<!DOCTYPE html>
<html>
<head>
    <title>New Contact Message</title>
</head>
<body>
    <h2>New Contact Message from {{ $username }}</h2>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Phone:</strong> {{ $phone }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $messageContent }}</p>
</body>
</html>
