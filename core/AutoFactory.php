<?php

function AutoFactory($autoConstructor)
{
    if (isset($_GET['submit'])) {
        $autos = $autoConstructor->getAuto($_GET['merk']);

        $min = isset($_GET['min']) ? $_GET['min'] : null;
        $max = isset($_GET['max']) ? $_GET['max'] : null;
        $autos = $autoConstructor->MaxPrice($autos, $max);
        $autos = $autoConstructor->MinPrice($autos, $min);
        $out = "<table>";
        foreach ($autos as $auto) {
            $out .= "<tr><td>";
            $out .= '<img class="auto img-thumbnail" src="' . $auto->photo . '"></td>';
            $out .= '<td><p>' . $auto->merk . " " . $auto->type . " " . ' prijs:€ ' . $auto->prijs . ' </p></td></tr>';


        }
        $out .= "</table>";

        return $out;
    }

}

