<?php

namespace App\Controllers\backend;
use App\Controllers\BaseController;
use Config\Services;
use Config\Database;

class AdministratorController extends BaseController
{
  function __construct() { 
    $this->db = Database::connect('default');
    $this->parser = Services::parser();

    $this->viewPage = array(
      'data'=>array(),
      'titlePage'=>'Administrator',
      'locationPage'=>'backend/pages/administrator/index'      
    );
  }

  public function index()
  {
    return view($this->viewPage['locationPage'], $this->viewPage);
  }

  public function addData(){
    $name = $this->request->getPost('name');
    $email = $this->request->getPost('email');
    $username = $this->request->getPost('username');
    $password = hash('sha512', $this->request->getPost('password'));
  }

  public function showForm($id = null){
    $html = $this->parser->render('backend/pages/administrator/component/form', $this->viewPage);
    echo json_encode(array('statusCode'=>200, 'content'=>$html));
  }
  
}
