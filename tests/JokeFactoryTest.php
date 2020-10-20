<?php

namespace Nkabiru\ChuckNorrisJokes\Tests;

use Nkabiru\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_should_return_true()
    {
        $jokes = new JokeFactory([
            'This is a joke'
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $chuckNorrisJokes = [
            'If Chuck Norris were to travel to an alternate dimension in which there was another Chuck Norris and they both fought, they would both win.',
            'Chuck Norris counted to infinity… twice.',
            'Once a cobra bit Chuck Norris’ leg. After five days of excruciating pain, the cobra died.'
        ];

        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}