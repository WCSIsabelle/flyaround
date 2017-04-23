<?php

namespace WCS\CoavBundle\Entity;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $pilot;

    /**
     * @var \WCS\CoavBundle\Entity\Reservation
     */
    private $reservations;


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
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set pilot
     *
     * @param string $pilot
     *
     * @return User
     */
    public function setPilot($pilot)
    {
        $this->pilot = $pilot;

        return $this;
    }

    /**
     * Get pilot
     *
     * @return string
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * Set reservations
     *
     * @param \WCS\CoavBundle\Entity\Reservation $reservations
     *
     * @return User
     */
    public function setReservations(\WCS\CoavBundle\Entity\Reservation $reservations = null)
    {
        $this->reservations = $reservations;

        return $this;
    }

    /**
     * Get reservations
     *
     * @return \WCS\CoavBundle\Entity\Reservation
     */
    public function getReservations()
    {
        return $this->reservations;
    }
}
