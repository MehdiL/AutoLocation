<?php
/**
 * Created by PhpStorm.
 * User: Zaralar
 * Date: 21/06/2016
 * Time: 15:32
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM ;


/**
@ORM\Entity
@ORM\Table(name="categorie")
 */
class Categorie
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id ;

    /**
     * @ORM\ManyToOne(targetentity="type", inversedby="categorie")
     * @ORM\JoinColumn(name="type_id" ,referencedColumnName="id")
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=75)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $agelimite;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $equipement;

    /**
     * @ORM\Column(type="boolean")
     */
    private $climatisation;

    /**
     * @ORM\Column(type="string",length =20 )
     */
    private $carburant;

    /**
     * @ORM\Column(type="string",length =20 )
     */
    private $boite;

    /**
     * @ORM\Column(type="string",length =200 )
     */
    private $details;



}