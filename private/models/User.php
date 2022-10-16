<?php

class User extends Model
{
    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email',
        'password',
        'gender',
        'rank',
        'date',
    ];

    protected $beforeInsert = [
        'make_user_id',
        'make_school_id',
        'has_password'
    ];


    public function validate($data)
    {
        $this->errors = array();

        if(empty($data['firstname']))
        {
            $this->errors['firstname'] = "first name is required";
        }

        if(empty($data['lastname']))
        {
            $this->errors['lastname'] = "lastname name is required";
        }

        if(empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL))
        {
            $this->errors['email'] = "email id is required";
        }
        print_r($this->where('email',$data['email']));
        if($this->where('email',$data['email'])){
            $this->errors['email'] = "That email is already exist";
        }
        
        $RANKS = ['admin','student','reception','teacher','superadmin'];
        if(empty($data['rank']) || !in_array($data['rank'],$RANKS))
        {
            $this->errors['rank'] = "Rank is required";
        }
        
        $GENDER = ['male','female'];
        if(empty($data['gender']) || !in_array($data['gender'],$GENDER))
        {
            $this->errors['gender'] = "Gender is required";
        }

        if(($data['password'] != $data['cpassword']) || empty($data['password']))
        {
            $this->errors['password'] = "Password not matched";
        }

        if(count($this->errors) == 0)
        {
            return true;
        }
        return false;
    }


    public function make_user_id($data)
    {
        $data['user_id'] = random_string(60);
        return $data;
    }

    public function make_school_id($data)
    {
        if(isset($_SESSION['USER']->school_id))
        {
            $data['school_id'] = $_SESSION['USER']->school_id;
        }
        return $data;
    }

    public function has_password($data)
    {
        $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
        return $data;
    }


}