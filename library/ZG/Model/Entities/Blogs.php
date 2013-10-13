<?php

/**
 * ZEND GROUP
 *
 * @name        Blogs.php
 * @category    ZG
 * @package 	Model
 * @subpackage  Model\Entities
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @copyright   Copyright (c)2008-2010 ZEND GROUP. All rights reserved
 * @license     http://zendgroup.vn/license/
 * @version     $1.0$
 *
 * LICENSE
 *
 * This source file is copyrighted by ZEND GROUP, full details in LICENSE.txt.
 * It is also available through the Internet at this URL:
 * http://zendgroup.vn/license/
 * If you did not receive a copy of the license and are unable to
 * obtain it through the Internet, please send an email
 * to license@zendgroup.vn so we can send you a copy immediately.
 *
 */

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blogs
 *
 * @ORM\Table(name="blogs", indexes={@ORM\Index(name="fk_user_blog_idx", columns={"user_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Blogs")
 */
class Blogs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="blog_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $blogId;

    /**
     * @var string
     *
     * @ORM\Column(name="blog_title", type="string", length=255, nullable=false)
     */
    private $blogTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="blog_description", type="string", length=255, nullable=true)
     */
    private $blogDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="blog_slogan", type="string", length=255, nullable=true)
     */
    private $blogSlogan;

    /**
     * @var string
     *
     * @ORM\Column(name="blog_logo", type="string", length=255, nullable=true)
     */
    private $blogLogo;

    /**
     * @var string
     *
     * @ORM\Column(name="blog_meta_keyword", type="string", length=255, nullable=true)
     */
    private $blogMetaKeyword;

    /**
     * @var string
     *
     * @ORM\Column(name="blog_copyright", type="string", length=255, nullable=true)
     */
    private $blogCopyright;

    /**
     * @var string
     *
     * @ORM\Column(name="blog_url", type="string", length=255, nullable=true)
     */
    private $blogUrl;

    /**
     * @var \ZG\Model\Entities\Users
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;


    /**
     * Get blogId
     *
     * @return integer 
     */
    public function getBlogId()
    {
        return $this->blogId;
    }

    /**
     * Set blogTitle
     *
     * @param string $blogTitle
     *
     * @return Blogs
     */
    public function setBlogTitle($blogTitle)
    {
        $this->blogTitle = $blogTitle;
    
        return $this;
    }

    /**
     * Get blogTitle
     *
     * @return string 
     */
    public function getBlogTitle()
    {
        return $this->blogTitle;
    }

    /**
     * Set blogDescription
     *
     * @param string $blogDescription
     *
     * @return Blogs
     */
    public function setBlogDescription($blogDescription)
    {
        $this->blogDescription = $blogDescription;
    
        return $this;
    }

    /**
     * Get blogDescription
     *
     * @return string 
     */
    public function getBlogDescription()
    {
        return $this->blogDescription;
    }

    /**
     * Set blogSlogan
     *
     * @param string $blogSlogan
     *
     * @return Blogs
     */
    public function setBlogSlogan($blogSlogan)
    {
        $this->blogSlogan = $blogSlogan;
    
        return $this;
    }

    /**
     * Get blogSlogan
     *
     * @return string 
     */
    public function getBlogSlogan()
    {
        return $this->blogSlogan;
    }

    /**
     * Set blogLogo
     *
     * @param string $blogLogo
     *
     * @return Blogs
     */
    public function setBlogLogo($blogLogo)
    {
        $this->blogLogo = $blogLogo;
    
        return $this;
    }

    /**
     * Get blogLogo
     *
     * @return string 
     */
    public function getBlogLogo()
    {
        return $this->blogLogo;
    }

    /**
     * Set blogMetaKeyword
     *
     * @param string $blogMetaKeyword
     *
     * @return Blogs
     */
    public function setBlogMetaKeyword($blogMetaKeyword)
    {
        $this->blogMetaKeyword = $blogMetaKeyword;
    
        return $this;
    }

    /**
     * Get blogMetaKeyword
     *
     * @return string 
     */
    public function getBlogMetaKeyword()
    {
        return $this->blogMetaKeyword;
    }

    /**
     * Set blogCopyright
     *
     * @param string $blogCopyright
     *
     * @return Blogs
     */
    public function setBlogCopyright($blogCopyright)
    {
        $this->blogCopyright = $blogCopyright;
    
        return $this;
    }

    /**
     * Get blogCopyright
     *
     * @return string 
     */
    public function getBlogCopyright()
    {
        return $this->blogCopyright;
    }

    /**
     * Set blogUrl
     *
     * @param string $blogUrl
     *
     * @return Blogs
     */
    public function setBlogUrl($blogUrl)
    {
        $this->blogUrl = $blogUrl;
    
        return $this;
    }

    /**
     * Get blogUrl
     *
     * @return string 
     */
    public function getBlogUrl()
    {
        return $this->blogUrl;
    }

    /**
     * Set user
     *
     * @param \ZG\Model\Entities\Users $user
     *
     * @return Blogs
     */
    public function setUser(\ZG\Model\Entities\Users $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \ZG\Model\Entities\Users 
     */
    public function getUser()
    {
        return $this->user;
    }
}
