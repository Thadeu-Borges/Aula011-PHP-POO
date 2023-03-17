<?php
require_once 'Pessoa.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Aluno
 *
 * @author AAAA
 */
class Aluno extends Pessoa {
    //put your code here
    private $matricula;
    private $curso;
    
    
    public function pagarMensalidade() {
        echo "<hr><p>Pagando mensalidade do aluno <strong>$this->nome</p>";
    }
    
    
    function getMatricula() {
        return $this->matricula;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }


}
