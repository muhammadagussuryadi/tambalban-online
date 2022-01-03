<?php

namespace App\Controllers\backend;
use App\Controllers\BaseController;

class UserPenggunaController extends BaseController
{
  function __construct() { 
    $this->viewPage = array(
      'data'=>array(),
      'titlePage'=>'User Pengguna',
      'locationPage'=>'backend/pages/userPengguna/index'      
    );
  }

  public function index()
  {
    return view($this->viewPage['locationPage'], $this->viewPage);
  }
}
