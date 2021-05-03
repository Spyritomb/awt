<?php


namespace App\Controllers;

use App\Models\UserModel;


class Auth extends BaseController
{
    public function index()
    {

        if ($this->session->get('loggedIn')) {
            return redirect()->to('/');
        }
        return redirect()->to('/login');
    }

    //temporary function to set the session
    public function setlogin()
    {
        $this->session->set('loggedIn', true);
        return redirect()->to('/');
    }

    //
    public function login()
    {
        if ($this->request->getMethod() == 'post') {

            if ($this->session->get('loggedIn')) {
                return redirect()->to('/');
            }

            $user = new \App\Entities\UserEntity($this->request->getPost());

            $userModel = new UserModel();
            $userLogin = $userModel->login($user);


            if ($userLogin) {
                $this->session->set('loggedIn', true);
                $this->session->set('userID', $userLogin->id);
                return redirect()->to('/');
            } else {
                return redirect()->back()->with('error', 'Incorrect credentials')->withInput();
            }

        } else {
            $hdata = [
                "title" => 'Login'
            ];

            $data = [
            ];

            if ($this->session->get('loggedIn')) {
                return redirect()->to('/');

            }
            //echo view('templates/header', $hdata);
            echo view('auth/login', $hdata);
            //echo view('templates/footer');
        }
    }


    public function logout()
    {

        if ($this->session->get('loggedIn')) {
            $this->session->destroy();
            return redirect()->to('/');
        }
        return redirect()->to('/login');

    }


    public function register()
    {

        if ($this->session->get('loggedIn')) {
            return redirect()->to('/');
        }

        helper('form');
        if ($this->request->getMethod() == 'post') {


            $postData = $this->request->getPost();
            $user = new \App\Entities\UserEntity($postData);
            $userModel = new UserModel();

            $validationRules = $userModel->getValidationRules();


            if (!$this->validate($validationRules)) {
                log_message('error', 'Failed to validate');
                return redirect()
                    ->back()
                    ->with('error', 'Input validation failed, please fill all the required fields marked with (*).')
                    ->withInput();
            } else {
                try {

                    $result = $userModel->registerUser($user);
                    //var_dump($user);

                    if ($result) {
                        log_message('error', 'UserEntity successfully added to the database!');
                        //return redirect()->to('/success')->with('message', 'Account successfully created!');
                    } else {
                        log_message('error', 'UserEntity successfully was not added to the database.');
                        //return redirect()->back()->with('error', 'UserEntity was not added!')->withInput();
                    }

                } catch (\Exception $e) {

                }
            }


        } else {
            $hdata = [
                "title" => 'Login'
            ];

            $data = [
            ];

            if ($this->session->get('loggedIn')) {
                return redirect()->to('/');

            }
            echo view('templates/header', $hdata);
            echo view('auth/register');
            echo view('templates/footer');
        }
    }

}

//TODO: CHECK IF ADMIN OR USER FIRST
