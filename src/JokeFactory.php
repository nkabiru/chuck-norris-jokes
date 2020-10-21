<?php

namespace Nkabiru\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'If Chuck Norris were to travel to an alternate dimension in which there was another Chuck Norris and they both fought, they would both win.',
        'Chuck Norris counted to infinity… twice.',
        'Once a cobra bit Chuck Norris’ leg. After five days of excruciating pain, the cobra died.',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
