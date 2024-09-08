<?php
namespace App\Controllers;

use App\Models\BukuModel;

class BukuController extends BaseController {
    public function index() {
        $model = model(BukuModel::class);
        $data = $model->ambilBuku();

        return view('bukuView', $data);
    }
}
?>