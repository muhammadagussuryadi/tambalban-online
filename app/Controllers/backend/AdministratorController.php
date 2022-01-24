<?php

namespace App\Controllers\backend;
use App\Controllers\BaseController;
use Config\Services;
use Config\Database;
use App\Models\UsersModel;

class AdministratorController extends BaseController
{

  protected $usersModel;

  function __construct() { 
    $this->usersModel = new UsersModel();

    // $this->db = Database::connect('default');
    $this->parser = Services::parser();

    $this->viewPage = array(
      'data'=>array(),
      'baseUrl'=>base_url(),
      'titlePage'=>'Administrator',
      'locationPage'=>'backend/pages/administrator/index'      
    );
  }

  public function index()
  {
    $this->viewPage['data'] = $this->usersModel->where('deleted', 0)->where('role_user', 1)->findAll();
    return view($this->viewPage['locationPage'], $this->viewPage);
  }

  public function addData(){
    $id = $this->request->getPost('id');
    $name = $this->request->getPost('name');
    $email = $this->request->getPost('email');
    $username = $this->request->getPost('username');
    $password = hash('sha512', $this->request->getPost('password'));
    if($id){
      $this->usersModel->update($id,[
        'name' => $name,
        'email' => $email,
        'username' => $username,
        'password' => $password,
      ]);
    }else{
      $this->usersModel->insert([
        'name' => $name,
        'email' => $email,
        'username' => $username,
        'password' => $password,
      ]);
    }
    return redirect()->to(base_url('/be/administrator'))->with('success', 'Data berhasil disimpan');
  }

  public function delete($id){
    if($id){
      $this->usersModel->update($id,[
        'deleted' => 1
      ]);
      echo json_encode(array('statusCode'=>200, 'message'=>'success'));
    }else{
      echo json_encode(array('statusCode'=>500, 'content'=>'failed'));
    }
  }

  public function showForm($id = null){
    $user= $this->usersModel->where('id', $id)->first();
    $user['id'] = ($user['id']? : '');
    $user['name'] = ($user['name']? : '');
    $user['email'] = ($user['email']? : '');
    $user['username'] = ($user['username']? : '');
    $user['baseUrl'] = $this->viewPage['baseUrl'];
    $html = $this->parser->setData($user)->render('backend/pages/administrator/component/form');
    echo json_encode(array('statusCode'=>200, 'content'=>$html));
  }
  
}
