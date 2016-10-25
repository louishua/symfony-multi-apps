<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="test")
 */
class Test
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $name;

    /**
     * @ORM\Column(type="decimal", scale=3)
     */
    protected $price;

    /**
     * @ORM\Column(type="text")
     */
    protected $memo;


    public function setName($name)
    {
        $this->name = $name;
        return;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return;
    }

    public function setMemo($memo)
    {
        $this->memo = $memo;
        return;
    }

}