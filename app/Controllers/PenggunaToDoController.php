<?php 
    namespace App\Controllers;
    use App\Models\ToDoListModel;

    class PenggunaToDoController extends BaseController {
        public function index(): string {
            helper("form");
            return view('todolist/login');
        }

        public function login(){
            $session = session();
            $model = model("PenggunaToDoModel");

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $data = $model->where('username', $username)->first();

            if ($data) {
                $passKey = $data['password'];

                if($password === $passKey) {
                    $session->set('username', $username);
                    return redirect()->to('/ToDoList/app');
                } else {
                    return $this->index();
                }
            } else {
                return $this->index();
            }
        }

        public function signUpView(): string {
            helper("form");
            return view('todolist/signup');
        }

        public function signUp(): string {
            $model = model("PenggunaToDoModel");

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $confPassword = $this->request->getPost('conf_password');

            if ($password === $confPassword) {
                $data = [
                    'username' => $username,
                    'password' => $password
                ];
                $model->save($data);
                return $this->index();
            } else {
                return view('todolist/signup');
            }
        }
    }
?>