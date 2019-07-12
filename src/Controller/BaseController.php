<?php
/**
 * Created by PhpStorm.
 * User: cynthia
 * Date: 12/07/19
 * Time: 15:33
 */

namespace App\Controller;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

abstract class BaseController extends AbstractController
{
    protected function getUser(): User
    {
        return parent::getUser();
    }

}