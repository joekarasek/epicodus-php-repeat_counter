<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array(
            'form' => true
        ));
    });

    $app->get("/result", function() use ($app) {
        $my_RepeatCounter = new RepeatCounter;
        $result = $my_RepeatCounter->CountRepeat($_GET['phrase'], $_GET['word_to_count']);

        return $app['twig']->render('index.html.twig', array(
            'form' => true,
            'message' => array(
                'type' => 'info',
                'text' => 'The method CountRepeat found ' . $result . ' instances of the word "' . $_GET['word_to_count'] . '" in the phrase you provided.'
            )
        ));
    });

    return $app;
?>
