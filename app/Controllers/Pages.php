<?php 

namespace App\Controllers;

class Pages extends BaseController 
{

  public function index()
  {
    $data = [
      'title' => 'Home | UPTD PSRLU Ciparay'
    ];

    return view('pages/home', $data);
  }

  public function layanan1()
  {

    $data = [
      'title' => 'Layanan | Form Pengaduan'
    ];

    return view('pages/layanan1', $data);

  }

}

?>