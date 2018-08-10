<?php
/**
 * Created by PhpStorm.
 * User: Brian
 * Date: 8/10/2018
 * Time: 8:46 PM
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number")
     */
    public function number()
    {
        try {
            $number = random_int(0, 100);
        } catch (\Exception $e) {
        }

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }
}