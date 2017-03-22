<?php

class PackageDataModel extends CI_Model {

    function getPackageData($token) {
        $this->db->select('*');
        $this->db->from('package_data');
        $this->db->where('token', $token);
        $result = $this->db->get();
        return $result->row();
    }

    function getPackageInfo($id) {
        $this->db->select('*');
        $this->db->from('package_place_info');
        $this->db->where('package_id', $id);
        $result = $this->db->get();
        return $result->result();
    }

    function getPaHotelData($id) {
        $this->db->select('*');
        $this->db->from('package_hotel_data');
        $this->db->where('package_hotel_data.package_data_id', $id);
        $this->db->join('hotel', 'package_hotel_data.hotel_id = hotel.id');
        $result = $this->db->get();
        return $result->result();
    }

}
