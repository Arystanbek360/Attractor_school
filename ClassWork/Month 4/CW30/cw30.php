<?php

class User
{
    public string $public = 'public';
    private string $private = 'private';
    protected string $protected = 'protected';

    protected function getPrivateMethod(): void
    {
        printf("private method:\n%s\n%s\n%s\n",
            $this->private,
            $this->protected,
            $this->public);
    }

    public function getPublicMethod(): void
    {
        echo "public method\n";
        $this->getPrivateMethod();
    }

    protected function getProtectedMethod(): void
    {
        echo $this->protected . "method\n";
    }
}

class Customer extends User
{
    public function getCustomerMethod(): void
    {
        echo $this->public . "\n";
        echo $this->protected . "\n";
    }
}

$User = new User();
$User->getPublicMethod();