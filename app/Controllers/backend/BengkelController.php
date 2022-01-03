<?php

namespace App\Controllers\backend;
use App\Controllers\BaseController;

class BengkelController extends BaseController
{
  function __construct() { 
    $this->viewPage = array(
      'data'=>array(),
      'titlePage'=>'Bengkel',
      'locationPage'=>'backend/pages/bengkel/index'      
    );
  }

  public function index()
  {
    return view($this->viewPage['locationPage'], $this->viewPage);
  }
}
