<?php
/**
 * Created by PhpStorm.
 * User: Mounir
 * Date: 22/08/2016
 * Time: 12:23
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function helloAction(){

        return $this->render("AppBundle::index.html.twig");
    }
}