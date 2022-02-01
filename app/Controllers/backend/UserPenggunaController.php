<?php

namespace App\Controllers\backend;
use App\Controllers\BaseController;
use App\Models\UsersModel;

class UserPenggunaController extends BaseController
{
  
  protected $usersModel;

  function __construct() { 
    $this->usersModel = new UsersModel();
    
    $this->viewPage = array(
      'data'=>array(),
      'titlePage'=>'User Pengguna',
      'locationPage'=>'backend/pages/userPengguna/index'      
    );
  }

  public function index()
  {
    $this->viewPage['data'] = $this->usersModel->where('deleted', 0)->where('role_user', 2)->findAll();
    return view($this->viewPage['locationPage'], $this->viewPage);
  }
}
