<?php
class CSVFile implements FileInterface 
{
    protected $fp;
    public function open($filepath, $mode)
    {
        $this->fp = fopen($filepath, $mode);
    }
    public function read()
    {
        if ($this->fp != null)
        {
            return fgetcsv($this->fp);
        }
    }
    public function close()
    {
        fclose($this->fp);
        $this->fp = null;
    }
}