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

    public function MaxPrice($data, $max = null)
    {
        $filterd = [];
        if ($max === "")
        {
            return $data;
        }
        foreach ($data as $value)
        {

            if ($value->prijs < $max)
            {
                $filterd[] = $value;

            }

        }
        $filterd = array_unique($filterd, SORT_REGULAR);
        return $filterd;
    }
    public function MinPrice($data, $min = null)
    {
        $filterd = [];
        if ($min === "")
        {
            return $data;
        }
        foreach ($data as $value)
        {

            if ($value->prijs > $min)
            {
                $filterd[] = $value;

            }

        }
        $filterd = array_unique($filterd, SORT_REGULAR);
        return $filterd;
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