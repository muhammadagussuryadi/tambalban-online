<?php

namespace App\Controllers\backend;
use App\Controllers\BaseController;
use Config\Services;
use Config\Database;

class BengkelController extends BaseController
{
  function __construct() { 
    $this->db = Database::connect('default');
    $this->parser = Services::parser();

    $this->viewPage = array(
      'data'=>array(),
      'baseUrl'=>base_url(),
      'googleKey'=>'AIzaSyCx_nnGJrQPfZSkW7FChI9nYX_v2Vhk830',
      'titlePage'=>'Bengkel',
      'locationPage'=>'backend/pages/bengkel/index'      
    );
  }

  public function index()
  {
    return view($this->viewPage['locationPage'], $this->viewPage);
  }

  public function showForm($id = null){
    $html = $this->parser->setData($this->viewPage)->render('backend/pages/bengkel/component/form');
    echo json_encode(array('statusCode'=>200, 'content'=>$html));
  }
}
