<?php
     class Schooledit extends controller{
     public  function index($id=null)
        {
           if(!Auth::logged_in())
           {
             $this->redirect('login');
           }
        //
        $school =new School();
        $errors=array();
        
       
        if(count($_POST) >0)
        {
         
          if($school->validate($_POST))
          {
            
             // $_POST['date'] = date("y-m-d H:i:s");
              
              $school->update($id,$_POST);

            $this->redirect('schools');
          }
          else{
              $errors=$school->errors;
          }
        }
             $row=$school->where('id',$id);
            
            $this->view('schooledit',
            [
                'row'=>$row,
                'errors'=>$errors,

            ]);
        }
    }
        ?>