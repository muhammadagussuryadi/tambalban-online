<?php

namespace App\Controllers\backend;
use App\Controllers\BaseController;
use Config\Services;
use Config\Database;

class DashboardController extends BaseController
{
  public function __construct() { 
    $this->db = Database::connect('default');
    $this->parser = Services::parser();

    $this->viewPage = array(
      'data'=>array(),
      'titlePage'=>'Dashboard',
      'locationPage'=>'backend/pages/dashboard/index'      
    );
  }

  public function index()
  {
    
    return view($this->viewPage['locationPage'], $this->viewPage);
  }

  public function renderContent(){
    if(session()->login_session['role_user'] == 2){
      $allGarage = $this->db->query("SELECT COUNT(id) AS total FROM garage WHERE deleted= 0 AND id_user=".session()->login_session['id']);
      $allGarage = $allGarage->getResult();

      $verifyGarage = $this->db->query("SELECT COUNT(id) AS total FROM garage WHERE deleted= 0 AND verification = 1 AND id_user=".session()->login_session['id']);
      $verifyGarage = $verifyGarage->getResult();
      
      $unverifyGarage = $this->db->query("SELECT COUNT(id) AS total FROM garage WHERE deleted= 0 AND verification = 2 AND id_user=".session()->login_session['id']);
      $unverifyGarage = $unverifyGarage->getResult();

      $this->viewPage['data']['all'] = ($allGarage[0]->total? $allGarage[0]->total : 0);
      $this->viewPage['data']['allPercent'] = ($allGarage[0]->total? round((($allGarage[0]->total/$allGarage[0]->total)*100)) : 0);
      $this->viewPage['data']['allPercentBar'] = ($allGarage[0]->total? round((($allGarage[0]->total/$allGarage[0]->total)*100)) : 0);

      $this->viewPage['data']['verify'] = ($verifyGarage[0]->total? $verifyGarage[0]->total : 0);
      $this->viewPage['data']['verifyPercent'] = ($verifyGarage[0]->total? round((($verifyGarage[0]->total/$allGarage[0]->total)*100)) : 0);;
      $this->viewPage['data']['verifyPercentBar'] = (
        round(($this->viewPage['data']['verify']/$this->viewPage['data']['all'])*100) % 5 
      ? 
        (round(($this->viewPage['data']['verify']/$this->viewPage['data']['all'])*100)) - (round(($this->viewPage['data']['verify']/$this->viewPage['data']['all'])*100) % 5)
      : 
        round(($this->viewPage['data']['verify']/$this->viewPage['data']['all'])*100)
      );

      $this->viewPage['data']['unverify'] = ($unverifyGarage[0]->total?$unverifyGarage[0]->total:0);      
      $this->viewPage['data']['unverifyPercent'] = ($unverifyGarage[0]->total? round((($unverifyGarage[0]->total/$allGarage[0]->total)*100)) :0);
      $this->viewPage['data']['unverifyPercentBar'] = (
        round(($this->viewPage['data']['unverify']/$this->viewPage['data']['all'])*100) % 5 
      ? 
        (round(($this->viewPage['data']['unverify']/$this->viewPage['data']['all'])*100)) - (round(($this->viewPage['data']['unverify']/$this->viewPage['data']['all'])*100) % 5)
      : 
        round(($this->viewPage['data']['unverify']/$this->viewPage['data']['all'])*100)
      );

      $html = $this->parser->setData($this->viewPage['data'])->render('backend/pages/dashboard/component/progress-user');
    }else{

      $allUser = $this->db->query("SELECT COUNT(id) AS total FROM users WHERE deleted=0 AND role_user =2");
      $allUser = $allUser->getResult();

      $allGarage = $this->db->query("SELECT COUNT(id) AS total FROM garage WHERE deleted=0");
      $allGarage = $allGarage->getResult();
      
      $verifyGarage = $this->db->query("SELECT COUNT(id) AS total FROM garage WHERE deleted=0 AND verification = 1 ");
      $verifyGarage = $verifyGarage->getResult();
      
      $unverifyGarage = $this->db->query("SELECT COUNT(id) AS total FROM garage WHERE deleted=0 AND verification = 2 ");
      $unverifyGarage = $unverifyGarage->getResult();

      
      $this->viewPage['data']['users'] = ($allUser[0]->total? $allUser[0]->total : 0);
      $this->viewPage['data']['usersPercent'] = ($allUser[0]->total? round((($allUser[0]->total/$allUser[0]->total)*100)) : 0); 
      
      $this->viewPage['data']['all'] = ($allGarage[0]->total? $allGarage[0]->total : 0);
      $this->viewPage['data']['allPercent'] = ($allGarage[0]->total? round((($allGarage[0]->total/$allGarage[0]->total)*100)) : 0); 
      $this->viewPage['data']['allPercentBar'] = ($allGarage[0]->total? round((($allGarage[0]->total/$allGarage[0]->total)*100)) : 0);

      $this->viewPage['data']['verify'] = ($verifyGarage[0]->total? $verifyGarage[0]->total : 0);
      $this->viewPage['data']['verifyPercent'] = ($verifyGarage[0]->total? round((($verifyGarage[0]->total/$allGarage[0]->total)*100)) : 0);;
      $this->viewPage['data']['verifyPercentBar'] = (
        round(($this->viewPage['data']['verify']/$this->viewPage['data']['all'])*100) % 5 
      ? 
        (round(($this->viewPage['data']['verify']/$this->viewPage['data']['all'])*100)) - (round(($this->viewPage['data']['verify']/$this->viewPage['data']['all'])*100) % 5)
      : 
        round(($this->viewPage['data']['verify']/$this->viewPage['data']['all'])*100)
      );

      $this->viewPage['data']['unverify'] = ($unverifyGarage[0]->total?$unverifyGarage[0]->total:0);      
      $this->viewPage['data']['unverifyPercent'] = ($unverifyGarage[0]->total? round((($unverifyGarage[0]->total/$allGarage[0]->total)*100)) :0);
      $this->viewPage['data']['unverifyPercentBar'] = (
        round(($this->viewPage['data']['unverify']/$this->viewPage['data']['all'])*100) % 5 
      ? 
        (round(($this->viewPage['data']['unverify']/$this->viewPage['data']['all'])*100)) - (round(($this->viewPage['data']['unverify']/$this->viewPage['data']['all'])*100) % 5)
      : 
        round(($this->viewPage['data']['unverify']/$this->viewPage['data']['all'])*100)
      );

      $html = $this->parser->setData($this->viewPage['data'])->render('backend/pages/dashboard/component/progress');
    }
    echo $html;
  } 
}
