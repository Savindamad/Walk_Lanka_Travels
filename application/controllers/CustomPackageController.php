<?php

class CustomPackageController extends CI_Controller {

    public function index() {
        $this->load->model('CustomPackageModel');
        $data["places"] = $this->CustomPackageModel->getAllPlaces();
        $this->load->view('customPackagePage', $data);
    }

    public function getHotels() {
        $id = $this->input->post('placeId');
        $star = $this->input->post('star');
        $this->load->model('CustomPackageModel');
        $hotels = $this->CustomPackageModel->getHotels($id, $star);

        foreach ($hotels->result() as $row) {
            echo "<option value='$row->hotel_id'>$row->hotel_name</option>";
            //echo "<option value='1'>name</option>";
        }
    }

    public function getHotelsStar() {
        $places = $this->input->post('places');
        $star = $this->input->post('star');

        $this->load->model('CustomPackageModel');
        $hotelsArray = array();

        foreach ($places as $id) {
            $hotels = $this->CustomPackageModel->getHotels($id, $star);
            $hotelString = "";
            foreach ($hotels->result() as $row) {
                $hotelString = $hotelString . "<option value='$row->hotel_id'>$row->hotel_name</option>";
            }
            $hotelsArray[] = $hotelString;
        }

        echo json_encode($hotelsArray);
    }

    public function getPlaceHotels() {
        $id = $this->input->post('placeId');
        $star = $this->input->post('star');
        $this->load->model('CustomPackageModel');
        $hotels = $this->CustomPackageModel->getHotels($id, $star);

        $hotelString = "";
        foreach ($hotels->result() as $row) {
            $hotelString = $hotelString . "<option value='$row->hotel_id'>$row->hotel_name</option>";
        }
        echo $hotelString;
    }

    public function getDayPlaceHotels() {
        $daysPrv = $this->input->post('numDaysPrv');
        $daysAdd = $this->input->post('numDaysAdd');

        $this->load->model('CustomPackageModel');
        $places = $this->CustomPackageModel->getAllPlaces();
        $placeOne = $places->row();
        $hotels = $this->CustomPackageModel->getHotels($placeOne->id, 'TWO');

        for ($i = $daysPrv + 1; $i <= $daysPrv + $daysAdd; $i++) {
            echo '<div class="col-md-6" style="margin-top: 20px; margin-bottom: 20px" id="d_' . $i . '">
                        <div class="row" >
                            <div class="col-md-2"></div>
                            <div class="col-md-10" style="background-color: #ffffff; border-radius: 5px;">
                                <div class="row">
                                    <div style="margin-top: 15px">';
            if ($i > 9) {
                echo "<h4>&nbsp&nbsp<b>Day $i</b></h4>";
            } else {
                echo "<h4>&nbsp&nbsp<b>Day 0$i</b></h4>";
            }
            echo '</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <form role="form">
                                            <div class="form-group">';
            echo "<label for='p_$i'>Select Place</label>
                                                <select class='form-control' id='p_$i' onchange='getPlaceHotels($i)'>";
            foreach ($places->result() as $row) {
                echo "<option value='$row->id'>$row->name</option>";
            }

            echo '</select>
                                            </div>
                                            <div class="form-group">';
            echo "<label for='s_$i'>Hotel star</label>
                                                <select class='form-control' id='s_$i' onchange='getPlaceHotelsStar($i)'>";
            echo '<option value="TWO">Two star</option>
                                                    <option value="THREE">Three star</option>
                                                    <option value="FOUR">Four star</option>
                                                    <option value="FIVE">Five star</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <form role="form">
                                            <div class="form-group">';
            echo "<label for='h_$i'>Select hotel</label>
                                                <select class='form-control' id='h_$i'>";
            foreach ($hotels->result() as $row) {
                echo "<option value='$row->hotel_id'>$row->hotel_name</option>";
            }
            echo '</select>
                                            </div>
                                            <div class="form-group">';
            echo "<label for='r_$i'>Room condition</label>
                                                <select class='form-control' id='r_$i'>";
            echo '<option value="STANDARD">Standard</option>
                                                    <option value="DELUX">Delux</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
        }
    }

    function setCustomPackageData() {
        //get form data
        $status = $this->input->post('status');
        $email = $this->input->post('email');
        $country = $this->input->post('country');
        $mobile = $this->input->post('mobile');
        $numPersons = $this->input->post('numPersons');
        $numDays = $this->input->post('numDays');
        $singleRooms = $this->input->post('singleRooms');
        $doubleRooms = $this->input->post('doubleRooms');
        $tribleRomms = $this->input->post('tribleRomms');
        $arrivalDate = $this->input->post('arrivalDate');
        $message = $this->input->post('message');

        //load model
        $this->load->model('CustomPackageModel');

        $token = $this->CustomPackageModel->getToken(); //get token


        if ($status == '0') {

            $hotels = $this->input->post('hotels');
            $places = $this->input->post('places');
            $rooms = $this->input->post('rooms');

            $arry = array('email' => $email, 'mobile' => $mobile, 'country' => $country, 'num_persons' => $numPersons, 'num_days' => $numDays, 'num_single' => $singleRooms, 'num_double' => $doubleRooms, 'num_thrible' => $tribleRomms, 'arrival_date' => $arrivalDate, 'message' => $message, 'type' => 'Y', 'token' => $token);
            $id = $this->CustomPackageModel->setCustomPackageData($arry);
            $arry1 = array();
            for ($i = 0; $i < sizeof($hotels); $i++) {
                $dayNum = $i + 1;
                $arry2 = array('place_id' => $places[$i], 'hotel_id' => $hotels[$i], 'room_condition' => $rooms[$i], 'day_num' => $dayNum);
                $arry1[] = $arry2;
            }

            $this->CustomPackageModel->setCustomPackageHotelPlaceData($arry1);
        } else {

            $arry = array('email' => $email, 'mobile' => $mobile, 'country' => $country, 'num_persons' => $numPersons, 'num_days' => $numDays, 'num_single' => $singleRooms, 'num_double' => $doubleRooms, 'num_thrible' => $tribleRomms, 'message' => $message, 'type' => 'N', 'token' => $token);
            $id = $this->CustomPackageModel->setCustomPackageData($arry);
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

}
