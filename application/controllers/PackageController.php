<?php

class PackageController extends CI_Controller {

    public function index($param) {
        $this->load->model('PackageModel');
        $data["package"] = $this->PackageModel->getPackage($param);
        $places = $this->PackageModel->getPlaces($param);
        $placeInfo = array();
        foreach ($places->result() as $row) {
            $placeInfoTemp = array();
            $hotels = $this->PackageModel->getHotelStar($row->place_id, "TWO");
            $activities = $this->PackageModel->getActivities($row->place_id);
            //$placeInfoTemp["place"] = array('id'=>$row->id, 'name'=>$row->place_name);
            $placeInfoTemp["place"] = $row;
            $placeInfoTemp["hotels"] = $hotels;
            $placeInfoTemp["activities"] = $activities;
            $placeInfo[] = $placeInfoTemp;
        }
        $data["places"] = $placeInfo;
        $this->load->view('packagePage', $data);
    }

    public function getHotelInfo() {
        $id = $this->input->post('packageId');
        $star = $this->input->post('star');

        $this->load->model('PackageModel');
        $places = $this->PackageModel->getPlaces($id);
        $hotelInfo = array();
        $i = 0;
        foreach ($places->result() as $row) {
            $i++;
            $temp = array();
            $hotels = $this->PackageModel->getHotelStar($row->place_id, $star);
            $hotelHtml = "";
            $roomHtml = "";
            foreach ($hotels->result() as $row) {
                $hotelHtml = $hotelHtml . "<option value='$row->hotel_id'>$row->hotel_name</option>";
            }
            if ($star == 'FIVE') {
                $roomHtml = "<option value='STANDARD'>Standard</option>"
                        . "<option value='DELUX'>Delux</option>"
                        . "<option value='SWEET'>Sweet</option>";
            } else {
                $roomHtml = "<option value='STANDARD'>Standard</option>"
                        . "<option value='DELUX'>Delux</option>";
            }
            $temp["h_id"] = 'h_' . $row->place_id . '_' . $i;
            $temp["r_id"] = 'r_' . $row->place_id . '_' . $i;
            $temp["s_id"] = 's_' . $row->place_id . '_' . $i;
            $temp["hotels"] = $hotelHtml;
            $temp["rooms"] = $roomHtml;
            $hotelInfo[] = $temp;
        }
        echo json_encode($hotelInfo);
    }

    public function getHotelPlaceInfo() {
        $id = $this->input->post('placeId');
        $star = $this->input->post('star');

        $this->load->model('PackageModel');
        $hotels = $this->PackageModel->getHotelStar($id, $star);

        $hotelInfo = array();
        $temp = array();
        $hotelHtml = "";
        $roomHtml = "";
        foreach ($hotels->result() as $row) {
            $hotelHtml = $hotelHtml . "<option value='$row->hotel_id'>$row->hotel_name</option>";
        }

        if ($star == 'FIVE') {
            $roomHtml = "<option value='STANDARD'>Standard</option>"
                    . "<option value='DELUX'>Delux</option>"
                    . "<option value='SWEET'>Sweet</option>";
        } else {
            $roomHtml = "<option value='STANDARD'>Standard</option>"
                    . "<option value='DELUX'>Delux</option>";
        }
        $temp["hotels"] = $hotelHtml;
        $temp["rooms"] = $roomHtml;

        $hotelInfo = array();
        $hotelInfo[] = $temp;
        echo json_encode($hotelInfo);
    }

    public function getMapPlaces() {
        $id = $this->input->post('packageId');

        $this->load->model('PackageModel');
        $places = $this->PackageModel->getMapPlaces($id);
        $mapPlaces = array();
        foreach ($places->result() as $row) {
            $temp = array();

            $temp[] = $row->name;
            $temp[] = $row->latitude;
            $temp[] = $row->longitude;
            $temp[] = $row->place_id;
            $mapPlaces[] = $temp;
        }
        echo json_encode($mapPlaces);
    }

    public function getAllPlacesId() {
        $id = $this->input->post('packageId');
        $this->load->model('PackageModel');
        $places = $this->PackageModel->getPlaces($id);

        $placesArray = array();
        foreach ($places->result() as $row) {
            $placesArray[] = $row->place_id;
        }
        echo json_encode($placesArray);
    }

    public function setPackageData() {
        $email = $this->input->post('email');
        $packageId = $this->input->post('packageId');
        $country = $this->input->post('country');
        $mobile = $this->input->post('mobile');
        $numPersons = $this->input->post('numPersons');
        $singleRooms = $this->input->post('singleRooms');
        $doubleRooms = $this->input->post('doubleRooms');
        $tribleRomms = $this->input->post('tribleRomms');
        $hotelInfo = $this->input->post('hotelInfo');
        $placesInfo = $this->input->post('placesInfo');
        $roomCodition = $this->input->post('roomCodition');
        
        $arry = array('package_id'=>$packageId,'email'=>$email,'mobile'=>$mobile,'num_persons'=>$numPersons,'num_single'=>$singleRooms,'num_double'=>$doubleRooms,'num_thrible'=>$tribleRomms);
        
        $this->load->model('PackageModel');
        $id = $this->PackageModel->setPackageData($arry);
        
        $places = $this->PackageModel->getPlaces($packageId);
        $hotelData = array();
        $i=0;
        foreach ($places->result() as $row){
            echo "$packageId $id $hotelInfo[$i] $row->num_days $row->place_id $roomCodition[$i]";
            $hotelData1 = array('package_id'=>$packageId,'package_data_id'=>$id,'hotel_id'=>$hotelInfo[$i],'num_days'=>$row->num_days,'place_id'=>$row->place_id,'room_condition'=>$roomCodition[$i]);
            $i++;
            $this->PackageModel->setPackageHotelData($hotelData1);
        }
        
    }

}
