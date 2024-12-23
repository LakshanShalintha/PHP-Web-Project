{{--sending email--}}
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .email-header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .email-header h1 {
            margin: 0;
            font-size: 24px;
        }
        .email-content {
            padding: 20px;
        }
        .email-content p {
            line-height: 1.6;
            margin: 10px 0;
        }
        .email-footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
<div class="email-container">
    <div class="email-header">
        <h1>TRAVLO</h1>
        <p>Contact Form Submission</p>
    </div>
    <div class="email-content">
        <p><strong>Name:</strong> {{ $details['name'] }}</p>
        <p><strong>Email:</strong> {{ $details['email'] }}</p>
        <p><strong>Message:</strong></p>
        <p>{{ $details['message'] }}</p>
    </div>
    <div class="email-footer">
        <p>&copy; 2024 TRAVLO. All rights reserved.</p>
    </div>
</div>
</body>
</html>
