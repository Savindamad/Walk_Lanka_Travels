<?php

class TourGuideModel extends CI_Model {

    public function getAllPlaces() {
        $this->db->select('*');
        $this->db->from('place');
        $result = $this->db->get();
        return $result;
    }

    public function getPlace($id) {
        $this->db->select('*');
        $this->db->from('place');
        $this->db->from('id', $id);
        $result = $this->db->get();
        return $result;
    }

    function getToken() {

        //$this->db->select_max('id');
        // $result = $this->db->get('package_data');
        //$row=$result->result();
        $result = $this->db->query('SELECT * FROM tour_guide_data order by id desc limit 1');
        $row = $result->result();
        $maxId = 0;
        foreach ($row as $rw) {
            $maxId = $rw->id;
        }

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 6; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $randomString .=$maxId;
        for ($i = 0; $i < 4; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
