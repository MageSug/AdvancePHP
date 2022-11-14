<?php 
namespace FIE;
class FileHandling {
	private FileInterface $iFile;

	public function __construct(FileInterface $fileI) {
		$this->iFile = $fileI;
	}

	public function readFile() {
		$this->iFile->read();
	}
}