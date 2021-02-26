<?php

/**
 * BSeller - B2W Companhia Digital
 *
 * DISCLAIMER
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @copyright     Copyright (c) 2017 B2W Companhia Digital. (http://www.bseller.com.br/)
 * Access https://ajuda.skyhub.com.br/hc/pt-br/requests/new for questions and other requests.
 */

namespace B2W\SkyHub\Model\Queue;

use B2W\SkyHub\Exception\Exception;
use B2W\SkyHub\Model\Resource\Collection;

abstract class MessageAbstract
{
    /**
     * @var null
     */
    protected $_id = null;
    /**
     * @var string
     */
    protected $_type   = 'default';
    /**
     * @var string
     */
    protected $_model  = null;
    /**
     * @var string
     */
    protected $_method = null;
    /**
     * @var array
     */
    protected $_params = array();
    /**
     * @var string
     */
    protected $_status = 'pending';
    /**
     * @var String
     */
    protected $_error = null;

    /**
     * @return mixed
     */
    abstract protected function _getModelName();

    /**
     * @return mixed
     */
    abstract protected function _getMethodName();

    /**
     * Return methodName, status of order
     * 
     * @return String
     */
    public function getStatusOrder()
    {
        return $this->_getMethodName();
    }

    /**
     * MessageAbstract constructor.
     * @param array $params
     * @throws Exception
     */
    public function __construct($params = array())
    {
        $model = $this->_getModelName();

        if (empty($model)) {
            throw new Exception('Model cannot be empty in ' . get_class());
        }

        $method = $this->_getMethodName();

        if (empty($method)) {
            throw new Exception('Method cannot be empty in ' . get_class());
        }

        $this->_type = $this->_getType();

        $this->_model  = $model;
        $this->_method = $method;

        if (!is_array($params)) {
            $params = array($params);
        }

        $this->_params = $params;

        return $this;
    }

    /**
     * @return string
     */
    protected function _getType()
    {
        return $this->_type;
    }

    /**
     * @param $param
     * @return $this
     */
    public function addParam($param)
    {
        $this->_params[] = $param;
        return $this;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->_params;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->_status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @return string
     */
    public function getModel()
    {
        return $this->_model;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->_method;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }

    /**
     * Get the value of _error
     *
     * @return  String
     */ 
    public function getError()
    {
        return $this->_error;
    }

    /**
     * Set the value of _error
     *
     * @param  String  $_error
     *
     * @return  self
     */ 
    public function setError($_error)
    {
        $this->_error = $_error;

        return $this;
    }
}