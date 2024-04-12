<style>
    .option{
        margin-top: 90px;
    }

    label {
    font-weight: bold;
    margin-right: 10px;
    
    }

    select {
    padding: 8px;
    margin-right: 10px;
    }

    .submit {
    padding: 8px 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

    /* admin.css */

    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    /* Fixed header */
    .fixed-header {
        position: sticky;
        top:67px;
        width: 100%;
        background-color: #f4f4f4;
        z-index: 1000;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Adjust content margin to account for fixed header */
    .content-with-fixed-header {
        margin-top: 60px; /* Adjust the height based on your fixed header's height */
    }

    .content {
        text-align: center;
        margin: 20px;
        margin-top: 10px;
    }

    h2 {
        color: #3498db;
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        border: 1px solid #ddd;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-left: auto;
        margin-right: auto;
        overflow-x: auto; /* Enable horizontal scrolling on smaller screens */
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #3498db;
        color: white;
    }

    /* Make table header sticky for smaller screens */
    @media screen and (max-width: 768px) {
        table {
            position: relative;
        }

        th {
            position: sticky;
            top: 0;
            background-color: #3498db;
            color: white;
            z-index: 100;
        }

        th, td {
            padding: 6px;
        }
    }

    tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .table-responsive {
        margin-top: 20px;
    }

    /* Style update and delete buttons */
    .update-button,
    .delete-button {
        padding: 12px 18px;
        font-size: 14px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
        width: 120px;
        display: inline-block;
        margin-bottom: 5px;
        text-decoration: none;
    }

    .update-button {
        color: green;
        border: 1px solid #4caf50;
    }

    .delete-button {
        color: red;
        border: 1px solid #e74c3c;
    }

    .update-button:hover{
        background-color: #45a049; /* Darker green on hover */
        color: #fff;
    }
    .delete-button:hover {
        background-color: #e74c3c;
            color: #fff;
    }

    /* Style pagination links */
    .pagination-links {
        margin-top: 20px;
        text-align: center;
    }

    .pagination-links a {
        display: inline-block;
        padding: 10px 15px;
        text-decoration: none;
        transition: background-color 0.3s, color 0.3s;
        margin: 0 5px;
        border: 1px solid #ddd;
        border-radius: 3px;
    }

    .pagination-links a.active {
        background-color: #4CAF50;
        color: white;
        border: 1px solid #4CAF50;
    }

    .pagination-links a:hover:not(.active) {
        background-color: #ddd;
    }

    /* Mobile responsiveness */
    @media screen and (max-width: 768px) {
        .content {
            text-align: center;
            margin: 20px;
            margin-top: 90px;
        }

        .update-button,
        .delete-button {
            padding: 8px 12px;
            font-size: 12px;
        }

        input[type="text"] {
            width: calc(100% - 16px);
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 4px;
            font-size: 14px;
        }
    }

</style>

<div class="option">
    <form method="post" action="<?php echo base_url('adminView')?>">
        <label for="order">Select Order:</label>
        <select name="order" id="order">
            <option value="asc" <?php if ($order === 'asc') echo 'selected'; ?>>Ascending</option>
            <option value="desc" <?php if ($order === 'desc') echo 'selected'; ?>>Descending</option>
        </select>
        <button class="submit" type="submit">Apply</button>
    </form>
</div>



<div class="content content-with-fixed-header">
    <div class="table-responsive table-container">
        <table class="table table-bordered">
            <thead class="fixed-header">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Qualification</th>
                    <th>Date</th>
                    <th>Score</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($result)) : foreach ($result as $data) : ?>
                    <tr>
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data['name'] ?></td>
                        <td><?php echo $data['mobile'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                        <td><?php echo $data['role'] ?></td>
                        <td><?php echo $data['qualification'] ?></td>
                        <td><?php echo $data['date'] ?></td>
                        <td><?php echo $data['score'] ?></td>
                        <td><?php echo $data['grade'] ?></td>
                        <td>
                            <!-- Add data for the new sub-columns -->
                            1:<?php echo !empty($data['followup_1']) ? $data['followup_1'] : 'No status'; ?><br>
                            2: <?php echo !empty($data['followup_2']) ? $data['followup_2'] : 'No status'; ?><br>
                            3: <?php echo !empty($data['status']) ? $data['status'] : 'No status'; ?>
                        </td>
                        <td>
                            <form action="<?php echo base_url('updateStatus')?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <button type="submit" class="update-button">Update Status</button>
                            </form>
                            <form action="<?php echo base_url('deleteUser')?>" method="post" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <button type="submit" class="delete-button">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; else : ?>
                    <tr>
                        <td colspan="11">No records found in the database!!</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Pagination links -->
    <div class="pagination-links">
    <?php echo $pagination_links; ?>
</div>

</div>


