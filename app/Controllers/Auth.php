<?php

namespace App\Controllers;

use Config\Database;
use App\Models\UsersModel;

class Auth extends BaseController
{
  // protected $format    = 'json';
  public function __construct()
  {
    $this->usersModel = new UsersModel();
    $this->db = Database::connect('default');
    helper('form');
  }

  public function index()
  {
    if(session()->login_session['id']){
      return redirect()->to(base_url('/be/dashboard'));
    }
    return view('login');
  }

  public function verify()
  {
    $username = $this->request->getPost('username');
    $password = hash('sha512', $this->request->getPost('password'));

    $query = $this->db->query("SELECT * FROM users WHERE (username='" . $username . "' OR email='" . $username . "' ) AND password ='" . $password . "'");
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

  public function verifyGoogle()
  {
    if ($this->request->isAJAX()) {
      $email = service('request')->getPost('email');
      $name = service('request')->getPost('name');
      $photo = service('request')->getPost('photo');
      $username = explode("@",$email);
      
      $query = $this->selectUser($email);
      $user = $query->getResult();
      if($user[0]->email){
        session()->set('login_session',[
          'id' => $user[0]->id,
          'username' => $user[0]->username,
          'name' => $user[0]->name,
          'role_user' => $user[0]->role_user,
          'email' => $user[0]->email,
          'photo' => $user[0]->photo,
        ]);
        echo json_encode(array("statusCode"=>200, "message"=>"Berhasil Login")); 
      }else{
        $this->usersModel->insert([
          'name' => $name,
          'email' => $email,
          'username' => $username[0],
          'photo'=> $photo,
          'role_user'=>2,
        ]);
        $query = $this->selectUser($email);
        $user = $query->getResult();
        if($user[0]->email){
          session()->set('login_session',[
            'id' => $user[0]->id,
            'username' => $user[0]->username,
            'name' => $user[0]->name,
            'role_user' => $user[0]->role_user,
            'email' => $user[0]->email,
            'photo' => $user[0]->photo,
          ]);
          echo json_encode(array("statusCode"=>200, "message"=>"Berhasil Login")); 
        }
      }
    }else{
      echo json_encode(array("statusCode"=>401,"message"=>"gagal login"));
    }
  }

  private function selectUser($email){
    $query = $this->db->query("SELECT * FROM users WHERE deleted = 0 AND email='" . $email . "' AND role_user=2");
    return $query;
  }

  public function logout(){
    session()->destroy();
    clearstatcache();
    return redirect()->to(base_url('/login'));
  }

}
