<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Quiz Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Common Styles -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            margin-top: 100px;
            background-color: #ffffff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 60%;
          
            
        }

        h2 {
            color: #007bff;
            margin-bottom: 10px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
            font-size: 18px;
            padding: 15px;
            border-radius: 10px;
        }

        p {
            font-size: 14px;
            margin-top: 10px;
        }

        .btn-danger {
            margin-top: 15px;
            background-color: #dc3545;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        @media (max-width: 576px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Quiz Result</h2>

    <div class="alert alert-success" role="alert">
        Your Score: <?= $score ?>
    </div>

    <p>Thank you for taking the quiz. Further round information goes here.</p>
    
    <form action="<?php echo base_url('logout')?>" method="post">
        <button type="submit" class="btn btn-danger btn-block">Logout</button>
    </form>
</div>

</body>
</html>
