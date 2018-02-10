<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* 
 * This class contain of viewer that used on URL
 * author : Parama Fadli Kurnia
 */

class Dashboard extends CI_Controller {
    /* put your code here */

    // constructor
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('functional');
    }

    function get_url() {
        $uri = array();
        $uri["enc_email"] = ($this->uri->segment(3) ? $this->uri->segment(3) : "NULL");
        $uri["group"] = ($this->uri->segment(4) ? $this->uri->segment(4) : "0");
        return $uri;
    }
    
    function donasi() {
        $data = array();
        $data["email"] = "";
        $data["password"] = "";
        $data["status"] = "Sign In";
        $data["title"] = "Dashboard";
        $data["title_table"] = "Detail Donasi";
        $data["name"] = "justease Admin";
        $data["username"] = "@justeaseAdmin";
        $data["id_user"] = "88888888";
        $data["active_menu"] = "donasi";
        $data["campaign"] = number_format("12345678", 0, '.', ',');
        $data["donasi"] = number_format("5678", 0, '.', ',');
        
        $json = '[{"campaign":"Nenek Minah","donasi":"12000","tanggal":"2018-02-10","status":"pending"},
                {"campaign":"Penggusuran Rusun","donasi":"100000","tanggal":"2018-01-10","status":"done"},
                {"campaign":"Apartement Kalibata","donasi":"1250000","tanggal":"2017-12-15","status":"done"},
                {"campaign":"Kisruh Lahan","donasi":"3500000","tanggal":"2016-10-09","status":"done"},
                {"campaign":"Apartemen Pramuka","donasi":"100000","tanggal":"2018-01-10","status":"cancel"},
                {"campaign":"TKI Hongkong","donasi":"15000","tanggal":"2018-01-01","status":"done"},
                {"campaign":"Relokasi Pabrik","donasi":"700000","tanggal":"2017-08-05","status":"done"},
                {"campaign":"Penggusuran Rusun","donasi":"1000000","tanggal":"2015-01-10","status":"done"},
                {"campaign":"Tunggakan Gaji Buruh","donasi":"1000000","tanggal":"2018-07-17","status":"done"},
                {"campaign":"Aksi Rohingnya","donasi":"1000000","tanggal":"2018-07-17","status":"done"},
                {"campaign":"Nenek Digugat","donasi":"270000","tanggal":"2017-11-10","status":"cancel"}]';
        $json_result = json_decode($json, true);
        $data['json_result'] = $json_result;
        $this->load->view("dashboard/main/board_view", $data);
    }
    
}

?>