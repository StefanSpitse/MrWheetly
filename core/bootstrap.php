<?php

namespace bootstrap;

class Bootstraps
{
    public $path;
    public $option;
    private $files = array();

    public function link($rel = 'stylesheet')
    {
        $this->get_files();
        $out = "";
        foreach ($this->files as $file) {
            $out .= "<link rel='" . $rel . "' href='" . $file . "'> </link>";

        }
        return $out;
    }

    public function scripts()
    {
        $this->get_files();
        $out = "";
        foreach ($this->files as $file) {
            $out .= "<script src='". $file ."'></script>";

        }
        return $out;
    }

    public function includes()
    {
        $this->get_files();
        foreach ($this->files as $file) {
            include_once $file;
        }
    }

    private function get_files()
    {
        foreach (glob($this->path . "/*." . $this->option) as $filename) {
            $this->files[] = $filename;
        }
        return;
    }


    public function __construct($path, $option = "php")
    {
        $this->path = $path;
        $this->option = $option;
    }

}