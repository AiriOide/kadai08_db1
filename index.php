    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート入力</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFE6F2;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFF0F5;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #FF69B4;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
            color: #FF1493;
        }
        input, textarea {
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #FF69B4;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #FF69B4;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #FF1493;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
