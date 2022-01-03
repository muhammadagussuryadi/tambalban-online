<?php

namespace App\Controllers;

use Config\Database;

class Auth extends BaseController
{

  public function __construct()
  {
    $this->db = Database::connect('default');
    helper('form');
  }

  public function index()
  {
    return view('login');
  }

  public function verify()
  {
    $username = $this->request->getPost('username');
    $password = hash('sha512', $this->request->getPost('password'));

    $query = $this->db->query("SELECT * FROM users WHERE username='" . $username . "' AND password ='" . $password . "'");
    $user = $query->getResult();
    if($user[0]->username){
      session()->set('login_session',[
        'id' => $user[0]->id,
        'username' => $user[0]->username,
        'name' => $user[0]->name,
        'role_user' => $user[0]->role_user,
        'email' => $user[0]->email,
        'photo' => $user[0]->photo,
      ]);
      return redirect()->to( base_url('/be/dashboard') );
    }else{
      return $this->index();
    }
  }

  public function logout(){
    session()->destroy();
    return redirect()->to(base_url('/login'));
  }

  public function be()
  {

  }

  public function fe()
  {

  }
}
