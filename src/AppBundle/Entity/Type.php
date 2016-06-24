<?php
/**
 * Created by PhpStorm.
 * User: Zaralar
 * Date: 21/06/2016
 * Time: 15:29
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM ;

/**
@ORM\Entity
@ORM\Table(name="type")
 */
class Type
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=75)     
     */
    private $Nom;

}