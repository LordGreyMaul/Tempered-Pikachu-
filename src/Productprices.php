<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Productprices
 *
 * @ORM\Table(name="productPrices", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQUE_PRICE", columns={"productID", "dateFrom"})})
 * @ORM\Entity
 */
class Productprices
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
     * @ORM\Column(name="productID", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $productid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFrom", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $datefrom;

    /**
     * @var string
     *
     * @ORM\Column(name="productPrice", type="decimal", precision=11, scale=2, nullable=true, unique=false)
     */
    private $productprice;



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
     * Set productid
     *
     * @param integer $productid
     * @return Productprices
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
     * Set datefrom
     *
     * @param \DateTime $datefrom
     * @return Productprices
     */
    public function setDatefrom($datefrom)
    {
        $this->datefrom = $datefrom;

        return $this;
    }

    /**
     * Get datefrom
     *
     * @return \DateTime 
     */
    public function getDatefrom()
    {
        return $this->datefrom;
    }

    /**
     * Set productprice
     *
     * @param string $productprice
     * @return Productprices
     */
    public function setProductprice($productprice)
    {
        $this->productprice = $productprice;

        return $this;
    }

    /**
     * Get productprice
     *
     * @return string 
     */
    public function getProductprice()
    {
        return $this->productprice;
    }
}
