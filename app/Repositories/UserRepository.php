<?php 

namespace App\Repositories; 

use App\Models\User; 

class UserRepository {
    public $model;

    public function __construct(User $user)
	{
		$this->model = $user;
    }

    public function updateUser($data)
    {
        return $this->model->where('id', $data['id'])->update($data);
    }

    public function getListUser($data) 
    {
        if(!empty($data)) { 
            return $this->model->where('name', 'LIKE', "%" . $data['search'] . "%")->paginate(5)->withQueryString();
        } 
        return $this->model->paginate(5); 
    }

    public function findUser($id) 
    {
        return $this->model->where('id', $id)->first();
    }

    public function findUserByUsername($username)
    {
        return $this->model->where('username_login', $username)->first();
    }

    public function checkExist($data) 
    {
        $user = $this->model->where('id', '!=', $data['id'])->where('username_login', $data['username_login'])->first();
        if($user) {
            return FALSE; 
        }

        return TRUE; 
    }

    public function deleteUser($id) 
    {
        return $this->model->where('id', $id)->delete();  
    }
}