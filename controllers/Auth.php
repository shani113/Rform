<?php
class Auth extends CI_Controller{
    //this function will show register page
    public function Register()

    {  $this->load->view('Dashboard');
         $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name','First Name','required');
        $this->form_validation->set_rules('last_name','Last Name','required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user4.email]');

        $this->form_validation->set_rules('Phone','Phone','required');
        $this->form_validation->set_rules('password','password','required');
        if($this->form_validation->run()==false){
            //here we will load our view
            $this->load->view('register');
        }else{
            //here we will save user record in db
            $this->load->model('Authmodel');
            $formArray=array();
            $formArray['first_name']=$this->input->post('first_name');
            $formArray['last_name']=$this->input->post('last_name');
            $formArray['email']=$this->input->post('email');
            $formArray['Phone']=$this->input->post('Phone');
            $formArray['password']=password_hash($this->input->post('password'),PASSWORD_BCRYPT);
            $formArray['created_at']=date('y-m-d H:i:s');

            $this->Authmodel->create($formArray);
            $this->session->set_flashdata('msg','your account has been created');
            redirect(base_url().'index.php/Auth/register');
        }
         
         
    }
    public function login()
    {
        $this->load->model('Authmodel');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password','password','required');
        if($this->form_validation->run()==true){
            $email=$this->input->post('email');
            $user=$this->Authmodel->checkuser($email);
            if(!empty($user)){
                $password=$this->input->post('password');
                if(password_verify($password,$user['password'])==true){
                    $searchArray['id']=$user['id'];
                    $searchArray['first_name']=$user['first_name'];
                    $searchArray['last_name']=$user['last_name'];
                    $searchArray['email']=$user['email'];
                    $this->session->set_userdata('user',$searchArray);
                    redirect(base_url().'index.php/Auth/dashboard');
                }else{
                    
                    $this->session->set_flashdata('msg','either Email or Password is incorrect');
                    
                redirect(base_url().'index.php/Auth/Dashboard');

                }

            }else
            {
                $this->session->set_flashdata('$msg','Either Email or Password is incorrect');
                redirect(base_url().'index.php/Auth/login');
            }
        }
        else{

            $this->load->view('login');
        }

        
    }
public function dashboard(){
    $this->load->view('dashboard');
}
}

?>