<?php

namespace App\Controllers\frontend;
use App\Controllers\BaseController;
use Config\Services;
use Config\Database;

class IndexController extends BaseController
{
  function __construct() { 
    $this->db = Database::connect('default');
    $this->parser = Services::parser();

    $this->viewPage = array(
      'keyword'=>'',
      'data'=>array(),
      'titlePage'=>'Index',
      'locationPage'=>'frontend/pages/index/index'      
    );
  }

  public function index()
  {
    $this->getData();
    return view($this->viewPage['locationPage'], $this->viewPage);
  }

  public function getData(){
    // SELECT (6371 * acos( 
    //   cos( radians(lat2) ) 
    // * cos( radians( lat1 ) ) 
    // * cos( radians( lng1 ) - radians(lng2) ) 
    // + sin( radians(lat2) ) 
    // * sin( radians( lat1 ) )
    //   ) ) as distance 
    $where = "deleted= 0 AND verification = 1 ";
    if($this->request->getVar('keyword')){
      $keyword = $this->request->getVar('keyword');
      $where .= " AND (name LIKE '%".$keyword."%' OR address LIKE '%".$keyword."%' OR address_detail LIKE '%".$keyword."%' )";
      $this->viewPage['keyword'] = $keyword;
    }
    $query = $this->db->query("SELECT * FROM garage WHERE ".$where);
    $data = $query->getResult();
    $this->viewPage['data'] = $data;
  }
}
