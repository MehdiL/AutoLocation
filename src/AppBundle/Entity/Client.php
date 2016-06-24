<?php
/**
 * Created by PhpStorm.
 * User: Zaralar
 * Date: 15/06/2016
 * Time: 15:34
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM ;
use Symfony\Component\Validator\Constraints as Assert;

/**
@ORM\Entity
@ORM\Table(name="client")
*/
class Client
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=75)
     * @Assert\Type(type="string")
     * @Assert\NotBlank()
     * @Assert\Min(limit=3)
     * @Assert\Max(limit=75)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=75)
     * @Assert\Type(type="string")
     * @Assert\NotBlank()
     * @Assert\Min(limit=3)
     * @Assert\Max(limit=75)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     * @Assert\Date()
     */
    private $dnaissance;

    /**
     * @ORM\Column(type="date")
     * @Assert\Date()
     */
    private $dpermis;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Max(limit=5)
     */
    private $codepostal;

    /**
     * @ORM\Column(type="string", length=75)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=150)
     * @Assert\NotBlank()
     * @Assert\Min(limit=3)
     * @Assert\Max(limit=75)
     */
    private $adresse;

}