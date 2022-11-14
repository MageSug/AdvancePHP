<?php 

namespace FIE;

class TextFileService implements FileInterface {

	private string $filePath;
	// private string $sourceFile;
	// private string $destinationFile;

	private $fp;

	public function __construct(?string $pathToFile = null) {
		$this->filePath = $pathToFile;
		if(!empty($this->filePath)) {
			// Text file opened
			// echo basename($this->filePath) .PHP_EOL;
			// echo dirname($this->filePath, 1) .PHP_EOL;
			$this->fp = fopen($this->filePath, "r");
		}
	}

	public function read() {
		while(($row = fread($this->fp, filesize($this->filePath))) != false) {
			echo $row;
		}
        fclose($this->fp);
	}

	public function copy(?string $source = null, string $destination = null) {
		$this->sourceFile = $source;
		$this->destinationFile = $destination;
		if(copy($this->sourceFile, $this->destinationFile)) {
			echo "copy success <br>";
		}
	}

	public function delete(?string $pathToFile = null) {
		$this->filePath = $pathToFile;
		if(!empty($this->filePath) and $this->filePath !== null) {
			unlink($this->filePath);
			echo "Delete successful <br>";
		}
	}

}