<?php 
    namespace App\Controllers;
    use App\Models\MahasiswaModel;

    class MahasiswaController extends BaseController {

        public function index(): string {
            $mhsModel = model(MahasiswaModel::class);

            $data = [
                "daftarMhs" => $mhsModel->getAllMahasiswa(),
                "judul" => "Daftar Mahasiswa"
            ];

            return view('mahasiswa_view', $data);
        }

        public function toInputMahasiswa(): string
        {
            return view('mahasiswa_input');
        }

        public function submitMahasiswa(): string
        {
            helper('form');

            $data = $this->request->getPost(['nim', 'nama']);

            $model = model(MahasiswaModel::class);

            $model->simpanMahasiswa($data);

            return view('mahasiswa_input');
        }

        public function updateMahasiswa(): string {
            $nim = "225314087";
            $data = [
                'nim' => '575757',
                'nama' => 'John'
            ];
            $model = model(MahasiswaModel::class);
            $model -> updateMahasiswa($nim, $data);
            return view('update_success');
        }

        public function deleteMahasiswa(): string {
            $nim = "575757";
            $model = model(MahasiswaModel::class);
            $model->deleteMahasiswa($nim);
            return view('delete_success');
        }
    }
?>