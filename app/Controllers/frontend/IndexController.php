<?php

namespace App\Controllers\frontend;
use App\Controllers\BaseController;
use Config\Services;
use Config\Database;

class IndexController extends BaseController
{
  function __construct() { 
    $this->db = Database::connect('default');
    $this->parser = Services::parser();

    $this->viewPage = array(
      'data'=>array(),
      'titlePage'=>'Index',
      'locationPage'=>'frontend/pages/index/index'      
    );
  }

  public function index()
  {
    $this->getData();
    return view($this->viewPage['locationPage'], $this->viewPage);
  }

  public function getData(){
    $query = $this->db->query("SELECT * FROM garage");
    $data = $query->getResult();
    $this->viewPage['data'] = $data;
  }
}
