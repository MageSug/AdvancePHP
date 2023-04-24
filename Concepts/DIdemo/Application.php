<?php
class Application
{
    protected $file;
    public function __construct(FileInterface $file, $filepath, $mode)
    {
        $this->file = $file;
        $this->file->open($filepath, $mode);
    }
    public function readLog()
    {
    }
}

$app = new Application;
$app->readLog();