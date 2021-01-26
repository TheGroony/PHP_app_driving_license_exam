<?php 
require_once "Otazky.php";
// třída Otazky slouží jako jakási "úschovna" a seznam otázek, ze kteréto třida Test dědí
class Test extends Otazky{

    public $otazka1;
    public $otazka2;
    public $otazka3;
    public $otazka4;
    public $otazka5;

    public function __construct() {

        // Globalizují se atributy pro jejich práci ve funkci, jinak by na ně nešlo dosáhnout
        global $otazka1, $otazka2, $otazka3, $otazka4, $otazka5, $question1, $question2, $question3, $question4, $question5;
    
        require_once "Otazka.php";
        require_once "Footer.php";
        // Všechny otázky se inicializují (nastaví se do jejich polí)
        setOtazky();
        //Každá instance třídy zde slouží jako jedna otázka, parametry jsou konkrétní atributy polí, které dědíme ze třidy Otazky
        $otazka1 = new Otazka($question1['cisloOtazky'], $question1['otazka'], $question1['odpoved_1'], $question1['odpoved_2'], $question1['odpoved_3'], $question1['spravnaOdpoved']); 
        $otazka2 = new Otazka($question2['cisloOtazky'], $question2['otazka'], $question2['odpoved_1'], $question2['odpoved_2'], $question2['odpoved_3'], $question2['spravnaOdpoved']);
        $otazka3 = new Otazka($question3['cisloOtazky'], $question3['otazka'], $question3['odpoved_1'], $question3['odpoved_2'], $question3['odpoved_3'], $question3['spravnaOdpoved']);
        $otazka4 = new Otazka($question4['cisloOtazky'], $question4['otazka'], $question4['odpoved_1'], $question4['odpoved_2'], $question4['odpoved_3'], $question4['spravnaOdpoved']);
        $otazka5 = new Otazka($question5['cisloOtazky'], $question5['otazka'], $question5['odpoved_1'], $question5['odpoved_2'], $question5['odpoved_3'], $question5['spravnaOdpoved']);
    }

    // Funkce, která zobrazí test a stará se o jeho funkcionalitu
    function start() {
        global $otazka1, $otazka2, $otazka3, $otazka4, $otazka5;
        
        echo "<div class=\"test\"><form method=\"post\">";
        // Zobrazí se všechny otázky, neboli instance jejich vlastní třídy
        echo $otazka1->show();
        echo $otazka2->show();
        echo $otazka3->show();
        echo $otazka4->show();
        echo $otazka5->show();
        //Statická funkce, která za otázkami ukáže tlačítko na vyhodnocení testu
        echo Footer::ResultButton();
        echo "</form></div>";

        //Pokud uživatel klidne na tlačítko na vyhodnocení testu
        if(isset($_POST['vyhodnotit'])) {
            //Pokud jsou všechny otázky vyplněny, pokračuje se dál
            if(isset($_POST["otazka{$otazka1->cisloOtazky}"]) &&
               isset($_POST["otazka{$otazka2->cisloOtazky}"]) &&
               isset($_POST["otazka{$otazka3->cisloOtazky}"]) &&
               isset($_POST["otazka{$otazka4->cisloOtazky}"]) &&
               isset($_POST["otazka{$otazka5->cisloOtazky}"])) {

                // Uživatelem vybrané odpovědi se uloží do atributů vybranaOdpoved jednotlivých otázek (jejich instancí tříd)
                $otazka1->vybranaOdpoved = $_POST["otazka{$otazka1->cisloOtazky}"];
                $otazka2->vybranaOdpoved = $_POST["otazka{$otazka2->cisloOtazky}"];
                $otazka3->vybranaOdpoved = $_POST["otazka{$otazka3->cisloOtazky}"];
                $otazka4->vybranaOdpoved = $_POST["otazka{$otazka4->cisloOtazky}"];
                $otazka5->vybranaOdpoved = $_POST["otazka{$otazka5->cisloOtazky}"];

                /* Pokud je vybraná odpověď uživatelem shodná se správnou odpovědí, jednoduše řečeno, pokud je u otázky vybraná správná či nesprávná odpověď, 
                podle toho se do proměnných nastaví jejich správnost. Tyto proměnné se poté pošlou jako parametry do funkce, která vypíše výsledky */
                $vysledek_1 = ($otazka1->vybranaOdpoved == $otazka1->spravnaOdpoved) ? true : false;
                $vysledek_2 = ($otazka2->vybranaOdpoved == $otazka2->spravnaOdpoved) ? true : false;
                $vysledek_3 = ($otazka3->vybranaOdpoved == $otazka3->spravnaOdpoved) ? true : false;
                $vysledek_4 = ($otazka4->vybranaOdpoved == $otazka4->spravnaOdpoved) ? true : false;
                $vysledek_5 = ($otazka5->vybranaOdpoved == $otazka5->spravnaOdpoved) ? true : false;
                // Statická funkce vypisující výsledky podle zadaných parametrů
                echo Footer::showResults($vysledek_1, $vysledek_2, $vysledek_3, $vysledek_4, $vysledek_5);
            }   
            // Pokud otázky nejsou vyplněny všechny, zobrazí se hláška, že je třeba vyplnit a test se zopakuje.
            else echo "<div class=\"otazka\"><span class=\"spatne\">Zadejte prosím všechny odpovědi. </span></div>";
        }
    }
} 
?>