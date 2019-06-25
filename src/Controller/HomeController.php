<?php
/**
 * Created by PhpStorm.
 * User: fchou
 * Date: 25/06/2019
 * Time: 11:04
 */

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function handle(): Response
    {
        return new Response('ok');
    }
}
