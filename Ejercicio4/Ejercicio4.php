<?php

interface OutputStrategy {
    public function output($message);
}

class ConsoleOutputStrategy implements OutputStrategy {
    public function output($message) {
        echo $message;
    }
}

class JSONOutputStrategy implements OutputStrategy {
    public function output($message) {
        echo json_encode(["message" => $message]);
    }
}

class FileOutputStrategy implements OutputStrategy {
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function output($message) {
        file_put_contents($this->filename, $message);
    }
}

class MessageContext {
    private $strategy;

    public function __construct(OutputStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function setStrategy(OutputStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function showMessage($message) {
        $this->strategy->output($message);
    }
}

// Uso del patrón Strategy
$message = "Hola, Mundo!";

$consoleStrategy = new ConsoleOutputStrategy();
$jsonStrategy = new JSONOutputStrategy();
$fileStrategy = new FileOutputStrategy("message.txt");

$context = new MessageContext($consoleStrategy);
$context->showMessage($message);  // Muestra en consola

$context->setStrategy($jsonStrategy);
$context->showMessage($message);  // Muestra en formato JSON

$context->setStrategy($fileStrategy);
$context->showMessage($message);  // Guarda en archivo TXT

?>
    