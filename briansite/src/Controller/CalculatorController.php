<?php
/**
 * Created by PhpStorm.
 * User: Brian
 * Date: 8/10/2018
 * Time: 8:46 PM
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
class CalculatorController
{
    public function number()
    {
        try {
            $number = random_int(0, 100);
        } catch (\Exception $e) {
        }

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}