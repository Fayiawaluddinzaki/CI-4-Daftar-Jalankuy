<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarModel extends Model
{
	protected $table      = 'daftar';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'address', 'number', 'email','destination','date'];
	
	
	// protected $session;
	// public function ajaxGetData($start,$length)
	// {
	// 	$result =$this->oerderBy('id','asc')
	// 	->findAll($start,$length);

	// 	return $result;
	// }

	// public function ajaxGetDataSearch($search,$start,$length)
	// {
	// 	$result =$this->oerderBy('id','asc')
	// 	->findAll($start,$length);

	// 	return $result;
	// }

	// protected $DBGroup              = 'default';
	// protected $table                = 'daftars';
	// protected $primaryKey           = 'id';
	// protected $useAutoIncrement     = true;
	// protected $insertID             = 0;
	// protected $returnType           = 'array';
	// protected $useSoftDelete        = false;
	// protected $protectFields        = true;
	// protected $allowedFields        = [];

	// // Dates
	// protected $useTimestamps        = false;
	// protected $dateFormat           = 'datetime';
	// protected $createdField         = 'created_at';
	// protected $updatedField         = 'updated_at';
	// protected $deletedField         = 'deleted_at';

	// // Validation
	// protected $validationRules      = [];
	// protected $validationMessages   = [];
	// protected $skipValidation       = false;
	// protected $cleanValidationRules = true;

	// // Callbacks
	// protected $allowCallbacks       = true;
	// protected $beforeInsert         = [];
	// protected $afterInsert          = [];
	// protected $beforeUpdate         = [];
	// protected $afterUpdate          = [];
	// protected $beforeFind           = [];
	// protected $afterFind            = [];
	// protected $beforeDelete         = [];
	// protected $afterDelete          = [];
}
