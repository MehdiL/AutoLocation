<?php
/**
 * Created by PhpStorm.
 * User: Zaralar
 * Date: 21/06/2016
 * Time: 15:25
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM ;
use Symfony\Component\Validator\Constraints as Assert;

/**
@ORM\Entity
@ORM\Table(name="voiture")
 */

class Voiture
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetentity="categorie", inversedby="voiture")
     * @ORM\JoinColumn(name="categorie_id" ,referencedColumnName="id")
     */
    private $categorie;

    /**
     * @ORM\ManyToOne(targetentity="agence", inversedby="voiture")
     * @ORM\JoinColumn(name="agence_id" ,referencedColumnName="id")
     */
    private $agence;
    
    /**
     * @ORM\Column(type="string", length=75)
     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=75)
     */
    private $modele;

    
}