<?php

namespace App\Controllers\frontend;
use App\Controllers\BaseController;

class DetailController extends BaseController
{
  function __construct() { 
    $this->viewPage = array(
      'data'=>array(),
      'titlePage'=>'Detail',
      'locationPage'=>'frontend/pages/detail/index'      
    );
  }

  public function index()
  {
    return view($this->viewPage['locationPage'], $this->viewPage);
  }
}
