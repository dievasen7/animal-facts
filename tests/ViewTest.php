<?php

// src/tests/ViewTest.php

use App\View\View;

define('VIEW_DIR','views');
define('EXPECTED_RENDER_STR',
        '<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title><?= $title; ?></title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1><?= $title; ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?= $content; ?>
                </div>
            </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>');

define('EXPECTED_RENDER_ERR','');

/**
 * Test View class
 *
 * @author Asen Diev <dievasen7@gmail.com>
 */
class ViewTest extends PHPUnit\Framework\TestCase 
{
    /**
     * Test View's render method
     * @test
     */
    public function testRenderMethodWithExistingView()
    {
        $view = new View(VIEW_DIR);
        $renderedView = $view->render('layout',['title','content']);
        $this->assertEquals(EXPECTED_RENDER_STR,$renderedView );
    }
    
    /**
     * Test View's render method
     * @test
     */
    public function testRenderMethodWithNonExistingView()
    {
        $view = new View(VIEW_DIR);
 	$renderedView = $view->render('error/noview',['name']);
        $this->assertEquals(EXPECTED_RENDER_ERR,$renderedView );
    }
}
