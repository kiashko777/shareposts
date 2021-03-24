<?php

class Pages extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        if (isLoggedIn()) {
            redirect('posts');
        }

        $data = ['title' => 'Welcome to Shareposts App!',
            'description' => 'Simple App built on TraversyMVC framework'];
        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = ['title' => 'About App',
            'description' => 'This is the App to share the posts with other users'
        ];
        $this->view('pages/about', $data);
    }
}