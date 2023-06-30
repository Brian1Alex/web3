<?php
    class Instructores extends CI_Controller{
        function __construct()
        {
            parent::__construct();
        }
//funcione que permiten renderizar la vista dentro del index
        public function siempre(){
            $this->load->view('header');
            $this->load->view('instructores/siempre');
            $this->load->view('footer');
        }

        public function galletas(){
            $this->load->view('header');
            $this->load->view('instructores/galletas');
            $this->load->view('footer');
        }

        public function helados(){
            $this->load->view('header');
            $this->load->view('instructores/helados');
            $this->load->view('footer');
        }

        public function nosotro(){
            $this->load->view('header');
            $this->load->view('instructores/nosotro');
            $this->load->view('footer');
        }

        public function receta(){
            $this->load->view('header');
            $this->load->view('instructores/receta');
            $this->load->view('footer');
        }

    }

?>