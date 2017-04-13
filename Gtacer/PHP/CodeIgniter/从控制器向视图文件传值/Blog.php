<?php
    class Blog extends CI_Controller {

        /*public function index()
        {
            $this->load->view('blogview');
        }*/
        public function index()
        {
            $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');

            $data['title'] = "My Real Title";
            $data['heading'] = "My Real Heading";

            $this->load->view('blogview', $data);
        }


        public function comments()
        {
            echo 'Look at this!';
        }
        public function _output($output)
        {
            echo $output;
        }
    }