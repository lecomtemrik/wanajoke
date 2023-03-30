<?php

namespace App\Controller;

use App\Service\JokeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    const INDEX = 'home/index.html.twig';
    #[Route('/', name: 'app_home')]
    public function index(JokeService $jokeService): Response
    {
        $jokeContent = $jokeService->getJoke('random');
        $jokeQuestion = $jokeContent['question'];
        $jokeAnswer = $jokeContent['answer'];
        $jokeType = $jokeContent['type'];

        return $this->render(self::INDEX, [
            'question' => $jokeQuestion,
            'answer' => $jokeAnswer,
            'type' => $jokeType,
            'route' => "{{ path('app_home') }}",
        ]);
    }

    #[Route('/global', name: 'app_global')]
    public function globalJoke(JokeService $jokeService): Response
    {
        $jokeContent = $jokeService->getJoke('global');
        $jokeQuestion = $jokeContent['question'];
        $jokeAnswer = $jokeContent['answer'];
        $jokeType = $jokeContent['type'];
        dump($jokeType);

        return $this->render(self::INDEX, [
            'question' => $jokeQuestion,
            'answer' => $jokeAnswer,
            'type' => $jokeType,
        ]);
    }

    #[Route('/dark', name: 'app_dark')]
    public function darkJoke(JokeService $jokeService): Response
    {
        $jokeContent = $jokeService->getJoke('dark');
        $jokeQuestion = $jokeContent['question'];
        $jokeAnswer = $jokeContent['answer'];
        $jokeType = $jokeContent['type'];

        return $this->render(self::INDEX, [
            'question' => $jokeQuestion,
            'answer' => $jokeAnswer,
            'type' => $jokeType,
        ]);
    }

    #[Route('/dev', name: 'app_dev')]
    public function devJoke(JokeService $jokeService): Response
    {
        $jokeContent = $jokeService->getJoke('dev');
        $jokeQuestion = $jokeContent['question'];
        $jokeAnswer = $jokeContent['answer'];
        $jokeType = $jokeContent['type'];

        return $this->render(self::INDEX, [
            'question' => $jokeQuestion,
            'answer' => $jokeAnswer,
            'type' => $jokeType,
        ]);
    }

    #[Route('/limit', name: 'app_limit')]
    public function limitJoke(JokeService $jokeService): Response
    {
        $jokeContent = $jokeService->getJoke('limit');
        $jokeQuestion = $jokeContent['question'];
        $jokeAnswer = $jokeContent['answer'];
        $jokeType = $jokeContent['type'];

        return $this->render(self::INDEX, [
            'question' => $jokeQuestion,
            'answer' => $jokeAnswer,
            'type' => $jokeType,
        ]);
    }
}
