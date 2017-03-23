<?php

class PackageModel extends CI_Model {

    public function getPackage($packageId) {
        $this->db->select('*');
        $this->db->from('package_info');
        $this->db->where('id', $packageId);
        $result = $this->db->get();
        return $result->row();
    }

    public function getPlaces($packageId) {
        $this->db->select('*');
        $this->db->from('package_place_info');
        $this->db->where('package_id', $packageId);
        $result = $this->db->get();
        return $result;
    }

    public function getHotels($placeId) {
        $this->db->select('*');
        $this->db->from('place_hotel_info');
        $this->db->where('place_id', $placeId);
        $result = $this->db->get();
        return $result;
    }

    public function getActivities($placeId) {
        $this->db->select('*');
        $this->db->from('place_activity_info');
        $this->db->where('place_id', $placeId);
        $result = $this->db->get();
        return $result;
    }

    public function getHotelStar($placeId, $star) {
        $this->db->select('*');
        $this->db->from('place_hotel_info');
        $this->db->where('place_id', $placeId);
        $this->db->where('hotel_star', $star);
        $result = $this->db->get();
        return $result;
    }

    public function getMapPlaces($packageId) {
        $this->db->select('*');
        $this->db->from('package_place_info');
        $this->db->where('package_id', $packageId);
        $this->db->join('place', 'package_place_info.place_id = place.id');
        $result = $this->db->get();
        return $result;
    }

    public function setPackageData($arry) {
        $this->db->insert('package_data', $arry);
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

    public function setPackageHotelData($arry) {
        $this->db->insert_batch('package_hotel_data', $arry);
    }

    public function getMaxId() {
        $this->db->select_max('id');
        $result = $this->db->get('package_data');
        return $result->result();
    }

    function getToken() {

        //$this->db->select_max('id');
       // $result = $this->db->get('package_data');
        //$row=$result->result();
        $result=$this->db->query('SELECT * FROM package_data order by id desc limit 1');
        $row = $result->result();
        $maxId = 0;
        foreach ($row as $rw){
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
    
    function getPrice($id){
        //todo
        return '100$';
    }

}
