<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {


        public function get_products()
        {  
           $product_id = $this->uri->segment(3);   
            $query = $this->db->get('products');
            return $query->result();
        }
    

       
       
      
       }

 