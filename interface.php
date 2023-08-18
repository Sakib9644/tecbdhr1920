<?php

interface Logger {
    public function log($message);
}

class ConsoleLogger implements Logger {
    public function log($message) {
        echo "Console Logger: " . $message . "\n";
    }
}

class FileLogger implements Logger {
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function log($message) {
        echo "File Logger (" . $this->filename . "): " . $message . "\n";
    }
}

class LoggingDemo {
    public function run() {
        $consoleLogger = new ConsoleLogger();
        $fileLogger = new FileLogger("log.txt");

        $consoleLogger->log("This is a console log message.");
        $fileLogger->log("This is a file log message.");
    }
}

$demo = new LoggingDemo();
$demo->run();

?>
