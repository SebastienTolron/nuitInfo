<?php
namespace Dvg\ServerBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Dvg\ServerBundle\Entity\FamilleRepository")
 */
class Famille
{
    /**
     * @ORM\Column(name="id_famille", type="integer")
     * @ORM\Id
     */
    protected $id_famille;
    
    /**
     * @ORM\Column(name="nom_famille", type="string", length=255)
     * 
     */
    protected $nom_famiile;
    
    
    public function getId_famille()
    {
        return $this -> id_famille;
    }
    
    public function getNom_famille()
    {
        return $this -> nom_famille;
    }
    
    public function setId_famille($id_famille)
    {
        $this -> id_famille = $id_famille;
    }
    
    public function setNom_famille($nom_famille)
    {
        $this -> nom_famille = $nom_famille;
    }
    
}
?>
