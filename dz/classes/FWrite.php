<?php

class FWrite {
    public $name;
    public $file;

    public function __construct($name)
    {
        $this->name = $name;
        $this->file = fopen($name, 'w');
    }

    public function writeFile ($text) {
        fwrite($this->file, $text);
    }

    public function __destruct()
    {
        fclose($this->file);
    }

}
