<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Orderdeliveries
 *
 * @ORM\Table(name="orderDeliveries")
 * @ORM\Entity
 */
class Orderdeliveries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="orderID", type="integer", nullable=true)
     */
    private $orderid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAdded", type="datetime", nullable=false)
     */
    private $dateadded;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;



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
     * @return Orderdeliveries
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
     * @return Orderdeliveries
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
     * @return Orderdeliveries
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
}
