<?php
/**
 * Created by PhpStorm.
 * User: jesda
 * Date: 23/06/18
 * Time: 11:03
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeneralController extends Controller
{

    /**
     * @Route( "/", name="homepage")
     */
    public function indexAction() {



       return $this->render('base.html.twig');
    }





}