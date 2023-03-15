<?php

class Formulaire extends CI_Controller
{
    function index(){
        $this->load->view('formulaire');
    }
    function postInputForm(){
        $client = trim($this->input->post('nom-societe'));
        $descri = trim($this->input->post('description'));
        $siege = trim($this->input->post('siege'));
        $dirigeant = trim($this->input->post('dirigeant'));
        $numIdFiscale = trim($this->input->post('num-id-fiscale'));
        $numStat = trim($this->input->post('num-stat'));
        $numGest = trim($this->input->post('num-gestion'));
        $status = trim($this->input->post('status'));
        $debutExo = trim($this->input->post('debut-exo'));
        $devise = $this->input->post('devise');
    }
}