<?php
interface FileInterface
{
    function open($filepath, $mode);
    function read();
    function close();
}