<?php
/**
 * Created by PhpStorm.
 * User: bostaf
 * Date: 18.06.16
 * Time: 14:54
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MovieRepository")
 * @ORM\Table(name="movie")
 */
class Movie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $samsCharacterName;

    /**
     * @ORM\Column(type="integer")
     */
    private $rating;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isMainCharacter = false;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $releasedAt;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getSamsCharacterName()
    {
        return $this->samsCharacterName;
    }

    /**
     * @param mixed $samsCharacterName
     */
    public function setSamsCharacterName($samsCharacterName)
    {
        $this->samsCharacterName = $samsCharacterName;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getIsMainCharacter()
    {
        return $this->isMainCharacter;
    }

    /**
     * @param mixed $isMainCharacter
     */
    public function setIsMainCharacter($isMainCharacter)
    {
        $this->isMainCharacter = $isMainCharacter;
    }

    /**
     * @return mixed
     */
    public function getReleasedAt()
    {
        return $this->releasedAt;
    }

    /**
     * @param mixed $releasedAt
     */
    public function setReleasedAt($releasedAt)
    {
        $this->releasedAt = $releasedAt;
    }


}