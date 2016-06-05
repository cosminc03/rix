<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 6/4/16
 * Time: 7:17 PM
 */
namespace RIX\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
* Direction
*
 *@ORM\Table(name="direction")
* @Vich\Uploadable
* @ORM\Entity(repositoryClass="RIX\CoreBundle\Repository\UserRepository")
* @UniqueEntity(fields="email", message="That email is taken")
*/
class Direction
{

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
     */
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="previousId", type="string")
     */
    public $previousId;

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Direction
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set previousId
     *
     * @param string $previousId
     *
     * @return Direction
     */
    public function setPreviousId($previousId)
    {
        $this->previousId = $previousId;

        return $this;
    }

    /**
     * Get previousId
     *
     * @return string
     */
    public function getPreviousId()
    {
        return $this->previousId;
    }
}
