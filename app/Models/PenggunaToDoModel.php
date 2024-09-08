<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class PenggunaToDoModel extends Model {
        protected $table = 'pengguna';
        protected $allowedFields = ['username', 'password'];
        protected $primaryKey = 'username';
        protected $useAutoIncrement=false;
    }
?>