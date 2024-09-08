<?php 
    namespace App\Controllers;
    use App\Models\AsistenModel;

    class AsistenController extends BaseController {
        public function index(): string {
            $AsistenModel = model(AsistenModel::class);

            $data = [
                "daftarAsisten" => $AsistenModel->getAllAsisten(),
                "judul" => "Pendaftaran Asisten Pratikum"
            ];
            return view('AsistenView', $data);
        }

        public function simpan() {
            helper('form');

            if(!$this->request->is('post')) {
                return view('/asisten/simpan');
            }

            $post = $this->request->getPost(['nim', 'nama', "pratikum", "ipk"]);
            
            $model = model(AsistenModel::class);
            $model->simpan($post);
            return view('/asisten/success');
        }

        public function perbarui(): string {
            helper('form');

            if(!$this->request->is('post')) {
                return view('/asisten/update');
            }

            $nim = $this->request->getPost(['nim']);
            $data = $this->request->getPost(['nama', 'pratikum', "ipk"]);

            $model = model(AsistenModel::class);
            $model->perbarui($nim, $data);
            return view('/asisten/success');
        }

        public function hapus(): string {
            helper('form');

            if(!$this->request->is('post')) {
                return view('/asisten/delete');
            }

            $nim = $this->request->getPost(['nim']);

            $model = model(AsistenModel::class);
            $model->hapus($nim);
            return view('/asisten/success');
        }
    }
?>