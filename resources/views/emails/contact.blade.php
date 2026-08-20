<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2 style="color: #d81a5e;">New Contact Form Submission</h2>

    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;">Name:</td>
            <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $data['name'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;">Email:</td>
            <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $data['email'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;">Phone:</td>
            <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $data['phone'] }}</td>
        </tr>
    </table>

    <h3 style="margin-top: 20px;">Message:</h3>
    <p style="background: #f9f9f9; padding: 15px; border-radius: 5px;">{{ $data['message'] }}</p>

    <hr style="margin-top: 30px; border: none; border-top: 1px solid #eee;">
    <p style="font-size: 12px; color: #999;">This email was sent from the contact form on develecoqatar.com</p>
</body>
</html>
