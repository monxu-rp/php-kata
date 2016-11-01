<?php

namespace Kata;

/**
 * Class HelloWorld.
 */
class HelloWorld
{
    const HELLO_WORLD = 'Hello World';

    /**
     * @param string $name
     *
     * @return string
     */
    public function say($name) : string
    {
        return $this->isNullOrEmptyString($name) ? self::HELLO_WORLD : $name;
    }

    /**
     * @param $name
     *
     * @return string
     */
    private function isNullOrEmptyString($name) : string
    {
        return !isset($name) || trim($name) === '';
    }
}
