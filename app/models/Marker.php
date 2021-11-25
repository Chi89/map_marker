<?php
  class Marker {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function get_markers(){
      $this->db->query('SELECT * FROM markers;');

      $results = $this->db->resultSet();
    
      return $results;
    }

    public function save_marker($data){
      $this->db->query('INSERT INTO markers (name, address, lat, lng, type) 
                        VALUES(:name, :address, :lat, :lng, :type)');
      // Bind values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':lat', $data['lat']);
      $this->db->bind(':lng', $data['lng']);
      $this->db->bind(':type', $data['type']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function delete_marker($lat, $lng){
        $this->db->query('DELETE FROM markers WHERE lat = :lat AND lng = :lng');
        // Bind values
        $this->db->bind(':lat', $lat);
        $this->db->bind(':lng', $lng);

        // Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
    }
  }