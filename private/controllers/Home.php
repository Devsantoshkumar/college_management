<?php

class Home extends Controller{
    function index()
    {
        if(!Auth::loggedIn())
        {
            $this->redirect('login');
        }
        $user = new User();
        // $user->insert($arr);
        // $user->update(1,$arr);
        $user->delete(5);
        $data = $user->findAll();
        $this->view('home',['rows'=>$data]);
    }
}