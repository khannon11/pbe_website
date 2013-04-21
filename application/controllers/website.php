<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Website extends CI_Controller {

  public function index(){
  	$this->load->library("assets");
    $this->load->view("site_header");
    $this->load->view("content_home");
    $this->load->view("site_footer");
  }

  public function news(){
  	$this->load->library("assets");
    $this->load->view("site_header");
    $this->load->view("content_news");
    $this->load->view("site_footer");
  }

  public function house(){
  	$this->load->library("assets");
    $this->load->view("site_header");
    $this->load->view("content_house");
    $this->load->view("site_footer");
  }

  public function rush(){
  	$this->load->library("assets");
    $this->load->view("site_header");
    $this->load->view("content_rush");
    $this->load->view("site_footer");
  }

  public function history(){
  	$this->load->library("assets");
    $this->load->view("site_header");
    $this->load->view("content_history");
    $this->load->view("site_footer");
  }
  
  public function brothers(){
  	$data['name'] = $this->uri->segment(3); 
	$this->load->model("get_brotherinfo");

  	if ($data['name'] != NULL){
  		$data['results'] = $this->get_brotherinfo->getInfo($data['name']);
  	}
  	else {
  		$data['results'] = $this->get_brotherinfo->getList();
  	}
  	
  	
  	$this->load->library("assets");
    $this->load->view("site_header");
    $this->load->view("content_brothers", $data);
    $this->load->view("site_footer");
  }


  public function about(){
    $this->load->view();
  }
}