<?php
namespace App\Controllers;
use App\Models\DaftarModel;
class Home extends BaseController
{
	protected $DModel;
	public function __construct()
	{
		$this->DModel = new DaftarModel();
	}

	public function index()
	{
		return view('home/index');
	}

	public function daftar()
	{
		$mod= $this->DModel->findAll();
		$data=[
			'simpan'=>$mod,
		];
		return view('home/daftar',$data);
		// dd($data);
	}

	public function price()
	{
		return view('home/price');
	}

	public function tambah()
	{
		session();
		$tdata=[
			'validation'=> \Config\Services::validation()
		];
		return view('home/tambah',$tdata);
	}

	public function save()
	{
		// validasi input
		if(!$this->validate([
			'nama'=>'required',
			'alamat'=>'required',
			'jumlah'=>'required',
			'email'=>'required',
			'tujuan'=>'required',
			'tanggal'=>'required',
		])){
			$validation=\Config\Services::validation();
			return redirect()->to('/tambah')->withInput()->with('validation',$validation);
			// $data['valid']=$valid
			// return view('/tambah',$data)
		}
		$this->DModel->save([
			'name'=>$this->request->getVar('nama'),
			'address'=>$this->request->getVar('alamat'),
			'number'=>$this->request->getVar('jumlah'),
			'email'=>$this->request->getVar('email'),
			'destination'=>$this->request->getVar('tujuan'),
			'date'=>$this->request->getVar('tanggal'),
		]);
		session()->setFlashdata('pesan','Data berhasil ditambah');
		return redirect()->to('/daftar');
	}

	public function hapus($id)
	{
		$this->DModel->delete($id);
		return redirect()->to('/daftar');
	}
}

