<?php

namespace app\models;

use Yii;
use mdm\admin\models\User as UserModel;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $access_token
 */
class User extends UserModel
{
    /**
     * Получить назание роли пользоваетля
     *
     * @return Название роли юзера string|null
     */
    public function getUserRole()
    {
        $roles = Yii::$app->authManager->getRolesByUser($this->id);
        if(!$roles){
            return null;
        }

        reset($roles);
        $role = current($roles);

        return $role->name;
    }
}
