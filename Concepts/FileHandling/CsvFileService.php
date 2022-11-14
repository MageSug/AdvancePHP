<?php

namespace FIE;

class CsvFileService implements FileInterface {
    private string $filePath;
    private $fp;
    public function __construct(?string $pathToFile = null) {
        $this->filePath = $pathToFile;
        if(!empty($this->filePath)) {
            // Csv File opened
            $this->fp = fopen($this->filePath, "r");
        }
    }

    public function read() {
		while(($row = fgetcsv($this->fp, 10, ',')) !== false) {
			$n = count($row);
            for($i=0; $i<$n; $i++) {
                echo $row[$i];
            }
            echo "<br>";
		}
        fclose($this->fp);
    }
}