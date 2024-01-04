<?php

namespace App\Forms\User;

class UserForm
{
    private int $id;
    private string $name;
    private string $email;
    private string $password;
    private ?\DateTime $deactivedAt;

    public function getId(): int
    {
        return $this->id;
    }
    public function setId(mixed $id): self
    {
        $this->id = intval($id);
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getDeactivedAt(): ?\DateTime
    {
        return $this->deactivedAt ?? null;
    }
    public function setDeactivedAt(mixed $deactivedAt): self
    {
        if (is_string($deactivedAt)) {
            $this->deactivedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $deactivedAt);
        } else if ($deactivedAt instanceof \DateTime) {
            $this->deactivedAt = $deactivedAt;
        } else {
            $this->deactivedAt = null;
        }
        return $this;
    }
}
