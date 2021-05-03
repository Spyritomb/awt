<?php


namespace App\Models;


use App\Entities\UserEntity;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'App\Entities\UserEntity';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'password','email','phone'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [
        'name' => 'required|max_length[211]' ,
        'phone' =>   'required|max_length[10]|min_length[10]|numeric',
        'email' =>   'required|valid_email',
        'password' => 'required|min_length[10]',
        'password_confirm' => 'required|matches[password]'
    ];
    protected $validationMessages = [];
    protected $skipValidation = true;


//    public function type(UserEntity $user): bool
//    {
//        return $this->find($user->id)->admin == true;
//    }
    public function readByPhone(UserEntity $user, bool $returnPassword = false)
    {
        if ($returnPassword) {
            return $this
                ->select()
                ->where('phone', $user->phone)
                ->first();
        } else {
            return $this
                ->select('id, username')
                ->where('phone', $user->phone)
                ->first();
        }

    }

    public function login(UserEntity $user)
    {
        $dbUser = $this->readByPhone($user, true);

        if ($dbUser) {
            if (password_verify($user->password, $dbUser->password)) {
                return new UserEntity([
                    'id' => $dbUser->id
                ]);
            } else {
                log_message('error','Credentials incorrect');
                return false;
            }
        } else {
            log_message('error','UserEntity does not exist');
            return false;
        }

        //Check if it exists
        //checks whether the password provided matches the pass in db

    }


    public function registerUser(UserEntity $user): bool
    {
        log_message('error', 'MODEL RPOBLEM', ['exception' => $user]);
        try {
            if ($this->insert($user)) {
                return true;
            } else {
                return false;
            }
        } catch (\ReflectionException $e) {
            log_message('error', '[ERROR] {exception}', ['exception' => $e]);
            return false;
        }
    }
}