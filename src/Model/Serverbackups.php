<?php
/**
 * Zend Backend (http://forge.co.nz/)
 *
 * Manager
 *
 * PHP version 5
 *
 * @category Module
 * @package  FgServerbackups
 * @author   Don Nuwinda <nuwinda@gmail.com>
 * @license  GPL http://forge.co.nz
 * @link     http://forge.co.nz
 */
namespace FgServerbackups\Model;

use FgServerbackups\Interfaces\ServerbackupsInterface;
/**
 * Serverbackups Model
 *
 * @category Model
 * @package  FgServerbackups
 * @author   Don Nuwinda <nuwinda@gmail.com>
 * @license  GPL http://forge.co.nz
 * @link     http://forge.co.nz
 */
class Serverbackups implements ServerbackupsInterface
{
	/*
	* @var int
	*/
	protected $id;
	
	/*
	* @var string
	*/
	protected $serverName;
	
	/*
	* @var string
	*/
	protected $googleParent;
	
	/*
	* @var string
	*/
	protected $backupLocation;
	

	 /**
	 * {@inheritDoc}
	 */
     public function getId()
	 {
		 return $this->id;
	 }
	 
	 /**
	 * {@inheritDoc}
	 */
     public function getServerName()
	 {
		 return $this->serverName;
	 }
	 
	 /**
	 * {@inheritDoc}
	 */
     public function getGoogleParent()
	 {
		 return $this->googleParent;
	 }	 
	 
	 /**
	 * {@inheritDoc}
	 */
     public function getBackupLocation()
	 {
		 return $this->backupLocation;
	 }	 
	 
	/**
	* {@inheritDoc}
	*/
	public function setId($value)
	{
		$this->id = $value;
	}
	
	/**
	* {@inheritDoc}
	*/
	public function getServerName($value)
	{
		$this->serverName = $value;
	}
	
	/**
	* {@inheritDoc}
	*/
	public function setGoogleParent($value)
	{
		$this->googleParent = $value;
	}
	
	/**
	* {@inheritDoc}
	*/
	public function setBackupLocation($value)
	{
		$this->backupLocation = $value;
	}
}