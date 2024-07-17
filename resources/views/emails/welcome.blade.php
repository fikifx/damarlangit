<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
</head>
<body>
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 20px; background-color: #f0f0f0;">
                <h2>Welcome to Our Application, {{ $user->nama }}!</h2>
                <p>We are excited to have you on board.</p>
            </td>
        </tr>
    </table>
</body>
</html>
