<?php
namespace Larisadebelova\ComposerPackage;

class StringProcessor
{
    public function getLength(string $str): int
    {
        return strlen($str);
    }
}