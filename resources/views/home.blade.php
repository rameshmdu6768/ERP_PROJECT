
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Poppins", sans-serif;
        }
        .box {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            text-align: center;
            width: 350px;
        }
        h2 {
            margin-bottom: 25px;
            font-weight: 600;
            color: #333;
        }
        .btn {
            width: 130px;
            font-size: 18px;
        }
    </style>
</head>
<body>

    <div class="box">
        <h2>Select User</h2>

        <a href="/check-user?name=Ramesh" class="btn btn-primary">Ramesh</a>
        <a href="/check-user?name=Suresh" class="btn btn-danger">Vimal</a>
    </div>

</body>
</html>
