<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Accounts
 *
 * @ORM\Table(name="accounts")
 * @ORM\Entity
 */
class Accounts
{
    const ACCOUNT_TYPE = [
        'customer' => 1,
        'admin' => 2,
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
     * @ORM\Column(name="adminUserID", type="integer", nullable=true)
     */
    private $adminuserid;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @var integer
     *
     * @ORM\Column(name="houseNumber", type="integer", nullable=true)
     */
    private $housenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="addressLine1", type="string", length=255, nullable=true)
     */
    private $addressline1;

    /**
     * @var string
     *
     * @ORM\Column(name="addressLine2", type="string", length=255, nullable=true)
     */
    private $addressline2;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="province", type="string", length=255, nullable=true)
     */
    private $province;

    /**
     * @var string
     *
     * @ORM\Column(name="postCode", type="string", length=16, nullable=true)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="countryCode", type="string", length=3, nullable=true)
     */
    private $countrycode;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;



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
     * Set adminuserid
     *
     * @param integer $adminuserid
     * @return Accounts
     */
    public function setAdminuserid($adminuserid)
    {
        $this->adminuserid = $adminuserid;

        return $this;
    }

    /**
     * Get adminuserid
     *
     * @return integer
     */
    public function getAdminuserid()
    {
        return $this->adminuserid;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Accounts
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Accounts
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set housenumber
     *
     * @param integer $housenumber
     * @return Accounts
     */
    public function setHousenumber($housenumber)
    {
        $this->housenumber = $housenumber;

        return $this;
    }

    /**
     * Get housenumber
     *
     * @return integer
     */
    public function getHousenumber()
    {
        return $this->housenumber;
    }

    /**
     * Set addressline1
     *
     * @param string $addressline1
     * @return Accounts
     */
    public function setAddressline1($addressline1)
    {
        $this->addressline1 = $addressline1;

        return $this;
    }

    /**
     * Get addressline1
     *
     * @return string
     */
    public function getAddressline1()
    {
        return $this->addressline1;
    }

    /**
     * Set addressline2
     *
     * @param string $addressline2
     * @return Accounts
     */
    public function setAddressline2($addressline2)
    {
        $this->addressline2 = $addressline2;

        return $this;
    }

    /**
     * Get addressline2
     *
     * @return string
     */
    public function getAddressline2()
    {
        return $this->addressline2;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Accounts
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set province
     *
     * @param string $province
     * @return Accounts
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return Accounts
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Accounts
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set countrycode
     *
     * @param string $countrycode
     * @return Accounts
     */
    public function setCountrycode($countrycode)
    {
        $this->countrycode = $countrycode;

        return $this;
    }

    /**
     * Get countrycode
     *
     * @return string
     */
    public function getCountrycode()
    {
        return $this->countrycode;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Accounts
     */
    public function setType($type)
    {
        $type = strtolower($type);
        if (false === array_key_exists($type, self::ACCOUNT_TYPE)) {
            throw new \InvalidArgumentException(sprintf('"%s" is not a valid account type parameter.', $type));
        }
        $this->type = self::ACCOUNT_TYPE[$type];
        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return array_search($this->type, self::ACCOUNT_TYPE);
    }
}
