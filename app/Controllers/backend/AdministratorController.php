<?php

namespace App\Controllers\backend;
use App\Controllers\BaseController;

class AdministratorController extends BaseController
{
  function __construct() { 
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
}
