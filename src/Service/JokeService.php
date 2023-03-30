<?php

namespace App\Service;

use Blagues\BlaguesApi;
use Blagues\Exceptions\JokeException;
use Blagues\JokeTypeInterface;
use GuzzleHttp\Exception\GuzzleException;

class JokeService
{
    /**
     * @throws JokeException
     * @throws GuzzleException
     */
    public function getJoke($type): array
    {
        $blaguesApi = new BlaguesApi($_ENV['TOKEN_BLAGUE_API']);
        if ($type == 'random') {
            $joke = $blaguesApi->getRandom();
        }
        if ($type == 'global') {
            $joke = $blaguesApi->getByType(JokeTypeInterface::TYPE_GLOBAL);
        }
        if ($type == 'dev') {
            $joke = $blaguesApi->getByType(JokeTypeInterface::TYPE_DEV);
        }
        if ($type == 'dark') {
            $joke = $blaguesApi->getByType(JokeTypeInterface::TYPE_DARK);
        }
        if ($type == 'limit') {
            $joke = $blaguesApi->getByType(JokeTypeInterface::TYPE_LIMIT);
        }

        $jokeQuestion = $joke->getJoke();
        $jokeAnswer = $joke->getAnswer();
        $jokeType = $joke->getType();

        if ($jokeType == 'global') {
            $jokeType = 'Normal';
        }
        if ($jokeType == 'dev') {
            $jokeType = 'Dev';
        }
        if ($jokeType == 'limit') {
            $jokeType = 'Adulte';
        }
        if ($jokeType == 'dark') {
            $jokeType = 'Humour noir';
        }

        return ['question'=>$jokeQuestion,'answer'=>$jokeAnswer,'type'=>$jokeType];

    }
}