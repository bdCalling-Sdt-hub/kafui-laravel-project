<!DOCTYPE html>
<html>
<head>
    <title>New Request Quote</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        h1 {
            color: #333333;
            text-align: center;
        }
        p {
            font-size: 14px;
            line-height: 1.6;
            color: #555555;
        }
        strong {
            color: #333333;
        }
        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .row p {
            margin: 0;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #999999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Request Quote</h1>
        <div class="row">
            <p><strong>Install System:</strong></p>
            <p>{{ $requestData['install_system'] ?? 'N/A' }}</p>
        </div>
        <div class="row">
            <p><strong>System Complete By:</strong></p>
            <p>{{ $requestData['system_complet_by'] ?? 'N/A' }}</p>
        </div>
        <div class="row">
            <p><strong>Monthly Electric Use:</strong></p>
            <p>{{ $requestData['contact-usage'] ?? 'N/A' }}</p>
        </div>
        <div class="row">
            <p><strong>Solar System Type:</strong></p>
            <p>{{ $requestData['solar_system_type'] ?? 'N/A' }}</p>
        </div>
        <div class="row">
            <p><strong>Solar Panel Place:</strong></p>
            <p>{{ $requestData['solar_panel_place'] ?? 'N/A' }}</p>
        </div>
        <div class="row">
            <p><strong>Material on Your Roof:</strong></p>
            <p>{{ $requestData['metarial_on_your_rof'] ?? 'N/A' }}</p>
        </div>
        <div class="row">
            <p><strong>About Your Project:</strong></p>
            <p>{{ $requestData['contact-projects'] ?? 'N/A' }}</p>
        </div>
        <div class="row">
            <p><strong>First Name:</strong></p>
            <p>{{ $requestData['contact-first-name'] ?? 'N/A' }}</p>
        </div>
        <div class="row">
            <p><strong>Last Name:</strong></p>
            <p>{{ $requestData['contact-last-name'] ?? 'N/A' }}</p>
        </div>
        <div class="row">
            <p><strong>Email:</strong></p>
            <p>{{ $requestData['contact-email'] ?? 'N/A' }}</p>
        </div>
        <div class="row">
            <p><strong>Phone:</strong></p>
            <p>{{ $requestData['contact-phone'] ?? 'N/A' }}</p>
        </div>
        <div class="row">
            <p><strong>Contact Method:</strong></p>
            <p>{{ $requestData['customRadioInline1'] ?? 'N/A' }}</p>
        </div>
        <div class="row">
            <p><strong>Street Address:</strong></p>
            <p>{{ $requestData['contact-address'] ?? 'N/A' }}</p>
        </div>
        <div class="row">
            <p><strong>City:</strong></p>
            <p>{{ $requestData['contact-city'] ?? 'N/A' }}</p>
        </div>
        <div class="row">
            <p><strong>State:</strong></p>
            <p>{{ $requestData['contact-state'] ?? 'N/A' }}</p>
        </div>
        <div class="row">
            <p><strong>Zip Code:</strong></p>
            <p>{{ $requestData['contact-zip'] ?? 'N/A' }}</p>
        </div>
        <div class="row">
            <p><strong>Country:</strong></p>
            <p>{{ $requestData['contact-country'] ?? 'N/A' }}</p>
        </div>
        <div class="row">
            <p><strong>Ship to Address Type:</strong></p>
            <p>{{ $requestData['ship_to_address_type'] ?? 'N/A' }}</p>
        </div>
        <div class="footer">
            <p>&copy; 2024 Your Company. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
