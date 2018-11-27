<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NotificationsController extends AbstractController
{
    /**
     * @Route("/notifications", name="notifications")
     */
    public function index()
    {

    }

    /**
     * @Route("/notification/{id}/read")
     */
    public function setAsRead($id)
    {

    }

    /**
     * @Route("/notification/{id}/unread")
     */
    public function setAsUnread($id)
    {

    }

    /**
     * @Route("/notification/send")
     */
    public function send()
    {

    }
}
