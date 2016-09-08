<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Cadastramento de funcionarios
 *
 * @author Admin
 */
class func {

    public $nome;
    public $idade;
    public $salHora;
    public $horasTM;
    public $sMes;

    /**
     * 
     * @return STRING = Informe nome do funcionário
     */
//    function getNome() {
//        
//        return $this->nome;
//    }
//
//    function getIdade() {
//        return $this->idade;
//    }
//    
//    /**
//     * <b
//     * @param STRING $nome
//     */
//    function setNome($nome) {
//        $this->nome = $nome;
//    }
//
//    function setIdade($idade) {
//        $this->idade = $idade;
//    }

    
    /**
     * <b> Cadastrar nome e idade do funcionário
     * @param STRING $nome = Informe o nome do funcionário
     * @param $idade = Informe a idade do funcionário
     * @param type $salHora = 
     */
    

        public function ExeCreate($nome, $idade) {
        $this->Nome = (string) $nome;
        $this->idade = $idade;
        return;
    }
    
    /**
     * <b>Cadastor de salario</b>
     * 
     * @param type $salHora = Informara o Valor do salário/hora que deve ser entre 10 e 200
     */
    public function sal($salHora) {
        $this->salHora = $salHora;
        if($this->salHora < 10 | $this->salHora > 200){
            
            echo 'Erro: O valor do salário por hora deve estar entre 10 e 200<br>';
            $this->salHora = 0;   
        }
    }

    /**
     * <b>Horas Trabalhadas </b>
     * 
     * @param type $horasTM = Informe as horas trabalhadas do funcionário que não deve ser superior à 160 horas
     */
    public function horasT($horasTM) {
        $this->horasTM = $horasTM;
        if($this->horasTM > 160):
            echo 'Erro: Horas trabalhadas do funcionário passou das horas permitidas';
            die();
        endif;
    }
    
    /**
     * <b> Salário Mensal </b>
     * @param type $horasTM = Calcula as horas trabalhadas do funcionario com seu salário por hora
     */
    public function salMes() {
        $this->sMes = $this->horasTM * $this->salHora;
        
    }
    /**
     * Aqui será exibido todos os dados do funcionário
     */
    public function mostrarDados() {
         echo 'Funcionário: '. $this->Nome.'<br>';
         echo 'Idade: '. $this->idade.'<br>';
         echo 'Salario: '. $this->salHora.'<br>';
         echo 'Horas Trabalhadas '. $this->horasTM.'<br>';
         echo '<b>Salário a Receber: </b>'.$this->sMes;
         }
    
    /**
     * <b> Infomar salário por hora do funcionário, que deve ser maior que 10
     * e menor que 200;
     * @param type $salHora
     */     
//    public function exibevalSal($salHora) {
//        if($this->salHora > 10 && $this->salHora < 200){
//            echo 'Erro: O valor do salário por hora deve estar entre 10 e 200<br>';
//        }else{
//            echo 'Valor por hora = '.$this->salHora. '<br>';
//        }
//    }     

}
