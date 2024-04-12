<?php $this->load->view('header'); ?>
<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .content {
        text-align: center;
        margin: 20px;
        margin-top: 60px;
    }

    h2 {
        color: #3498db;
    }

    form {
        width: 30%;
        margin: auto;
        margin-top: 20px;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: bold;
    }

    select,
    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        transition: border-color 0.3s;
    }

    select:focus,
    input:focus {
        border-color: #3498db;
    }

    .info {
        font-size: 14px;
        color: #555;
        margin-bottom: 15px;
    }

    button {
        background-color: #3498db;
        color: white;
        padding: 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 5px;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #2980b9;
    }

    @media screen and (max-width: 768px) {
        form {
            width: 80%; /* Adjust width for smaller screens */
        }

        .content {
            text-align: center;
            margin: 20px;
            margin-top: 90px;
        }
    }
</style>
</head>
<body>

<div class="content">
    <h2>Add Question Paper</h2>
    <form action="/addPaper" method="post" enctype="multipart/form-data">
        <label for="role">Select Role:</label>
        <select id="role" name="role" required>
            <?php foreach ($roles as $role): ?>
                <option value="<?= $role->role_id; ?>"><?= $role->role_name; ?></option>
            <?php endforeach; ?>
        </select>

        <label for="question_paper_file">Upload Question Paper:</label>
        <input type="file" id="question_paper_file" name="question_paper_file" accept=".csv" required>
        <div class="info">
            <p><strong>Note:</strong> CSV files are allowed. Maximum file size is 2MB.</p>
        </div>
        <!-- Add other form fields as needed -->

        <button type="submit">Add Question Paper</button>
    </form>
</div>
<?php $this->load->view('footer'); ?>
