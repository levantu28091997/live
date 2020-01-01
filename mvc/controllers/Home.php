<?php
    class Home extends Controller{

        public $ModelSV;
        public $ModelDM;

        public function __construct(){
            $this->ModelSV = $this->GetModel("SinhVienModel");
            $this->ModelDM = $this->GetModel("DanhMucModel");
        }

        public function SayHi(){
            $this->GetView("layout1");
        }
        public function ShowSV(){
            // goi model
            $sv = $this->ModelSV->GetSv();

            // goi view
            $a = $this->GetView("home",[
                "page"=>"new",
                "sinhvien"=>$sv
                ]);
        }
        public function GetDanhMuc(){
            //goi view
            $this->GetView("home", [
                "page"=>"contact",
                "danh" => $this->ModelDM->GetDanhMuc()
            ]);
        }
    }
?>