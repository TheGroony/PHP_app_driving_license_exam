<?php 
class Otazky {

    // Jednotlivé atributy, neboli proměnné otázek
    public $question1;
    public $question2;
    public $question3;
    public $question4;
    public $question5;
}

// Funkce, která inicializuje všechny otázky
 function setOtazky() {

    global $question1, $question2, $question3, $question4, $question5;

    $question1 = array(
        "cisloOtazky"=>"1",
        "otazka"=>"Zapnutím výstražného světelného znamení dává řidič upozornění, pokud:",
        "odpoved_1"=>"Je nutné náhle snížit rychlost jízdy nebo zastavit vozidlo",
        "odpoved_2"=>"Řidič před vozidlem jede pomalu a zdržuje provoz na pozemních komunikacích",
        "odpoved_3"=>"Předjíždí kolonu vozidel, která jej zpomaluje v jízdě",
        "spravnaOdpoved"=>"Je nutné náhle snížit rychlost jízdy nebo zastavit vozidlo");
    $question2 = array(
            "cisloOtazky"=>"2",
            "otazka"=>"Řidič je:",
            "odpoved_1"=>"Pouze ten, kdo řídí motorové vozidlo",
            "odpoved_2"=>"Ten, kdo řídí motorové vozidlo nebo nemotorové vozidlo, ne však tramvaj",
            "odpoved_3"=>"Ten, kdo řídí motorové nebo nemotorové vozidlo anebo tramvaj",
            "spravnaOdpoved"=>"Ten, kdo řídí motorové nebo nemotorové vozidlo anebo tramvaj");
    $question3 = array(
            "cisloOtazky"=>"3",
            "otazka"=>"Při čerpání pohonných hmot mají přednost:",
            "odpoved_1"=>"Řidiči vozidel přepravující osobu těžce postiženou nebo těžce pohybově postiženou",
            "odpoved_2"=>"Řidiči vozidel s právem předností jízdy - přitom nevyužívají zvláštních výstražných znamení",
            "odpoved_3"=>"Řidiči autobusů a řidiči vozidel přepravující zboží, které podléhá rychlé zkáze",
            "spravnaOdpoved"=>"Řidiči vozidel s právem předností jízdy - přitom nevyužívají zvláštních výstražných znamení");
    $question4 = array(
            "cisloOtazky"=>"4",
            "otazka"=>"Stát znamená:",
            "odpoved_1"=>"Uvést vozidlo do klidu nad dobu povolenou pro zastavení",
            "odpoved_2"=>"Zastavit vozidlo u pravého okraje vozovky",
            "odpoved_3"=>"Zastavit před světelným signálem nebo železničním přejezdem",
            "spravnaOdpoved"=>"Uvést vozidlo do klidu nad dobu povolenou pro zastavení");
    $question5 = array(
            "cisloOtazky"=>"5",
            "otazka"=>"Řidič nesmí snížit náhle rychlost jízdy nebo náhle zastavit:",
            "odpoved_1"=>"Pokud to nevyžaduje bezpečnost provozu na pozemních komunikacích",
            "odpoved_2"=>"S výjimkou připadu zdravotní nevolnosti",
            "odpoved_3"=>"S výjimkou případu, kdy je zastavován pracovníkem dráhy",
            "spravnaOdpoved"=>"Pokud to nevyžaduje bezpečnost provozu na pozemních komunikacích");

}
?>