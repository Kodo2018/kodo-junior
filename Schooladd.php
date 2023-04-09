
<?php
class Schooladd extends Controller {
public  function index()
        {
           if(!Auth::logged_in())
           {
             $this->redirect('login');
           }
        //
        $errors=array();
        
       
        if(count($_POST) >0)
        {
          $school =new School();
          if($school->validate($_POST))
          {
            
              $_POST['date'] = date("y-m-d H:i:s");
              
              $school->insert($_POST);

            $this->redirect('school');
          }
          else{
              $errors=$school->errors;
          }
        }
             
            $this->view('schooladd',
            [
                
                'errors'=>$errors,

            ]);
        }
    
    }