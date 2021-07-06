<?php

namespace App\Controllers;
use App\Models\Entity\User;
use Daycry\Doctrine\Doctrine;
class Home extends BaseController
{
	public function index()
	{
        $doctrine = new Doctrine();
        $user = new User();
        $user->setEmail('idriss@gmail.com');
        $user->setUsername('tafo');
        $em =$doctrine->em;
        $em->persist($user);
        $em->flush();

		return view('welcome_message');
	}
}
