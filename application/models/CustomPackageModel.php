<?php

class CustomPackageModel extends CI_Model {

    public function getAllPlaces() {
        $this->db->select('*');
        $this->db->from('place');
        $result = $this->db->get();
        return $result;
    }

    public function getHotels($placeId, $star) {
        $this->db->select('*');
        $this->db->from('place_hotel_info');
        $this->db->where('place_id', $placeId);
        $this->db->where('hotel_star', $star);
        $result = $this->db->get();
        return $result;
    }

    function getToken() {

        //$this->db->select_max('id');
        // $result = $this->db->get('package_data');
        //$row=$result->result();
        $result = $this->db->query('SELECT * FROM custom_package_data order by id desc limit 1');
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

    function setCustomPackageData($arry) {
        $this->db->insert('custom_package_data', $arry);
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

    function setCustomPackageHotelPlaceData($arry) {
        $this->db->insert_batch('custom_package_place_hotel_data', $arry); 
    }

}
