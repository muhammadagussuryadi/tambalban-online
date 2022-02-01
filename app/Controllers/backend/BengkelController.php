<?php

namespace App\Controllers\backend;
use App\Controllers\BaseController;
use Config\Services;
use Config\Database;
use App\Models\GarageModel;

class BengkelController extends BaseController
{

  protected $GarageModel;

  function __construct() { 
    $this->garageModel = new GarageModel();

    // $this->db = Database::connect('default');
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
    if(session()->login_session['role_user'] == 2){
      $this->viewPage['data'] = $this->garageModel->where('deleted', 0)->where('id_user',session()->login_session['id'])->orderBy('id','desc')->findAll();
    }else{
      $this->viewPage['data'] = $this->garageModel->where('deleted', 0)->orderBy('id','desc')->findAll();
    }
    return view($this->viewPage['locationPage'], $this->viewPage);
  }

  public function addData(){
    $id = $this->request->getPost('id');
    $photo1 = $this->request->getFile('photo1');
    if($photo1->getName()){
      $photo1->move(WRITEPATH . '../public/assets/images/');
    }
    $photo2 = $this->request->getFile('photo2');
    if($photo2->getName()){
      $photo2->move(WRITEPATH . '../public/assets/images/');
    }
    $photo3 = $this->request->getFile('photo3');
    if($photo3->getName()){
      $photo3->move(WRITEPATH . '../public/assets/images/');
    }
    if($id){
      $dataPost = [
        'name' => $this->request->getPost('name'),
        'address' => $this->request->getPost('address'),
        'address_detail' => $this->request->getPost('address_detail'),
        'latitude' => $this->request->getPost('latitude'),
        'longitude' => $this->request->getPost('longitude'),
        'phone_number' => $this->request->getPost('phone_number'),
        'photo1' => ($photo1->getName()?$photo1->getName(): $this->request->getPost('photo1Txt')),
        'photo2' => ($photo2->getName()?$photo2->getName(): $this->request->getPost('photo2Txt')),
        'photo3' => ($photo3->getName()?$photo3->getName(): $this->request->getPost('photo3Txt')),
        'owner' => $this->request->getPost('owner'),
        'status' => $this->request->getPost('status')
      ];
      $this->garageModel->update($id,$dataPost);
    }else{
      $dataPost = [
        'id_user' => session()->login_session['id'],
        'name' => $this->request->getPost('name'),
        'address' => $this->request->getPost('address'),
        'address_detail' => $this->request->getPost('address_detail'),
        'latitude' => $this->request->getPost('latitude'),
        'longitude' => $this->request->getPost('longitude'),
        'phone_number' => $this->request->getPost('phone_number'),
        'photo1' => ($photo1->getName()?$photo1->getName(): $this->request->getPost('photo1Txt')),
        'photo2' => ($photo2->getName()?$photo2->getName(): $this->request->getPost('photo2Txt')),
        'photo3' => ($photo3->getName()?$photo3->getName(): $this->request->getPost('photo3Txt')),
        'owner' => $this->request->getPost('owner'),
        'status' => $this->request->getPost('status')
      ];
      $this->garageModel->insert($dataPost);
    }
    return redirect()->to(base_url('/be/bengkel'))->with('success', 'Data berhasil disimpan');
  }

  public function verificationData(){
    $id = $this->request->getPost('id');
    if($id){
      $dataPost = [
        'verification' => $this->request->getPost('verification'),
        'verification_note' => $this->request->getPost('verification_note'),
      ];
      $this->garageModel->update($id,$dataPost);
      return redirect()->to(base_url('/be/bengkel'))->with('success', 'Data berhasil disimpan');
    }else{
      return redirect()->to(base_url('/be/bengkel'))->with('failed', 'Data gagal disimpan');
    }
  }

  public function delete($id){
    if($id){
      $this->garageModel->update($id,[
        'deleted' => 1
      ]);
      echo json_encode(array('statusCode'=>200, 'message'=>'success'));
    }else{
      echo json_encode(array('statusCode'=>500, 'content'=>'failed'));
    }
  }

  public function showForm($id = null){
    $data= $this->garageModel->where('id', $id)->first();
    $data['id'] = ($data['id']? : '');
    $data['name'] = ($data['name']? : '');
    $data['address'] = ($data['address']? : '');
    $data['address_detail'] = ($data['address_detail']? : '');
    $data['latitude'] = ($data['latitude']? : '');
    $data['longitude'] = ($data['longitude']? : '');
    $data['phone_number'] = ($data['phone_number']? : '');
    $data['photo1'] = ($data['photo1']? : '');
    $data['photo1Show'] = ($data['photo1'] ?  '<span><a class="mt-1 btn btn-sm btn-info" href="'.$this->viewPage['baseUrl'].'/assets/images/'.$data['photo1'].'" target="_blank">Lihat Foto</a></span>': '');
    $data['photo2'] = ($data['photo2']? : '');
    $data['photo2Show'] = ($data['photo2'] ?  '<span><a class="mt-1 btn btn-sm btn-info" href="'.$this->viewPage['baseUrl'].'/assets/images/'.$data['photo2'].'" target="_blank">Lihat Foto</a></span>': '');
    $data['photo3'] = ($data['photo3']? : '');
    $data['photo3Show'] = ($data['photo3'] ?  '<span><a class="mt-1 btn btn-sm btn-info" href="'.$this->viewPage['baseUrl'].'/assets/images/'.$data['photo3'].'" target="_blank">Lihat Foto</a></span>': '');
    $data['owner'] = ($data['owner']? : '');
    $data['status'] = ($data['status']? : '');
    $data['baseUrl'] = $this->viewPage['baseUrl'];
    $data['googleKey'] = $this->viewPage['googleKey'];
    $html = $this->parser->setData($data)->render('backend/pages/bengkel/component/form');
    echo json_encode(array('statusCode'=>200, 'content'=>$html));
  }
  public function showFormVerification($id = null){
    $data= $this->garageModel->where('id', $id)->first();
    $data['id'] = ($data['id']? : '');
    $data['verification'] = ($data['verification']? : '');
    $data['verification_note'] = ($data['verification_note']? : '');
    $data['baseUrl'] = $this->viewPage['baseUrl'];
    $html = $this->parser->setData($data)->render('backend/pages/bengkel/component/formVerification');
    echo json_encode(array('statusCode'=>200, 'content'=>$html));
  }
}
