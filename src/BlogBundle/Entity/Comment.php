<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Comment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="comments", cascade={"persist"})
     */
    private $user;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="comments" , cascade={"remove"})
     *
     */
    private $post;

    /**
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;


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
     * Set user
     *
     * @param User $user
     *
     * @return Comment
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

     /**
     * Set post
     *
     * @param Post $post
     *
     * @return Comment
     */
    public function setPost(Post $post = null)
    {
        $this->post = $post;
    
        return $this;
    }

    /**
     * Get post
     *
     * @return Post
     */
    public function getPost()
    {
        return $this->$post;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Comment
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}
