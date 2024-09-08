<?php 
    namespace App\Controllers;
    use App\Models\ToDoListModel;

    class ToDoListController extends BaseController {
        public function index(): string {
            $session = session();
            $model = model("ToDoListModel");

            $user = $session->get('username');

            $data = [
                "daftarKegiatan" => $model->where('user', $user)->findAll()
            ];

            return view('/ToDoList/app', $data);
        }

        public function simpan() {
            $session = session();
            helper('form');
            $model = model('ToDoListModel');

            $kegiatan = $this->request->getPost('kegiatan');
            $username = $session->get('username');

            $data = [
                'user' => $username,
                'kegiatan' => $kegiatan
            ];
            $model->save($data);

            return $this->index();
        }

        public function perbarui(): string {
            $uri = $this->request->getUri();
            $idKegiatan = $uri->getSegment(3);

            $model = model('ToDoListModel');

            $data = [
                "status" => "selesai"
            ];

            $model -> update($idKegiatan, $data);

            return $this->index();
        }

        public function hapus(): string {
            $uri = $this->request->getUri();
            $idKegiatan = $uri->getSegment(3);

            $model = model('ToDoListModel');
            $model->delete($idKegiatan);

            return $this->index();
        }
    }
?>