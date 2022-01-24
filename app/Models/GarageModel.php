<?php

namespace App\Models;

use CodeIgniter\Model;

class GarageModel extends Model
{
    protected $table                = 'garage';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['deleted','id_user','name','address','address_detail','latitude','longitude','phone_number','photo1','photo2','photo3','owner','verification','reated_at','updated_at'];
}