<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity
 */
class Orders
{
    const ORDER_STATUS = [
        'cart' => 1,
        'pending_payment' => 2,
        'paid' => 3,
        'sent' =>4,
    ];

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
     * @ORM\Column(name="accountid", type="integer", nullable=false)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $total;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAdded", type="datetime", nullable=false)
     */
    private $dateadded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePaid", type="datetime", nullable=true)
     */
    private $datepaid;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=255, nullable=true)
     */
    private $comments;

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
     * Set accountid
     *
     * @param integer $accountid
     * @return Orders
     */
    public function setAccountId($accountid)
    {
        $this->accountid = $accountid;

        return $this;
    }

    /**
     * Get accountid
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountid;
    }

    /**
     * Set total
     *
     * @param string $total
     * @return Orders
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Orders
     */
    public function setStatus($status)
    {
        $status = strtolower($status);
        if (false === array_key_exists($status, self::ORDER_STATUS)) {
            throw new \InvalidArgumentException(sprintf('"%s" is not a valid status parameter.', $status));
        }

        $this->status = self::ORDER_STATUS[$status];

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return array_search($this->status, self::ORDER_STATUS);
    }

    /**
     * Set dateadded
     *
     * @param \DateTime $dateadded
     * @return Orders
     */
    public function setDateAdded($dateadded)
    {
        $this->dateadded = $dateadded;

        return $this;
    }

    /**
     * Get dateadded
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateadded;
    }

    /**
     * Set datepaid
     *
     * @param \DateTime $datepaid
     * @return Orders
     */
    public function setDatepaid($datepaid)
    {
        $this->datepaid = $datepaid;

        return $this;
    }

    /**
     * Get datepaid
     *
     * @return \DateTime
     */
    public function getDatePaid()
    {
        return $this->datepaid;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Orders
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }
}
