<?php

class Schools extends Controller{
   public function index()
    {
        if(!Auth::loggedIn())
        {
            $this->redirect('login');
        }
        $school = new School();
        $data = $school->findAll();

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['Schools','schools'];
        $this->view('schools',[
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
            $school = new School();

            if($school->validate($_POST))
            {
               $_POST['date'] = date("y-m-d H:i:s");
               $school->insert($_POST);
               $this->redirect('schools');
            }else
            {
                $errors = $school->errors;
            }
        }

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['Schools','schools'];
        $crumbs[] = ['Add','schools/add'];
        $this->view('schools.add',[
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

        $school = new School();
        if(count($_POST)>0)
        {
            if($school->validate($_POST))
            {
               $school->update($id,$_POST);
               $this->redirect('schools');
            }else
            {
                $errors = $school->errors;
            }
        }
        $row = $school->where('id',$id);

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['Schools','schools'];
        $crumbs[] = ['Edit','schools/edit'];

        $this->view('schools.edit',[
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

        $school = new School();
        if(count($_POST)>0)
        {
            $school->delete($id);
            $this->redirect('schools');
        }
        $row = $school->where('id',$id);

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['Schools','schools'];
        $crumbs[] = ['Delete','schools/delete'];
        $this->view('schools.delete',[
            'row'=>$row,
            'crumbs'=>$crumbs,
        ]);
    }
}