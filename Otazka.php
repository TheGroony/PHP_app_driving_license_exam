<?php 
// Třída a jakýsi podklad na vytvoření otázky
class Otazka {

    public $cisloOtazky;
    private $otazka;
    private $odpoved_1;
    private $odpoved_2;
    private $odpoved_3;
    public $spravnaOdpoved;
    public $vybranaOdpoved;
    

    // Po vytvoření objektu z této třídy se vytvoří otázka na základě sdělených argumentů
    function __construct($cisloOtazky, $otazka, $odpoved_1, $odpoved_2, $odpoved_3, $spravnaOdpoved) {
        $this->cisloOtazky = $cisloOtazky;
        $this->otazka = $otazka;
        $this->odpoved_1 = $odpoved_1;
        $this->odpoved_2 = $odpoved_2;
        $this->odpoved_3 = $odpoved_3;
        $this->spravnaOdpoved = $spravnaOdpoved;
    }


    //Funkce, která zobrazí otázku a její možnosti na stránce
    function show(){
        global $cisloOtazky, $otazka, $odpoved_1, $odpoved_2, $odpoved_3;
        $text = "<div class=\"otazka\">
        <div class=\"vrsek\">
        <h2>{$this->cisloOtazky}. {$this->otazka}</h2>
        </div>
        <div class=\"spodek\">
            <div class=\"tlacitko\">
            <input type=\"radio\" id=\"otazka_{$this->cisloOtazky}odpoved_1\" name=\"otazka{$this->cisloOtazky}\" value=\"{$this->odpoved_1}\" class=\"odpoved\">
            <label for=\"otazka_{$this->cisloOtazky}odpoved_1\">{$this->odpoved_1}</label> 
            </div>
            <div class=\"tlacitko\">
            <input type=\"radio\" id=\"otazka_{$this->cisloOtazky}odpoved_2\" name=\"otazka{$this->cisloOtazky}\" value=\"{$this->odpoved_2}\" class=\"odpoved\">
            <label for=\"otazka_{$this->cisloOtazky}odpoved_2\">{$this->odpoved_2}</label> 
            </div>
            <div class=\"tlacitko\">
            <input type=\"radio\" id=\"otazka_{$this->cisloOtazky}odpoved_3\" name=\"otazka{$this->cisloOtazky}\" value=\"{$this->odpoved_3}\" class=\"odpoved\">
            <label for=\"otazka_{$this->cisloOtazky}odpoved_3\">{$this->odpoved_3}</label> 
            </div>
        </div>
        </div>";
        return $text;
    }
}
?>