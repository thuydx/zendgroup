<?php

/**
 * ZEND GROUP
 *
 * @name        Comments.php
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

namespace ZG\Model\Mapping;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments", indexes={@ORM\Index(name="fk_content_comment_idx", columns={"content_detail_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Comments")
 */
class Comments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="comment_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentId;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_text", type="string", length=255, nullable=true)
     */
    private $commentText;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_date", type="integer", nullable=true)
     */
    private $commentDate;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_author", type="string", length=45, nullable=true)
     */
    private $commentAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_author_email", type="string", length=125, nullable=true)
     */
    private $commentAuthorEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_author_site", type="string", length=125, nullable=true)
     */
    private $commentAuthorSite;

    /**
     * @var boolean
     *
     * @ORM\Column(name="comment_status", type="boolean", nullable=true)
     */
    private $commentStatus;

    /**
     * @var \ZG\Model\Mapping\ContentDetail
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Mapping\ContentDetail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_detail_id", referencedColumnName="content_detail_id")
     * })
     */
    private $contentDetail;


}
