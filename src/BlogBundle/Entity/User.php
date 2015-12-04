<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    *
    * @ORM\OneToMany(targetEntity="Comment", mappedBy="user")
    **/
    private $comments;

    /**
    *
    * @ORM\OneToMany(targetEntity="Post", mappedBy="user")
    **/
    private $posts;

    public function __construct() {
         parent::__construct();
        $this->comments = new ArrayCollection();
        $this->posts = new ArrayCollection();
    }

    public function addComment(Comment $comment) {
        $this->comments[] = $comment;
        //On lie de l'autre côté aussi :
        $comment->setUser($this);
        return $this;
    }

    public function removeComment(Comment $comment) {
        $this->comments->removeElement($comment);
    }

    public function getComments() {
        return $this->comments;
    }

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
     * Add post
     *
     * @param \BlogBundle\Entity\Post $post
     *
     * @return User
     */
    public function addPost(Post $post)
    {
        $this->posts[] = $post;
    
        return $this;
    }

    /**
     * Remove post
     *
     * @param \BlogBundle\Entity\Post $post
     */
    public function removePost(\BlogBundle\Entity\Post $post)
    {
        $this->posts->removeElement($post);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosts()
    {
        return $this->posts;
    }
}
