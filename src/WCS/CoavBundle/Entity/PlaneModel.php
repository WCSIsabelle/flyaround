<?php

namespace WCS\CoavBundle\Entity;

/**
 * PlaneModel
 */
class PlaneModel
{
    
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $manufacturer;

    /**
     * @var int
     */
    private $cruiseSpeed;

    /**
     * @var int
     */
    private $nbSeats;

    /**
     * @var string
     */
    private $status;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return PlaneModel
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     *
     * @return PlaneModel
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set cruiseSpeed
     *
     * @param integer $cruiseSpeed
     *
     * @return PlaneModel
     */
    public function setCruiseSpeed($cruiseSpeed)
    {
        $this->cruiseSpeed = $cruiseSpeed;

        return $this;
    }

    /**
     * Get cruiseSpeed
     *
     * @return int
     */
    public function getCruiseSpeed()
    {
        return $this->cruiseSpeed;
    }

    /**
     * Set nbSeats
     *
     * @param integer $nbSeats
     *
     * @return PlaneModel
     */
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;

        return $this;
    }

    /**
     * Get nbSeats
     *
     * @return int
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return PlaneModel
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $departures;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->departures = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add departure
     *
     * @param \WCS\CoavBundle\Entity\Flight $departure
     *
     * @return PlaneModel
     */
    public function addDeparture(\WCS\CoavBundle\Entity\Flight $departure)
    {
        $this->departures[] = $departure;

        return $this;
    }

    /**
     * Remove departure
     *
     * @param \WCS\CoavBundle\Entity\Flight $departure
     */
    public function removeDeparture(\WCS\CoavBundle\Entity\Flight $departure)
    {
        $this->departures->removeElement($departure);
    }

    /**
     * Get departures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepartures()
    {
        return $this->departures;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $planes;


    /**
     * Add plane
     *
     * @param \WCS\CoavBundle\Entity\Flight $plane
     *
     * @return PlaneModel
     */
    public function addPlane(\WCS\CoavBundle\Entity\Flight $plane)
    {
        $this->planes[] = $plane;

        return $this;
    }

    /**
     * Remove plane
     *
     * @param \WCS\CoavBundle\Entity\Flight $plane
     */
    public function removePlane(\WCS\CoavBundle\Entity\Flight $plane)
    {
        $this->planes->removeElement($plane);
    }

    /**
     * Get planes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlanes()
    {
        return $this->planes;
    }
}
