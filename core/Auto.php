<?php

namespace bootstrap;

class auto
{
    public $merk;
    public $kleur;
    public $prijs;
    public $type;
    public $photo;
    public function __construct($merk, $type, $kleur, $prijs, $photo)
    {
        $this->merk = $merk;
        $this->type = $type;
        $this->kleur = $kleur;
        $this->prijs = $prijs;
        $this->photo = $photo;
    }

}