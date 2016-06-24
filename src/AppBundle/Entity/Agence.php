<?php
/**
 * Created by PhpStorm.
 * User: Zaralar
 * Date: 21/06/2016
 * Time: 15:54
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM ;

/**
@ORM\Entity
@ORM\Table(name="categorie")
 */
class Agence
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $codepostal;

    /**
     * @ORM\Column(type="string", length=75)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $adresse;

}