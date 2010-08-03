<?php

require_once '../Object/Cadastro.class.php';
 
class CadastroTest extends PHPUnit_Framework_TestCase
{
    public function test_deveria_retornar_o_que_enviei()
    {
        $cadastro = new Cadastro();
        $this->assertEquals('Voce disse blz',$cadastro->say('blz'));
    }
}
?>