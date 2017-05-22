<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * OrderDeliveries
 *
 * @ORM\Table(name="orderDeliveries")
 * @ORM\Entity
 */
class OrderDeliveries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="orderID", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $orderid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAdded", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $dateadded;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="trackingNumber", type="string", length=255, nullable=true)
     */
    private $trackingNumber;



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
     * Set orderid
     *
     * @param integer $orderid
     * @return OrderDeliveries
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;

        return $this;
    }

    /**
     * Get orderid
     *
     * @return integer 
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * Set dateadded
     *
     * @param \DateTime $dateadded
     * @return OrderDeliveries
     */
    public function setDateadded($dateadded)
    {
        $this->dateadded = $dateadded;

        return $this;
    }

    /**
     * Get dateadded
     *
     * @return \DateTime 
     */
    public function getDateadded()
    {
        return $this->dateadded;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return OrderDeliveries
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set trackingNumber
     *
     * @param string $trackingNumber
     * @return OrderDeliveries
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    /**
     * Get trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }
}
