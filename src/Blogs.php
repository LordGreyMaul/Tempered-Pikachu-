<?php


use Doctrine\ORM\Mapping as ORM;

/**
 * Blogs
 *
 * @ORM\Table(name="blogs")
 * @ORM\Entity
 */
class Blogs
{
//name, tags, content, featured image, date time stamp, author

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $tags;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true, unique=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="featuredImage", type="text", nullable=false, unique=false)
     */
    private $featuredImage;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $author;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAdded", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $dateAdded;



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
     * @return Blogs
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
     * Set tags
     *
     * @param string $tags
     * @return Blogs
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Blogs
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set featuredImage
     *
     * @param string $featuredImage
     * @return Blogs
     */
    public function setFeaturedImage($featuredImage)
    {
        $this->featuredImage = $featuredImage;

        return $this;
    }

    /**
     * Get featuredImage
     *
     * @return string
     */
    public function getFeaturedImage()
    {
        return $this->featuredImage;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Blogs
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set dateAdded
     *
     * @param $dateAdded
     * @return Blogs
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }
}