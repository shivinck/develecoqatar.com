<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Quote Request</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2 style="color: #d81a5e;">New Quote Request</h2>

    <h3>Personal Information</h3>
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
        <tr>
            <td style="padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;">Company:</td>
            <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $data['company'] ?? 'N/A' }}</td>
        </tr>
    </table>

    <h3 style="margin-top: 20px;">Project Details</h3>
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;">Service Required:</td>
            <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $data['project_type'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;">Budget:</td>
            <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $data['budget'] ?? 'Not specified' }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;">Timeline:</td>
            <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $data['timeline'] }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; font-weight: bold; border-bottom: 1px solid #eee;">Start Date:</td>
            <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $data['start_date'] ?? 'Not specified' }}</td>
        </tr>
    </table>

    <h3 style="margin-top: 20px;">Project Description:</h3>
    <p style="background: #f9f9f9; padding: 15px; border-radius: 5px;">{{ $data['project_description'] }}</p>

    <hr style="margin-top: 30px; border: none; border-top: 1px solid #eee;">
    <p style="font-size: 12px; color: #999;">This email was sent from the quote form on develecoqatar.com</p>
</body>
</html>
