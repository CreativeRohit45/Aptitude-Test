<?php $this->load->view('header'); ?>
<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f8f8;
    }

    .content {
        text-align: center;
        margin: 20px auto;
        margin-top: 60px;
    }

    h2 {
        color: #3498db;
        margin: auto;
    }

    form {
        width: 25%;
        margin: auto;
        margin-top: 10px;
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

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        transition: border-color 0.3s;
    }

    input:focus {
        border-color: #3498db;
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

        h2 {
        color: #3498db;
        margin: auto;
        margin-bottom: 20px;
        }

        .content {
        text-align: center;
        margin: 20px auto;
        margin-top: 90px;
        }

        form {
            width: 80%; /* Make the form wider on smaller screens */
            margin: auto;
        }

        input {
            width: calc(100% - 20px); /* Adjust input width to fit the form */
        }
    }
</style>

<div class="content">
    <h2>Add New Role</h2>
    <form action="/addRole" method="post">
        <label for="role_id">Role ID:</label>
        <input type="text" id="role_id" name="role_id" required>

        <label for="role_name">Role Name:</label>
        <input type="text" id="role_name" name="role_name" required>

        <button type="submit">Add Role</button>
    </form>
</div>

<?php $this->load->view('footer'); ?>
