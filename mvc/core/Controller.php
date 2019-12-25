<?php
    class Controller{

        // get Model
        function GetModel($model){
            require_once "./mvc/models/".$model.".php";
            return new $model;
        }

        // get View
        function GetView($view, $data=[]){
            require_once "./mvc/views/".$view.".php";
        }
    }
?>