<?php

class User_model extends CI_Model
{
    /**
     * Returns all Users from database
     * @return array Array of users
     */
    public function get_all()
    {
        return $this->db->select('users.uuid, users.name, users.username, roles.name as role, roles.id as roleId')
            ->from('users')
            ->join('roles', 'roles.id = users.roleId')
            ->get()
            ->result();
    }

    /**
     * Returns single user from database
     * @param $id uuid User uuid
     * @return object user
     */
    public function get($id)
    {
        return $this->db->from('users')
            ->where('uuid', $id)
            ->get()
            ->row();
    }

    /**
     * Returns User based on username and password. Only auth controller is using this method
     * @param $username string User username
     * @param $password string User password
     * @return object User object if found, otherwise null
     */
    public function get_by_credentials($username, $password)
    {

        $res = $this->db->select('users.uuid, users.username, users.password, roles.name as roleName')
            ->from('users')
            ->join('roles', 'roles.id = users.roleId')
            ->where('username', $username)
            ->get()->row();

        if ($res && password_verify($password, $res->password)) {
            return $res;
        } else
            return null;

    }

    /**
     * Inserts new User in database
     * @param $userData array User data provided by client
     * @return array User created
     * @throws Exception Validation exception
     */
    public function create($userData)
    {
        $this->validate($userData, 'insert');

        $userData['password'] = password_hash($userData['password'], PASSWORD_BCRYPT);

        $userData['uuid'] = $this->uuid->generate_uuid();

        $this->db->insert('users', $userData);

        $userData['role'] = $this->getRoleName($userData['roleId']);
        return $userData;
    }

    /**
     * Updates user based on data provided
     * @param $userData array User data provided by client
     * @param $id UUId of User that needs to be updated
     * @return array User that is updated
     * @throws Exception Validation exception
     */
    public function update($userData, $id)
    {
        $this->validate($userData, 'update', $id);

        $this->db->where('uuid', $id)
            ->set('username', $userData['username'])
            ->set('name', $userData['name'])
            ->set('roleId', $userData['roleId']);

        if ($userData['password'] != '')
            $this->db->set('password', password_hash($userData['password'], PASSWORD_BCRYPT));
        $this->db->update('users');

        $userData['role'] = $this->getRoleName($userData['roleId']);
        $userData['uuid'] = $id;
        return $userData;
    }

    /**
     * Deletes user
     * @param $userId UUID of user that needs to be deleted
     * @throws Exception if user tries to delete himself
     */
    public function delete($id, $userId)
    {
        if ($id == $userId)
            throw new Exception(Constants::$errorMessages['deleteYourSelf']);
        $this->db->delete('users', array('uuid' => $id));
    }

    /**
     * Returns role name based on roleId
     * @param $id int role id
     * @return string role name
     */
    private function getRoleName($id)
    {
        return $this->db->select('name')->from('roles')->where('id', $id)->get()->row()->name;
    }

    /**
     * Validates user data from client for insert/update
     * @param $userData array User data
     * @param $action string action (insert/update)
     * @param null $id uuid optional id parameter
     * @throws Exception validation exceptions
     */
    private function validate($userData, $action, $id = null)
    {
        if ($action == 'insert' && (strlen($userData['username']) < 5 || strlen($userData['name']) < 5 || strlen($userData['password']) < 5)) {
            throw new Exception(Constants::$errorMessages['userCreateFieldsRequired']);
        }

        if ($action == 'update' && (strlen($userData['username']) < 5 || strlen($userData['name']) < 5)) {
            throw new Exception(Constants::$errorMessages['userUpdateFieldsRequired']);
        }

        $this->db->from('users')
            ->where('username', $userData['username']);
        if ($action == 'update') {
            $this->db->where('uuid !=', $id);
        }
        $exists = $this->db->get()->row();

        if ($exists)
            throw new Exception(Constants::$errorMessages['userDuplicateUsername']);


    }
}