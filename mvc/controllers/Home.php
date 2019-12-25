<?php
    class Home extends Controller{

        public function SayHi(){
            echo "Home -- SayHi";
        }
        public function ShowSV(){
            // goi model
            $a = $this->GetModel("SinhVienModel");
            $sv = $a->GetSv();

            // goi view
            $a = $this->GetView("home",[
                "page"=>"new",
                "sinhvien"=>$sv
                ]);
        }
    }
?>