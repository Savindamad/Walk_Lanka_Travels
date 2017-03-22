<?php

class PackageDataController extends CI_Controller {

    public function index($token) {
        $this->load->model('PackageDataModel');
        $packageData = $this->PackageDataModel->getPackageData($token);
        $data["packageData"] = $packageData;

        $data["PackageInfo"] = $this->PackageDataModel->getPackageInfo($packageData->package_id);
        $data["hotelInfo"] = $this->PackageDataModel->getPaHotelData($packageData->id);

        $this->load->library('pdf');
        $this->pdf->load_view('packageDataPage', $data);
        $this->pdf->Output();
    }

}
