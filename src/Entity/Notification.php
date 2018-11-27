<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NotificationRepository")
 */
class Notification
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    private $sent_time;

    /**
     * @ORM\Column(type="integer")
     */
    private $sender_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $recipient_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $message_id;

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $is_read;

    /**
     * @ORM\Column(type="integer", options={"default": 0})
     */
    private $priority;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSentTime(): ?\DateTimeInterface
    {
        return $this->sent_time;
    }

    public function setSentTime(\DateTimeInterface $sent_time): self
    {
        $this->sent_time = $sent_time;

        return $this;
    }

    public function getSenderId(): ?int
    {
        return $this->sender_id;
    }

    public function setSenderId(int $sender_id): self
    {
        $this->sender_id = $sender_id;

        return $this;
    }

    public function getRecipientId(): ?int
    {
        return $this->recipient_id;
    }

    public function setRecipientId(int $recipient_id): self
    {
        $this->recipient_id = $recipient_id;

        return $this;
    }

    public function getMessageId(): ?int
    {
        return $this->message_id;
    }

    public function setMessageId(int $message_id): self
    {
        $this->message_id = $message_id;

        return $this;
    }

    public function getIsRead(): ?bool
    {
        return $this->is_read;
    }

    public function setIsRead(bool $is_read): self
    {
        $this->is_read = $is_read;

        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }
}
