<?php
class Account
{
    public function __construct(private Int $number, private String $owner, private Float $saldo)
    {
        // $this->setNumber($number);
        // $this->setOwner($owner);
        // $this->setSaldo($saldo);
    }

    public function getNumber()
    {
        return $this->number;
    }
    public function setNumber($number)
    {
        $this->number = $number;
    }
    public function getOwner()
    {
        return $this->owner;
    }
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function ShowAttributes()
    {
        echo "<br> Numero: " . $this->getNumber();
        echo "<br> Dono: " . $this->getOwner();
        echo "<br> Saldo: " . $this->getSaldo();
    }
}

$a1 = new Account(2, "Arthur Nonaka", 1245);
$a1->ShowAttributes();
