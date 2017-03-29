<?php 

namespace app\controllers\admin;

use app\controllers\api\Users as UsersApiController;

class Users extends UsersApiController
{
	public function index()
	{
        $this->data['data'] = $this->model->getAll();

	}

    public function change_role($id, $role)
    {
        // only superadmin and developer can change role
        // nobody can add role higher than 74
        if(!check_user_premission(74) || $role > 75) return;
        // only developer can add superadmins
        if($role > 70 && !check_user_premission(75) ) return;

        $this->model->changeRole($id, $role);

        redirect('/admin/users');
    }
}