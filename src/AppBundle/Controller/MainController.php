<?php
/**
 * Created by PhpStorm.
 * User: Sale
 * Date: 11/27/2017
 * Time: 5:29 PM
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }

}
