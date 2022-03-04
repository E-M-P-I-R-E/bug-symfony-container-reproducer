<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\Translation\TranslatorInterface;

class ContainerTestController extends AbstractController
{
    public function test(TranslatorInterface $translator)
    {
    }
}
