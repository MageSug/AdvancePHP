<?php

namespace Sp;

interface SearchingInterface {

    public function search(array $data, $value): string;
}