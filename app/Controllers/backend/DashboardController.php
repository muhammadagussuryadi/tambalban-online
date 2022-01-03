<?php

namespace App\Controllers\backend;
use App\Controllers\BaseController;
use Config\Services;
use Config\Database;

class DashboardController extends BaseController
{
  public function __construct() { 
    // parent::__construct();
    // if(!session()->get('login_session')){
      // return redirect()->route('/index');
      
      // d("masuk");
      
    // }

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
    // return redirect('/', 'refresh');
    // d(session()->get());
    // die();
    return view($this->viewPage['locationPage'], $this->viewPage);
  }

  public function renderContent(){
    $html = $this->parser->render('backend/pages/dashboard/component/progress', $this->viewPage);
    echo $html;
  } 
}
