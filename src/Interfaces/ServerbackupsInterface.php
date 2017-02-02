<?php
/**
 * Zend Backend (http://forge.co.nz/)
 *
 * Interface
 *
 * PHP version 5
 *
 * @category Module
 * @package  FgServerbackups
 * @author   Don Nuwinda <nuwinda@gmail.com>
 * @license  GPL http://forge.co.nz
 * @link     http://forge.co.nz
 */
namespace FgServerbackups\Interfaces;

/**
 * ServerbackupsInterface
 *
 * @category Interface
 * @package  FgServerbackups
 * @author   Don Nuwinda <nuwinda@gmail.com>
 * @license  GPL http://forge.co.nz
 * @link     http://forge.co.nz
 */
interface ServerbackupsInterface
{
     /**
      * Return configuration id
      *
      * @return int
      */
     public function getId();

     /**
      * Return server name
      *
      * @return string
      */
     public function getServerName();

     /**
      * Return google parent file
      *
      * @return string
      */
     public function getGoogleParent();
	 
     /**
      * Return backup location
      *
      * @return string
      */
     public function getBackupLocation();
	 
     /**
      * Set id
	  *
      * @param int $value Value
      */
     public function setId($value);

     /**
      * Set server name
      *
      * @param string $value Value
      */
     public function setServerName($value);

     /**
      * Set Google Parent
      *
      * @param string $value Value
      */
     public function setGoogleParent($value);
	 
     /**
      * Set Backup location
      *
      * @param string $value Value
      */
     public function setBackupLocation($value);
}