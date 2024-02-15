<?php
use PHPUnit\Framework\TestCase;

require_once "src/StringManipulator.php";

class StringManipulatorTest extends TestCase
{
    public $manipulator;
    public function setUp(): void
    {
        $this->manipulator = new StringManipulator;
    }

    public function testConcatenateString()
    {
        $texto1 = "testando strings";
        $texto2 = "concatenadas na função";
        $esperado = "testando strings concatenadas na função";
        $this->assertEquals($esperado, $this->manipulator->concatenateString($texto1, $texto2));

    }
    public function testCountVowels()
    {
        $texto = "testando contador de vogais";
        $this->assertEquals(10, $this->manipulator->countVowels($texto));

        $texto = "tEstAndO cOntador de vogais mAiUsculAs";
        $this->assertEquals(15, $this->manipulator->countVowels($texto));


        $texto = "tstnd cntdr d vgs";
        $this->assertEquals(0, $this->manipulator->countVowels($texto));

    }
}
// o teste ConcatenateString tem duas strings predefinidas e um resultado esperado da junção dessas duas string, o resultado esperado é passado como argumento para o asserEquals para comparar com o que retornar da função ConcatenateStrigns que recebe com argumento as duas strings predefinidas

//o teste CountVowels seta 3 strings, a primeira string com tudo minusculo, a segunda com algumas maiusculas e outras nao, e a ultima sem nenhum vogal