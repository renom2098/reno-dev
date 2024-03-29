<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
// use App\Models\M_Groups;

class Groups extends ResourcePresenter
{
    protected $modelName  = 'App\Models\M_groups';
    // protected $helpers = ['custom'];

    function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $data['groups'] = $this->model->findAll();
        return view('group/index', $data);
    }

    /**
     * Present a view to present a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Present a view to present a new single resource object
     *
     * @return mixed
     */
    public function new()
    {
        return view('group/new');
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        $validate = $this->validate([
            'name_group'    => [
                'rules'     => 'required|min_length[3]',
                'errors'    => [
                    'required' => 'Nama group tidak boleh kosong!',
                    'min_length' => 'Nama group minimal 3 huruf!',
                ],
            ],
        ]);
        if(!$validate) {
            // return redirect()->back()->withInput();
            return view('group/new');
            // return redirect()->to(site_url('groups/new'));
        }
        
        $data = $this->request->getPost();
        $this->model->insert($data);
        return redirect()->to(site_url('groups'))->with('success', 'data berhasil disimpan');
    }

    /**
     * Present a view to edit the properties of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $group =  $this->model->where('id_group', $id)->first();
        if (is_object($group)) {
            $data['groups'] = $group;
            return view('group/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $validate = $this->validate([
            'name_group'    => [
                'rules'     => 'required|min_length[3]',
                'errors'    => [
                    'required' => 'Nama group tidak boleh kosong!',
                    'min_length' => 'Nama group minimal 3 huruf!',
                ],
            ],
        ]);
        if(!$validate) {
            // return redirect()->back()->withInput();
            return view('group/edit');
            // return redirect()->to(site_url('groups/new'));
        }

        $data = $this->request->getPost();
        $this->model->update($id, $data);
        return redirect()->to(site_url('groups'))->with('success', 'data berhasil diubah');
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function remove($id = null)
    {
        //
    }

    /**
     * Process the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        // cara 1 : panjang
        // $this->model->where('id_group', $id)->delete();
        // cara 2 : pendek
        $this->model->delete($id);
        return redirect()->to(site_url('groups'))->with('danger', 'data berhasil dihapus');
    }

    public function trash()
    {
        $data['groups'] = $this->model->onlyDeleted()->findAll();
        return view('group/trash', $data);
    }

    public function restore($id = null)
    {
        if ($id != null) {
            // $this->model->update($id, ['deleted_at' => null]);
            $this->db->table('groups')
            ->set('deleted_at', null, true)
            ->where(['id_group' => $id])
            ->update();
        } else {
            $this->db->table('groups')
            ->set('deleted_at', null, true)
            ->where('deleted_at is NOT NULL', NULL, FALSE)
            ->update();
        }
        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('groups'))->with('success', 'data berhasil direstore');
        }
    }

    public function delete2($id = null)
    {
        if($id != null) {
            $this->model->delete($id, true);
            return redirect()->to(site_url('groups/trash'))->with('danger', 'data sampah berhasil dihapus permanen');
        } else {
            $this->model->purgeDeleted();
            return redirect()->to(site_url('groups/trash'))->with('danger', 'data sampah berhasil dihapus permanen');
        }
    }
}
