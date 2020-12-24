<?php


class Flash
{
    private $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function setMessage($key, $val)
    {
        $this->session->setSession($key, $val);
    }

    public function getMessage($key)
    {
        return $this->session->getSession($key);
    }
}