<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama', 'username', 'email', 'password', 'status', 'foto', 'level', 'created_at'];

    public function getLevels()
    {
        return $this->db->table('user')->select('level')->distinct()->get()->getResultArray();
    }
    public function getStatus()
    {
        return $this->db->table('user')->select('status')->distinct()->get()->getResultArray();
    }

    public function updateUser($id, $data)
    {
        return $this->update($id, $data);
    }
}
