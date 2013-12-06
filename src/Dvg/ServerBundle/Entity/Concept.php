<?php
namespace Dvg\ServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Dvg\ServerBundle\Entity\ConceptRepository")
 */
class Concept
{
	/**
  * @ORM\Column(name="id_concept", type="integer")
	* @ORM\Id
  */
	protected $id_concept;

	/**
  * @ORM\Column(name="nom_concept", type="string", length=255)
  */
	protected $nom_concept;

	public function getId_concept()
	{
		return $this -> id_concept;
	}

	public function getNom_concept()
	{
		return $this -> nom_concept;
	}

	public function setId_concept($id_concept)
	{
		$this -> id_concept = $id_concept;
	}

	public function setNom_concept($nom_concept)
	{
		$this -> nom_concept = $nom_concept;
	}

}

?>
