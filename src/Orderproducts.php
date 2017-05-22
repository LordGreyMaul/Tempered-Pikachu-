<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Orderproducts
 *
 * @ORM\Table(name="orderProducts", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQUE_ORDER", columns={"orderID", "productID"})})
 * @ORM\Entity
 */
class Orderproducts
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
     * @ORM\Column(name="orderID", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $orderid;

    /**
     * @var integer
     *
     * @ORM\Column(name="productID", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $productid;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
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
     * Set orderid
     *
     * @param integer $orderid
     * @return Orderproducts
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
     * Set productid
     *
     * @param integer $productid
     * @return Orderproducts
     */
    public function setProductid($productid)
    {
        $this->productid = $productid;

        return $this;
    }

    /**
     * Get productid
     *
     * @return integer 
     */
    public function getProductid()
    {
        return $this->productid;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Orderproducts
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Orderproducts
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
