<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mymodels extends CI_Model {
//     public function getData($tabel){
//         $datanih = $this->db->query("SELECT * FROM ".$tabel);
//         return $datanih->result_array();
//     }

    public function getData($tabel){
        $namrif = $this->db->get($tabel);
        return $namrif->result_array();
    }

    public function enter($tabel, $data){
        $namrif = $this->db->insert($tabel, $data);
        return $namrif;
    }

    public function eraser($tabel, $where){
        $namrif = $this->db->delete($tabel, $where);
        return $namrif;
    }

    public function updater($tabel, $data, $where){
        $namrif = $this->db->update($tabel, $data, $where);
        return $namrif;
    }

    public function specials($tabel, $where){
        $namrif = $this->db->get_where($tabel, $where);
        return $namrif->result_array();
    }
}