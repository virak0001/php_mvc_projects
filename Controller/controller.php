<?php
    $data = array();
    fixible_function($data);
    function fixible_function(&$data) {
        $function = "view";
        if (isset($_GET['action'])) {
            $function = $_GET['action'];
        }
        $function($data);
    }
    function view(&$data) {
        $data['student_data']=get_data();
        $data['page']="Test/view";
    }

?>