<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use App\Model\WitchManager;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $witchManager = new WitchManager();
        $witches = $witchManager->selectAll();
        $witches['GROUP_CONCAT(attribute.name)'] = explode(',', $witches['GROUP_CONCAT(attribute.name)']);
        return $this->twig->render('Home/index.html.twig', [
            'witches' => $witches,
        ]);
    }
}
