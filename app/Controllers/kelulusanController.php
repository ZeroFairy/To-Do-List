<?php
namespace App\Controllers;
class kelulusanController extends BaseController
{
    public function proses($p = 'kosong')
    {
        $data['nim'] = $_GET['nim'];
        $data['nama'] = $_GET['nama'];
        $data['kelulusan'] = $_GET['kelulusan'];
        return view('status_kelulusan', $data);
    }

    public function input()
    {
        return view('kelulusan');
    }
}
?>
