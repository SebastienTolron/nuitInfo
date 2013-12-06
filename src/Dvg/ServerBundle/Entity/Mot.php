<?php
namespace Dvg\ServerBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Dvg\ServerBundle\Entity\MotRepository")
 */
class Mot
{
    /**
     * @ORM\Column(name="id_mot", type="integer")
     * @ORM\Id
     */
    protected $id_mot;
    
    /**
     * @ORM\Column(name="mot", type="string", length=255)
     */
    protected $mot;
    
    /**
     * @ORM\Column(name="id_concept", type="integer")
     * @ORM\Id
     */
    protected $id_concept;
    
    public function getId_mot()
    {
        return $this -> id_mot;
    }
    
    public function getMot()
    {
        return $this -> mot;
    }
    
    public function getId_concept()
    {
        return $this -> id_concept;
    }
    
    public function setId_mot($id_mot)
    {
        $this -> id_mot = $id_mot;
    }
    
    public function setMot($mot)
    {
        $this -> mot = $mot;
    }
    
    public function setId_concept($id_concept)
    {
        $this -> id_concept = $id_concept;
    }
    
}
?>
