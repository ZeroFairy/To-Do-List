<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class ToDoListModel extends Model {
        protected $table = 'todolist';
        protected $allowedFields = ['idkegiatan', 'user', 'kegiatan', 'status'];
        protected $primaryKey = 'idkegiatan';
    }
?>