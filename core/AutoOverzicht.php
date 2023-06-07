<?php

namespace bootstrap;

class AutoOverzicht
{
    private $auto = [];

    public function __construct()
    {
        $this->auto = [];
    }


    public function getAuto($merk = "---Allen Merken---")
    {
        $gefilterdeAuto = [];
        if ($merk == "---Allen Merken---") {
            foreach ($this->auto as $auto) {
                $gefilterdeAuto[] = $auto;
            }

        }
        foreach ($this->auto as $auto) {
            if ($auto->merk == $merk) {
                $gefilterdeAuto[] = $auto;
            }
        }
        return $gefilterdeAuto;
    }

    public function filterAutoByPrice($list)
    {
        $gefilterdeAuto = [];

        foreach ($list as $item) {
            if (isset($_GET['min'])) {
                if ($item->prijs >= $_GET['min']) {
                    if (!in_array($item, $gefilterdeAuto)) {
                        $gefilterdeAuto[] = $item;
                    }
                }
            }

            if (isset($_GET['max'])) {
                if ($item->prijs <= $_GET['max']) {
                    if (!in_array($item, $gefilterdeAuto)) {
                        $gefilterdeAuto[] = $item;
                    }
                }

            }
        }
        print_r($gefilterdeAuto);
        return $gefilterdeAuto;
    }

    public function add($autos)
    {
        $this->auto[] = $autos;
    }

    public function getMerken()
    {
        $merken = [];
        foreach ($this->auto as $autos) {
            if (!in_array($autos->merk, $merken)) {
                $merken[] = $autos->merk;
            }
        }
        return $merken;
    }

}