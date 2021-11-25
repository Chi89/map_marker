<?php
  class Pages extends Controller {

    public function __construct(){
     
    }
    
    public function index(){
        redirect('markers');
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'This app enables the user to pin location on google maps.'
      ];

      $this->view('pages/about', $data);
    }
  }