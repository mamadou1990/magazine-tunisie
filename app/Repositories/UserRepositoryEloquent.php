<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UserRepository;
use App\Entities\User;

/**
 * Class UserRepositoryEloquent
 * @package namespace App\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria( app(RequestCriteria::class) );
    }

    public function getAllUsers()
    {
        $users = $this->all();

        return $users;
    }

    public function addUser($User)
    {
        $this->create($User);
    }

    public function getUser($id)
    {
        $User = $this->findByField('id',$id);

        return $User;
    }

    public function updateUser($User, $User_id)
    {
         $this->update($User, $User_id );

    }

    public function deleteUsers($ids){
        foreach ($ids as $id) {
            $this->delete($id);
        }}
}