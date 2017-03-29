<?php

class TourGuideController extends CI_Controller {

    public function index() {
        $this->load->model('TourGuideModel');
        $data["places"] = $this->TourGuideModel->getAllPlaces();
        $this->load->view('tourGuidePage', $data);
    }

    public function getPlaces() {
        $placeNum = $this->input->post('placeNum');
        $placeNumNw = $this->input->post('placeNumNw');

        $this->load->model('TourGuideModel');
        $places = $this->TourGuideModel->getAllPlaces();

        for ($i = $placeNum + 1; $i <= $placeNumNw; $i++) {
            echo '<div class="col-md-6" id="d_' . $i . '">
                                <div class="row" style="margin-top : 20px">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10" style="background: #ffffff; border-radius: 5px">';
            if ($i < 9) {
                echo '<h4 style = "margin-top: 15px;"><b>Place 0' . $i . '</b></h4>';
            } else {
                echo '<h4 style = "margin-top: 15px;"><b>Place ' . $i . '</b></h4>';
            }
            echo '<form role="form">
                                                    <div class="form-group">
                                                        <label for="p_' . $i . '">
                                                            Select place
                                                        </label>
                                                        <select class="form-control" id="p_'.$i.'" onchange="loadMap()">';
            foreach ($places->result() as $row) {
                echo "<option value='$row->id'>$row->name</option>";
            }
            echo'</select>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>    ';
        }
    }

    public function setTourGuideData() {
        //get form data
        $status = $this->input->post('status');
        $email = $this->input->post('email');
        $country = $this->input->post('country');
        $mobile = $this->input->post('mobile');
        $numPersons = $this->input->post('numPersons');
        $numDays = $this->input->post('numDays');
        $numPlaces = $this->input->post('numPlaces');
        //$arrivalDate = $this->input->post('arrivalDate');
        $message = $this->input->post('message');

        //load model
        $this->load->model('TourGuideModel');

        $token = $this->TourGuideModel->getToken(); //get token


        if ($status == '0') {
            $places = $this->input->post('places');

            $arry = array('email' => $email, 'mobile' => $mobile, 'country' => $country, 'num_persons' => $numPersons, 'num_days' => $numDays, 'num_places' => $numPlaces, 'message' => $message, 'type' => 'Y', 'token' => $token);
            $id = $this->TourGuideModel->setTourGuideData($arry);

            $arry1 = array();
            for ($i = 0; $i < sizeof($places); $i++) {
                $dayNo = $i+1;
                $arry2 = array('tour_guide_data_id'=>$id, 'place_id'=>$places[$i],'day_num'=>$dayNo);
                $arry1[] = $arry2;
            }
            
            $this->TourGuideModel->setTourGuidePlaceData($arry1);
            
        } else {

            $arry = array('email' => $email, 'mobile' => $mobile, 'country' => $country, 'num_persons' => $numPersons, 'num_days' => $numDays, 'num_places' => $numPlaces, 'message' => $message, 'type' => 'N', 'token' => $token);
            $id = $this->TourGuideModel->setTourGuideData($arry);
        }

        //send mail
        $message1 = $token;
        $ci = get_instance();
        $ci->load->library('email');
        $ci->email->from('madsavidocs@gmail.com', 'Walk Lanka Travels');
        $ci->email->to($email);
        $ci->email->subject("Test Subject");
        $ci->email->message($message1);
        $ci->email->attach(base_url('public/pdf/company/WalkLankaTravels.pdf'));
        $ci->email->send();
    }
    
    function getMapPlaces(){
        
        $this->load->model('TourGuideModel');
        $placesInfo = $this->TourGuideModel->getMapLocations();
        $loaction = array();
        
        foreach ($placesInfo->result() as $row){
            $temp = array();
            $temp[] = $row->name;
            $temp[] = $row->latitude;
            $temp[] = $row->longitude;
            $temp[] = $row->id;
            $loaction[] = $temp;
        }
        
        echo json_encode($loaction);        
    }

}
