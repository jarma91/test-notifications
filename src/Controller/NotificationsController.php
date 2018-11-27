<?php

namespace App\Controller;

use App\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NotificationsController extends AbstractController
{

    private $entityManager;
    private $notificationRepository;

    public function __construct()
    {
        $this->entityManager = $this->getDoctrine()->getManager();
        $this->notificationRepository = $this->entityManager->getRepository(Notification::class);
    }

    /**
     * @Route("/notifications", name="notifications")
     */
    public function index()
    {
        $this->json($this->notificationRepository->findAll());
    }

    /**
     * @Route("/notification/{id}/read")
     */
    public function setAsRead($id)
    {
        $notification = $product = $this->notificationRepository->find($id);
        if(!$notification) {
            return $this->notificationNotFound();
        }

        $notification->setIsRead(true);
        $this->entityManager->flush();

        return $this->json(['message' => 'Notification status changed to Unread'], 200);
    }

    /**
     * @Route("/notification/{id}/unread")
     */
    public function setAsUnread($id)
    {
        $notification = $product = $this->notificationRepository->find($id);
        if(!$notification) {
            return $this->notificationNotFound();
        }

        $notification->setIsRead(false);
        $this->entityManager->flush();

        return $this->json(['message' => 'Notification status changed to Unread'], 200);
    }

    /**
     * @Route("/notification/send")
     */
    public function send()
    {

    }

    private function notificationNotFound()
    {
        return $this->json(['message' => 'Notification not found'], 404);
    }
}
