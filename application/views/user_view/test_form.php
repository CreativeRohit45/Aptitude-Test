<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Test Window</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include SweetAlert from CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>


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
        margin-top: 50px;
        background-color: #ffffff;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        width: 80%; 
        margin: 0 auto; 
    }

    h2 {
        color: #007bff;
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        color: #495057;
        font-weight: bold;
        font-size: 18px;
    }

    .form-control {
        border: 1px solid #ced4da;
        border-radius: 5px;
        position: relative;
        padding-right: 15px;
        font-size: 16px;
        height: 45px;
    }

    select.form-control {
        width: 100%;
        padding: 12px;
        cursor: pointer;
        background-color: #fff;
        color: #495057;
    }

    .error-message {
        color: #dc3545;
        margin-top: 10px;
        font-size: 14px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        padding: 12px 24px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    @media (max-width: 768px) {
        .container {
            width: 90%;
        }
    }

    @media (max-width: 576px) {
        .container {
            width: 100%;
        }

        .form-control {
            font-size: 14px;
            height: 40px;
        }

        .btn-primary {
            padding: 10px 20px;
            font-size: 16px;
        }
    }

        
    </style>
</head>
<body>

    <div class="container">
        <h2>Test Form</h2>
        <form action="/login" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                    value="<?php echo set_value('name'); ?>">
                <div class="error-message"><?php echo form_error('name'); ?></div>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile"
                    placeholder="Enter your mobile number" value="<?php echo set_value('mobile'); ?>">
                <div class="error-message"><?php echo form_error('mobile'); ?></div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                    value="<?php echo set_value('email'); ?>">
                <div class="error-message"><?php echo form_error('email'); ?></div>
            </div>
            <div class="form-group">
                <label for="role">Select Role:</label>
                <select id="role" name="role" class="form-control" required>
                    <?php foreach ($roles as $role): ?>
                        <option value="<?= $role->role_name; ?>"><?= $role->role_name; ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="error-message"><?php echo form_error('role'); ?></div>
            </div>
            <div class="form-group">
                <label for="qualification">Qualification</label>
                <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Enter your qualification"
                    value="<?php echo set_value('qualification'); ?>">
                    <div class="error-message"><?php echo form_error('qualification'); ?></div>
                    </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    // Check for error flashdata and show SweetAlert
    <?php if ($this->session->flashdata('error')): ?>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '<?= $this->session->flashdata("error") ?>',
        });
    <?php endif; ?>
    </script>
    
  
</body>

</html>

