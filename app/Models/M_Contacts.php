<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Contacts extends Model
{
    protected $table            = 'contact';
    protected $primaryKey       = 'id_contact';
    protected $returnType       = 'object';
    protected $allowedFields    = ['name_contact', 'name_alias', 'phone', 'email', 'address', 'info_contact', 'id_group'];
    protected $useTimestamps    = true;
    protected $useSoftDeletes   = false;

    function getAll()
    {
        $builder = $this->db->table('contacts');
        $builder->join('groups', 'groups.id_group = groups.id_group');
        $query = $builder->get();
    }
}
