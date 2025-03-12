<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nová správa z kontaktného formulára</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: #3c9d5a;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .content {
            padding: 30px;
            line-height: 1.6;
        }
        .content p {
            margin: 10px 0;
        }
        .content strong {
            color: #3c9d5a;
        }
        .footer {
            background: #eee;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #666;
        }
        .footer a {
            color: #3c9d5a;
            text-decoration: none;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background: #3c9d5a;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn:hover {
            background: #2e7d46;
        }
    </style>
</head>
<body>

<div class="email-container">
    <!-- Header -->
    <div class="header">
        Nová správa z kontaktného formulára
    </div>

    <!-- Content -->
    <div class="content">
        <p><strong>Meno a priezvisko:</strong> {{ $request->name }} {{ $request->surname }}</p>
        <p><strong>Email:</strong> <a href="mailto:{{ $request->email }}">{{ $request->email }}</a></p>
        <p><strong>Telefón:</strong> {{ $request->phone ?? 'Nezadali číslo' }}</p>
        <p><strong>Predmet:</strong> {{ $request->subject }}</p>
        <p><strong>Správa:</strong> {{ $request->message }}</p>

        <!-- Button -->
        <a href="mailto:{{ $request->email }}" class="btn">Odpovedať na správu</a>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; {{ date('Y') }} New Green Company | <a href="https://www.newgreencompany.sk">www.newgreencompany.sk</a>
    </div>
</div>

</body>
</html>
