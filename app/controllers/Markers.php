<?php
  class Markers extends Controller {
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      $this->marker_model = $this->model('Marker');
      $this->user_model = $this->model('User');
    }

    public function index(){
      $this->view('markers/index');
    }

    public function get_markers(){
        // Get locations
        $markers = $this->marker_model->get_markers();

        //Create a new DOMDocument object
        $dom = new DOMDocument("1.0");
        $node = $dom->createElement("markers"); //Create new element node
        $parnode = $dom->appendChild($node); //make the node show up 
  
  
        if (!$markers) {  
          header('HTTP/1.1 500 Error: Could not get markers!'); 
          exit();
        } 
  
        //set document header to text/xml
        header("Content-type: text/xml"); 
  
        // Iterate through the rows, adding XML nodes for each
        foreach($markers as $marker){
          $node = $dom->createElement("marker");  
          $newnode = $parnode->appendChild($node);   
          $newnode->setAttribute("name",$marker->name);
          $newnode->setAttribute("address", $marker->address);  
          $newnode->setAttribute("lat", $marker->lat);  
          $newnode->setAttribute("lng", $marker->lng);  
          $newnode->setAttribute("type", $marker->type);	
        }
        
        exit($dom->saveXML());
    }

    public function add(){

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

         $m_lat_lang	= explode(',',$_POST["latlang"]);


        $data = [
          'name' => $_POST["name"],
          'address' => $_POST["address"],
          'lat' => $m_lat_lang[0],
          'lng' => $m_lat_lang[1],
          'type' => $_POST["type"]
        ];

        if ($this->marker_model->save_marker($data)){
             exit('<h1 class="marker-heading">'. $data['name'] .'</h1><p>'. $data['address'] .'</p>');
        }
      }
    }

    public function delete(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){     
        
        $m_lat_lng	= explode(',',$_POST["latlang"]);
        $lat 	= filter_var($m_lat_lng[0], FILTER_VALIDATE_FLOAT);
        $lng 	= filter_var($m_lat_lng[1], FILTER_VALIDATE_FLOAT);

        if($this->marker_model->delete_marker($lat, $lng)){
            exit("Done!");
        }
      }
    }
  }