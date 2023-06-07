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

    public function filterAutoByPrice($data, $min = null, $max = null, $key = 'prijs')
    {


        $filterd = array_filter($data, function ($item) use ($data, $min, $max, $key) {
            $value = $item->{$key};
            if ($max !== null && $value > $max) {
                return false;
            }
            if ($min !== null && $value < $min) {
                return false;
            }

            return true;
        });
        print_r($filterd);
        return $filterd;
    }

    public
    function add($autos)
    {
        $this->auto[] = $autos;
    }

    public
    function getMerken()
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