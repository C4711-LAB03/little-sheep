<?php

/**
 * The Images class holds functions related to the construction and retrieval of
 * Images for the Web site
 */
class Images extends CI_Model {
    
    /**
     * Constructor to create an Images class based on the Code igniter model
     * Class.
     */
    function __construct() {
        parent::__construct();
    }
    
    // Return all images, descending order by post date.
    function all()
    {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('images');
        return $query->result_array();
    }
    
    // Return just the 3 newst images.
    function newest()
    {
        $this->db->order_by("id", "desc");
        $this->db->limit(3);
        $query = $this->db->get('images');
        return $query->result_array();
    }
}
