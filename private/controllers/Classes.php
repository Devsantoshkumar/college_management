<?php

class Classes extends Controller{
   public function index()
    {
        if(!Auth::loggedIn())
        {
            $this->redirect('login');
        }
        $class = new Classes_model();

        $data = $class->findAll('desc');
        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['classes','classes'];
        $this->view('classes',[
            'rows'=>$data,
            'crumbs'=>$crumbs,
        ]);
    }

    public function add()
    {
        $errors = array();
        if(!Auth::loggedIn())
        {
            $this->redirect('login');
        }

        if(count($_POST)>0)
        {
            $class = new Classes_model();

            if($class->validate($_POST))
            {
               $_POST['date'] = date("y-m-d H:i:s");
               $class->insert($_POST);
               $this->redirect('classes');
            }else
            {
                $errors = $class->errors;
            }
        }

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['classes','classes'];
        $crumbs[] = ['Add','classes/add'];
        $this->view('classes.add',[
            'errors'=>$errors,
            'crumbs'=>$crumbs,
        ]);
    }

    public function edit($id=null)
    {
        $errors = array();
        if(!Auth::loggedIn())
        {
            $this->redirect('login');
        }

        $class = new Classes_model();
        if(count($_POST)>0)
        {
            if($class->validate($_POST))
            {
               $class->update($id,$_POST);
               $this->redirect('classes');
            }else
            {
                $errors = $class->errors;
            }
        }
        $row = $class->where('id',$id);

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['classes','classes'];
        $crumbs[] = ['Edit','classes/edit'];

        $this->view('classes.edit',[
            'row'=>$row,
            'errors'=>$errors,
            'crumbs'=>$crumbs,
        ]);
    }

    public function delete($id=null)
    {
        $errors = array();
        if(!Auth::loggedIn())
        {
            $this->redirect('login');
        }

        $class = new Classes_model();
        if(count($_POST)>0)
        {
            $class->delete($id);
            $this->redirect('classes');
        }
        $row = $class->where('id',$id);

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['classes','classes'];
        $crumbs[] = ['Delete','classes/delete'];
        $this->view('classes.delete',[
            'row'=>$row,
            'crumbs'=>$crumbs,
        ]);
    }
}