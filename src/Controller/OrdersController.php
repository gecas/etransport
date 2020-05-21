<?php

namespace App\Controller;

use App\Entity\Flower;
use Carbon\Carbon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class OrdersController extends AbstractController
{
    /**
     * @var SessionInterface
     */
    private $session;

    /**
     * OrdersController constructor.
     * @param SessionInterface $session
     */
    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * @param Request $request
     * @param ValidatorInterface $validator
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/flowers/order", methods={"POST"})
     */
    public function flowers(Request $request, ValidatorInterface $validator)
    {
        $flower = new Flower();
        $flower->setFullname($request->request->get('name'));
        $flower->setEmail($request->request->get('email'));
        $flower->setAddress($request->request->get('address'));
        $flower->setFlowers(implode(", ", $request->request->get('flowers')));
        $flower->setDeliverOn(Carbon::createFromDate($request->request->get('deliver_on')));
        $flower->setCreatedAt(Carbon::now('Europe/Vilnius'));
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($flower);
        $entityManager->flush();

        $errors = $validator->validate($flower);
        if (count($errors) > 0) {
            $this->session->set('errors', $errors);
        }
        return $this->redirect('/flowers');
    }
}