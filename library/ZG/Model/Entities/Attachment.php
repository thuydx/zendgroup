<?php

/**
 * ZEND GROUP
 *
 * @name        Attachment.php
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
 * Attachment
 *
 * @ORM\Table(name="attachment", indexes={@ORM\Index(name="fk_content_detail_attachment_idx", columns={"content_detail_id"})})
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Attachment")
 */
class Attachment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="attachment_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attachmentId;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=45, nullable=true)
     */
    private $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="file_caption", type="string", length=45, nullable=true)
     */
    private $fileCaption;

    /**
     * @var integer
     *
     * @ORM\Column(name="file_counter", type="integer", nullable=true)
     */
    private $fileCounter;

    /**
     * @var string
     *
     * @ORM\Column(name="file_path", type="string", length=255, nullable=true)
     */
    private $filePath;

    /**
     * @var string
     *
     * @ORM\Column(name="file_path_md5", type="string", length=255, nullable=true)
     */
    private $filePathMd5;

    /**
     * @var integer
     *
     * @ORM\Column(name="file_size", type="integer", nullable=true)
     */
    private $fileSize;

    /**
     * @var string
     *
     * @ORM\Column(name="file_info", type="string", length=255, nullable=true)
     */
    private $fileInfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="file_time", type="integer", nullable=true)
     */
    private $fileTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="file_status", type="integer", nullable=true)
     */
    private $fileStatus;

    /**
     * @var \ZG\Model\Entities\ContentDetail
     *
     * @ORM\ManyToOne(targetEntity="ZG\Model\Entities\ContentDetail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_detail_id", referencedColumnName="content_detail_id")
     * })
     */
    private $contentDetail;


    /**
     * Get attachmentId
     *
     * @return integer 
     */
    public function getAttachmentId()
    {
        return $this->attachmentId;
    }

    /**
     * Set fileName
     *
     * @param string $fileName
     *
     * @return Attachment
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    
        return $this;
    }

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set fileCaption
     *
     * @param string $fileCaption
     *
     * @return Attachment
     */
    public function setFileCaption($fileCaption)
    {
        $this->fileCaption = $fileCaption;
    
        return $this;
    }

    /**
     * Get fileCaption
     *
     * @return string 
     */
    public function getFileCaption()
    {
        return $this->fileCaption;
    }

    /**
     * Set fileCounter
     *
     * @param integer $fileCounter
     *
     * @return Attachment
     */
    public function setFileCounter($fileCounter)
    {
        $this->fileCounter = $fileCounter;
    
        return $this;
    }

    /**
     * Get fileCounter
     *
     * @return integer 
     */
    public function getFileCounter()
    {
        return $this->fileCounter;
    }

    /**
     * Set filePath
     *
     * @param string $filePath
     *
     * @return Attachment
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
    
        return $this;
    }

    /**
     * Get filePath
     *
     * @return string 
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * Set filePathMd5
     *
     * @param string $filePathMd5
     *
     * @return Attachment
     */
    public function setFilePathMd5($filePathMd5)
    {
        $this->filePathMd5 = $filePathMd5;
    
        return $this;
    }

    /**
     * Get filePathMd5
     *
     * @return string 
     */
    public function getFilePathMd5()
    {
        return $this->filePathMd5;
    }

    /**
     * Set fileSize
     *
     * @param integer $fileSize
     *
     * @return Attachment
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
    
        return $this;
    }

    /**
     * Get fileSize
     *
     * @return integer 
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Set fileInfo
     *
     * @param string $fileInfo
     *
     * @return Attachment
     */
    public function setFileInfo($fileInfo)
    {
        $this->fileInfo = $fileInfo;
    
        return $this;
    }

    /**
     * Get fileInfo
     *
     * @return string 
     */
    public function getFileInfo()
    {
        return $this->fileInfo;
    }

    /**
     * Set fileTime
     *
     * @param integer $fileTime
     *
     * @return Attachment
     */
    public function setFileTime($fileTime)
    {
        $this->fileTime = $fileTime;
    
        return $this;
    }

    /**
     * Get fileTime
     *
     * @return integer 
     */
    public function getFileTime()
    {
        return $this->fileTime;
    }

    /**
     * Set fileStatus
     *
     * @param integer $fileStatus
     *
     * @return Attachment
     */
    public function setFileStatus($fileStatus)
    {
        $this->fileStatus = $fileStatus;
    
        return $this;
    }

    /**
     * Get fileStatus
     *
     * @return integer 
     */
    public function getFileStatus()
    {
        return $this->fileStatus;
    }

    /**
     * Set contentDetail
     *
     * @param \ZG\Model\Entities\ContentDetail $contentDetail
     *
     * @return Attachment
     */
    public function setContentDetail(\ZG\Model\Entities\ContentDetail $contentDetail = null)
    {
        $this->contentDetail = $contentDetail;
    
        return $this;
    }

    /**
     * Get contentDetail
     *
     * @return \ZG\Model\Entities\ContentDetail 
     */
    public function getContentDetail()
    {
        return $this->contentDetail;
    }
}
