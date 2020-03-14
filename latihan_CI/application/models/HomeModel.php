<?php

    class HomeModel extends CI_Model {
        public function getData() {
            $data = array(
                'Nama'      => 'Farsy',
                'Kampus'    => 'STMIK Jabar',
                'Website'   => 'https://stmik-jabar.ac.id'
            );
            return $data; 
        }
    }