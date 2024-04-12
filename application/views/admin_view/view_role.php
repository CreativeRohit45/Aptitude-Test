
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f8f8; /* Set your desired background color */
    }

    .content {
        text-align: center;
        margin: 20px auto; /* Center the content horizontally and provide top margin */
        margin-top: 60px;
        
    }

    h2 {
        color: #333; /* Set your desired text color */
        margin: auto;
    }

    table {
        width: 80%; /* Set the desired width of the table */
        margin-top: 20px;
        background-color: #fff; /* Set your desired table background color */
        margin-left: auto;
        margin-right: auto;
        border-collapse: collapse;
        border: 1px solid #ddd;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #3498db;
        color: white;
    }

    a {
        text-decoration: none;
        padding: 8px 12px;
        border-radius: 4px;
        transition: background-color 0.3s, color 0.3s;
    }

    a:hover {
        opacity: 0.8;
    }

    a.edit {
    
        color: green;
        border: 1px solid #4caf50;
    }

    a.edit:hover {
            background-color: #27ae60;
            color: #fff;
        }

    a.delete {
       
        color: red;
        border: 1px solid #e74c3c;
    }

    a.delete:hover {
            background-color: #e74c3c;
            color: #fff;
        }

    .add-btn {
        display: inline-block;
        margin-top: 5px;
        padding: 12px;
        width: 10%;
        text-align: center;
        text-decoration: none;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: #3498db;
        color: white;
        cursor: pointer;
        box-sizing: border-box;
        transition: background-color 0.3s;
    }

    .add-btn:hover {
        background-color: #2980b9;
    }

    @media screen and (max-width: 768px) {
        .content {
        text-align: center;
        margin: 20px auto; /* Center the content horizontally and provide top margin */
        margin-top: 90px;
    }
        table {
            width: 100%; /* Make the table full-width on smaller screens */
        }

        th, td {
            padding: 8px; /* Reduce padding for table cells on smaller screens */
        }

        .add-btn {
            width: 100%; /* Make the "Add Role" button full-width on smaller screens */
            margin-top: 10px; /* Adjust top margin for the button */
        }
    }
</style>

<div class="content">
    <h2>Roles List</h2>
    <!-- Button to add a new role -->
    <a href="<?php echo base_url('addRole')?>" class="add-btn">Add Role</a>
    <!-- Display roles in a table -->
    <table>
        <thead>
            <tr>
                <th>Role ID</th>
                <th>Role Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($roles as $role): ?>
    <tr>
        <td><?php echo isset($role->role_id) ? $role->role_id : ''; ?></td>
        <td><?php echo isset($role->role_name) ? $role->role_name : ''; ?></td>
        <td>
            <a href="<?php echo base_url('editRole/' . $role->role_id) ?>" class="edit">Edit</a>
            <a href="<?php echo base_url('deleteRole/' . $role->role_id) ?>" class="delete" onclick="return confirm('Are you sure you want to delete this role?')">Delete</a>
        </td>
    </tr>
<?php endforeach; ?>
        </tbody>
    </table>
</div>


