<?php $this->load->view('header'); ?>

<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        text-align: center;
        margin-top: 90px;
    }

    h2 {
        color: #3498db;
        text-align: center;
    }

    .form-container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    select,
    input {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 4px;
        font-size: 16px;
    }

    button {
        padding: 12px;
        font-size: 16px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
        width: 100%;
    }

    button:hover {
        background-color: #2980b9; /* Change the hover color */
    }

    @media screen and (max-width: 768px) {
        .container {
        text-align: center;
        margin-top: 100px;
    }
        .form-container {
            padding: 15px;
        }

        select,
        input {
            font-size: 14px;
        }

        button {
            font-size: 14px;
        }
    }
</style>

<body>
    <div class="container">
        <h2>Status Update</h2>
        <div class="form-container">
        <form action="/updateStatus" method="post">
            <!-- Use the directly from POST data -->
            <input type="hidden" name="id" value="<?php echo isset($_POST['id']) ? $_POST['id'] : ''; ?>">

            <label for="updateType">Update Type:</label>
            <select id="updateType" name="step">
                <option value="followup_1">FollowUp1</option>
                <option value="followup_2">FollowUp2</option>
                <option value="status">Status</option>
            </select>

            <label for="status">Status:</label>
            <input type="text" id="status" name="status" required>

            <button type="submit">Update</button>
</form>
        </div>
    </div>
    <?php $this->load->view('footer'); ?>

