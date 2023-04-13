<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        helper(['url','form']);
        helper('text');
        
    }
    public function index()
    {
        return view('sample');
    }
    public function map()
    {
        return view('sample');
    }

    public function open()
    {
        if(array_key_exists('user_session',session()->get())){
            $data = array();
            $data['user'] = session()->get('user_session');
            return view('dashboard', $data);
        }else{
            return redirect()->to('login');
        }
        
    }

    public function home()
    {
        return view('main');
    }
    public function login()
    {
        
        if(array_key_exists('user_session',session()->get())){
            return view('dashboard');
        }
        return view('login');
    }
    public function logout(){
        session()->destroy();
        return redirect()->to('login');
    }

    public function admin_register()
    {
        return view('admin_register');
    }

    public function employee_register()
    {
        return view('employee_register');
    }
    public function process ($mode ){
       
        if($mode == 'register'){
            $username = $this->request->getPost('uname');
            $password = $this->request->getPost('pass');
           
    
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
            $db = \Config\Database::connect();
            $builder = $db->table('users');
    
            $data = [
                
                'username' => $username,
                'passw' => $hashed_password,
            ];
    
            $builder->insert($data);
            return redirect()->to('login');
        }
        else if($mode == 'register2'){
            $username = $this->request->getPost('empname');
            $password = $this->request->getPost('epass');
           
    
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
            $db = \Config\Database::connect();
            $builder = $db->table('employee');
    
            $data = [
                
                'username' => $username,
                'password' => $hashed_password,
            ];
    
            $builder->insert($data);
        }
        else if ($mode == 'login'){
            $user_m = new \App\Models\UserAccount();

            $username = $this->request->getPost('uname');
            $password = $this->request->getPost('pass');

            $users_data = $user_m
                ->where('username', $username)
                ->findAll();
    
            if (count($users_data) > 0 && password_verify($password, $users_data[0]['passw'])) {
                // password is correct
                session()->set('user_session', $users_data[0]);
                return redirect()->to('open');
            } else {
                // password is incorrect or user not found
                return redirect()->to('login');
            }
        }
    }

    
}
