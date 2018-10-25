<?php

class Timezone_model extends CI_Model
{
    /**
     * Returns all timezones from database
     * @return Timezones array Array of timezones
     */
    public function get_all()
    {
        return $this->db->from('timezones')->get()->result();
    }

    /**
     * @param $id UUID Returns timezones that belongs to user with UUID provided
     * @return Timezones array Array of timezones
     */
    public function get($id)
    {
        return $this->db->select('timezones.uuid, timezones.name, timezones.city, timezones.differenceGMT, timezones.currentTime, timezones.userId')
            ->from('timezones')
            ->join('users', 'users.id = timezones.userId')
            ->where('users.uuid', $id)
            ->get()
            ->result();
    }

    /**
     * Inserts new Timezone in database
     * @param $data array Timezone data provided by client
     * @param $userUUID UUID UUId of user that is creating timezone
     * @return array Timezone created
     * @throws Exception Validation exception
     */
    public function create($data, $userUUID)
    {
        $data['userId'] = $this->db->select('users.id')->from('users')->where('uuid', $userUUID)->get()->row()->id;

        $this->validate($data, 'insert');

        $data['uuid'] = $this->uuid->generate_uuid();

        $this->db->insert('timezones', $data);

        return $data;
    }

    /**
     * Updates timezone based on data provided
     * @param $data array Timezone data provided by client
     * @param $id UUId of timezone that needs to be updated
     * @return array Timezone that is updated
     * @throws Exception Validation exception
     */
    public function update($data, $id)
    {
        $this->validate($data, 'update', $id);

        $this->db->where('uuid', $id)
            ->update('timezones', $data);
        $data['uuid'] = $id;
        return $data;
    }

    /**
     * Deletes timezone
     * @param $id UUID of timezone that needs to be deleted
     */
    public function delete($id)
    {
        $this->db->delete('timezones', array('uuid' => $id));
    }

    /**
     * Validates timezone data from client for insert/update
     * @param $data array Timezone data
     * @param $action string action (insert/update)
     * @param null $id uuid optional id parameter
     * @throws Exception validation exceptions
     */
    private function validate($data, $action, $id = null)
    {

        if ($data['name'] == '' || $data['city'] == '' || $data['differenceGMT'] == '')
            throw new Exception(Constants::$errorMessages['timezoneFieldsRequired']);

        if (!is_numeric($data['differenceGMT']))
            throw new Exception(Constants::$errorMessages['differenceGMTNotNumeric']);

        $this->db->from('timezones')
            ->where('name', $data['name']);
        if ($action == 'update') {
            $this->db->where('uuid !=', $id);
        }
        $exists = $this->db->get()->row();

        if ($exists) {
            throw new Exception(Constants::$errorMessages['timezoneDuplicateName']);
        }

    }
}