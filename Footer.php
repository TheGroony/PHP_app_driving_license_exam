<?php 
class Footer {
    //Funkce zobrazující tlačítko na vyhodnocení testu
    static function ResultButton() {
        $text = " <input type=\"submit\" class=\"vyhodnotit\" name=\"vyhodnotit\">";
        return $text;
    }

    // Statická funkce, která na základě sdělených argumentů vypíše výsledky pod test
    static function showResults($otazka_1, $otazka_2, $otazka_3, $otazka_4, $otazka_5) {
        $spravne = "<span class=\"spravne\">Správně.</span>";
        $spatne = "<span class=\"spatne\">Špatně.</span>";
        $vysledek = "<div class=\"otazka\">";
        // Pokud je argument (otázka) správně, vypíše se číslo otázky a informace, že byla zodpovězena správně, pokud ne, tak naopak
        $vysledek .= $otazka_1 ? "<div class=\"odpoved\">Otázka 1 : {$spravne} </div>" : "<div class=\"odpoved\">Otázka 1 : {$spatne} </div>";
        $vysledek .= $otazka_2 ? "<div class=\"odpoved\">Otázka 2 : {$spravne} </div>" : "<div class=\"odpoved\">Otázka 2 : {$spatne} </div>";
        $vysledek .= $otazka_3 ? "<div class=\"odpoved\">Otázka 3 : {$spravne} </div>" : "<div class=\"odpoved\">Otázka 3 : {$spatne} </div>";
        $vysledek .= $otazka_4 ? "<div class=\"odpoved\">Otázka 4 : {$spravne} </div>" : "<div class=\"odpoved\">Otázka 4 : {$spatne} </div>";
        $vysledek .= $otazka_5 ? "<div class=\"odpoved\">Otázka 5 : {$spravne} </div>" : "<div class=\"odpoved\">Otázka 5 : {$spatne} </div>";
        $vysledek .= "</div>";
        return $vysledek;
    }
}
?>



