<?php

class FWrite {
    public $name;
    public $file;

    public function __construct($name)
    {
        $this->name = $name;
        $this->file = fopen($name, 'r');
    }

    public function writeFile ($text) {
        fwrite($this->file, $text);
    }

    public function readFile () {
        return file_get_contents($this->name);
    }

    public function updateFile ($text) {
        $len = preg_replace('/\s/', "    ", $text);
        fclose($this->file);
        unlink($this->name);
        $this->name = $this->name . '1';
        $this->file = fopen($this->name, 'w');
        fwrite($this->file, $len);
    }

    public function __destruct()
    {
        fclose($this->file);
    }

}
