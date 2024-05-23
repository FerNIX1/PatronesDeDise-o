<?php

class Windows7File {
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function open() {
        return "Abriendo el archivo {$this->filename} en Windows 7";
    }
}

class Windows10File {
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function open() {
        return "Abriendo el archivo {$this->filename} en Windows 10";
    }
}

class Windows7ToWindows10Adapter extends Windows10File {
    private $windows7file;

    public function __construct(Windows7File $windows7file) {
        $this->windows7file = $windows7file;
    }

    public function open() {
        return $this->windows7file->open();
    }
}

// Uso del adaptador
$windows7file = new Windows7File("documento.docx");
$adapter = new Windows7ToWindows10Adapter($windows7file);
echo $adapter->open();  // Abriendo el archivo documento.docx en Windows 7

?>
