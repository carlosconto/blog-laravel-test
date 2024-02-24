<?php
declare(strict_types=1);

namespace Context\Models;

class Author
{
    private string $gender;

    private string $name;

    private string $email;

    private string $urlImage;

    public function __construct(string $gender, string $name, string $email, string $urlImage)
    {
        $this->gender = $gender;
        $this->name = $name;
        $this->email = $email;
        $this->urlImage = $urlImage;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getUrlImage(): string
    {
        return $this->urlImage;
    }

    public static function fromArray(string $name, string $email, string $urlImage, string $gender): Author
    {
        return new Author($gender, $name, $email, $urlImage);
    }

    public function toArray(): array
    {
        return [
            'gender' => $this->getGender(),
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'url_image' => $this->getUrlImage(),
        ];
    }
}
