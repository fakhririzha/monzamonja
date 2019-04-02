<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $fullname;
    public $address;
    public $id_prov;
    public $id_kab;
    public $id_kec;
    public $id_kel;
    public $nomorHandphone;
    public $nomorRumah;
    public $foto;
    public $file;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            [['fullname', 'address', 'id_prov', 'nomorHandphone', 'password', 'file'], 'required'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup($foto)
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->fullname = $this->fullname;
        $user->address = $this->address;
        $user->nomorHandphone = $this->nomorHandphone;
        $user->nomorRumah = $this->nomorRumah;
        $user->id_prov = $this->id_prov;
        $user->id_kab = 0;
        $user->id_kel = 0;
        $user->id_kec = 0;
        $user->email = $this->email;
        $user->foto = $foto;

        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'fullname' => 'Nama Lengkap',
            'address' => 'Alamat',
            'id_prov' => 'Provinsi',
            'id_kab' => 'Kabupaten',
            'id_kec' => 'Kecamatan',
            'id_kel' => 'Kelurahan',
            'file' => 'Foto',
            'nomorHandphone' => 'Nomor Handphone',
            'nomorRumah' => 'Nomor Rumah',
            'oldPassword' => 'Password Lama',
            'newPassword' => 'Password Baru',
            'retypePassword' => 'Ketikan Kebali Password Baru Anda',
        ];
    }
}
