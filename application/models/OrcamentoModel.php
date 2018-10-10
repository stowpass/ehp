<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrcamentoModel extends CI_Model {
     function __construct(){
        parent::__construct();
    }
    
     public function salvar()
    {
 
            foreach(array_keys($_POST) as $chave){
                eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
            }
            
            return $this->db->insert('clientes', $this);

    }
}