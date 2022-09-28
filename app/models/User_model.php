<?php

class User_model 
    {
        private $nama = 'Arif Munandar';
        
        public function getUser()
        {
            return $this->nama;
        }
    }