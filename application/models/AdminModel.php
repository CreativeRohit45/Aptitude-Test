<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

    public function get_All_Roles() {
        // Fetch all roles from the database
        $query = $this->db->get('role');
        return $query->result();
    }

    public function add_Role($data) {
        // Insert the data into the 'roles' table
        $this->db->insert('role', $data);

        // Return the ID of the inserted role
        return $this->db->insert_id();
    }

    public function get_Role($role_id) {
        // Fetch role data from the database based on role_id
        $query = $this->db->get_where('role', array('role_id' => $role_id));
        
        // Check if role data exists
        if ($query->num_rows() > 0) {
            $role = $query->row_array();
    
            // Make sure 'role_name' key is always set, even if it's empty
            if (!isset($role['role_name'])) {
                $role['role_name'] = '';
            }
    
            return $role;
        }
    
        return false;  // Return false if role data not found
    }

    public function delete_Role($role_id) {
        // Perform the deletion based on the role_id
        $this->db->where('role_id', $role_id);
        $this->db->delete('role');
    
        // Check the affected rows to determine if the deletion was successful
        return $this->db->affected_rows() > 0;
    }

    public function update_Role($role_id, $data) {
        // Update the role based on the role_id
        $this->db->where('role_id', $role_id);
        $this->db->update('role', $data);
    
        // Check the affected rows to determine if the update was successful
        return $this->db->affected_rows() > 0;
    }
    
    // In your AdminModel
    public function get_RoleNameById($role_id) {
        // Replace 'roles' with the actual table name where you store your roles
        $query = $this->db->get_where('role', array('role_id' => $role_id));

        // Assuming you have a column named 'role_name'
        return $query->row();
    }


    public function get_AdminByCredentials($admin_name, $admin_password) {
        // Example query to check admin credentials in the database
        $this->db->where('admin_name', $admin_name);
        $this->db->where('admin_pass', $admin_password); // Assuming you store plain text passwords
    
        $query = $this->db->get('admin'); // 'admin' should be replaced with your actual table name
    
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }    

    public function get_AllUserData($limit, $offset) {
        $this->db->limit($limit, $offset);
        $query = $this->db->get('user'); // Replace 'your_table_name' with your actual table name
        return $query->result_array();
    }
    
    public function count_AllUserData() {
        return $this->db->count_all('user'); // Replace 'your_table_name' with your actual table name
    }   

    public function update_Status($id, $status, $step) {
        switch ($step) {
            case 'followup_1':
                $this->db->set('followup_1', $status);
                break;
            case 'followup_2':
                $this->db->set('followup_2', $status);
                break;
            case 'status':
                $this->db->set('status', $status);
                break;
            default:
                // Handle default case if needed
                break;
        }

        $this->db->where('id', $id);
        $this->db->update('user');
    }
    
    public function delete_UserById($id) {
        $this->db->where('id', $id);
        $this->db->delete('user'); // Replace 'your_table_name' with the actual table name
    }
    
    public function fetch($limit, $offset, $order) {
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', $order);
        $query = $this->db->get('user');
        return $query->result_array();
    }
   
}

?>