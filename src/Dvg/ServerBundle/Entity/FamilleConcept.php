<?php
namespace Dvg\ServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Dvg\ServerBundle\Entity\FamilleConceptRepository")
 */
class FamilleConcept
{
	/**
  * @ORM\Column(name="id_concept", type="integer")
	* @ORM\Id
  */
	protected $id_concept;

	/**
    * @ORM\Column(name="id_famille", type="integer")
    * @ORM\Id
    */
  protected $id_famille;

	public function getId_concept()
	{
		return $this -> id_concept;
	}

	public function getId_famille()
    {
        return $this -> id_famille;
    }

	public function setId_concept($id_concept)
	{
		$this -> id_concept = $id_concept;
	}

	public function setId_famille($id_famille)
    {
        $this -> id_famille = $id_famille;
    }

}

?>
