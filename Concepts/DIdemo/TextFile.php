<?php

class TextFile implements FileInterface
{
    protected $fp = null;
    public function open($filepath, $mode)
    {
        $this->fp = fopen($filepath, $mode);
    }
    public function read()
    {
        if ($this->fp != null)
        {
            return fread($this->fp);
        }
    }
    public function close()
    {
        fclose($this->fp);
        $this->fp = null;
    }
}