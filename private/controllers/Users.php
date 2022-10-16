<?php

class Users extends Controller{
    function index()
    {
        if(!Auth::loggedIn())
        {
            $this->redirect('login');
        }
        $user = new User();
        $school_id = Auth::getSchool_id();
        $data = $user->query("select * from users where school_id = :school_id",['school_id'=>$school_id]);
        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['staff','users'];

        $this->view('users',[
            'rows'=>$data,
            'crumbs'=>$crumbs,
        ]);
    }
}