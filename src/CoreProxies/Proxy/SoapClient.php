<?php

namespace CoreProxies\Proxy;

class SoapClient extends \SoapClient
{
    /**
     * @link http://php.net/manual/en/soapclient.soapclient.php
     *
     * @param mixed $wsdl
     * @param array $options
     *
     * @return \CoreProxies\Proxy\SoapClient
     */
    public function __construct($wsdl, array $options = array())
    {
        parent::__construct($wsdl, $options);
    }

    /**
     * @link http://php.net/manual/en/soapclient.call.php
     *
     * @param string $function_name
     * @param string $arguments
     *
     * @return mixed
     */
    public function __call ($function_name, $arguments)
    {
        return parent::__construct($function_name, $arguments);
    }

    /**
     * @link http://php.net/manual/en/soapclient.soapcall.php
     *
     * @param string $function_name
     * @param array $arguments
     * @param array $options
     * @param mixed $input_headers
     * @param array $output_headers
     *
     * @return mixed
     */
    public function __soapCall($function_name, $arguments, $options = array(), $input_headers = null, &$output_headers = array())
    {
        return parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);
    }

    /**
     * @link http://php.net/manual/en/soapclient.getlastrequest.php
     *
     * @return string The last SOAP request, as an XML string.
     */
    public function __getLastRequest ()
    {
        return parent::__getLastRequest();
    }

    /**
     * @link http://php.net/manual/en/soapclient.getlastresponse.php
     *
     * @return string
     */
    public function __getLastResponse ()
    {
        return parent::__getLastResponse();
    }

    /**
     * @link http://php.net/manual/en/soapclient.getlastrequestheaders.php
     *
     * @return string
     */
    public function __getLastRequestHeaders()
    {
        return parent::__getLastRequestHeaders();
    }

    /**
     * @link http://php.net/manual/en/soapclient.getlastresponseheaders.php
     *
     * @return string
     */
    public function __getLastResponseHeaders()
    {
        return parent::__getLastResponseHeaders();
    }

    /**
     * @link http://php.net/manual/en/soapclient.getfunctions.php
     *
     * @return array
     */
    public function __getFunctions()
    {
        return parent::__getFunctions();
    }

    /**
     * @link http://php.net/manual/en/soapclient.gettypes.php
     *
     * @return array
     */
    public function __getTypes()
    {
        return parent::__getTypes();
    }

    /**
     * @link http://php.net/manual/en/soapclient.dorequest.php
     *
     * @param string $request
     * @param string $location
     * @param string $action
     * @param int $version
     * @param int $one_way
     *
     * @return string
     */
    public function __doRequest($request, $location, $action, $version, $one_way = 0)
    {
        return parent::__doRequest($request, $location, $action, $version, $one_way);
    }

    /**
     * @link http://php.net/manual/en/soapclient.setcookie.php
     *
     * @param string $name
     * @param string $value
     *
     * @return void
     */
    public function __setCookie($name, $value = null)
    {
        return parent::__setCookie($name, $value);
    }

    /**
     * @link http://php.net/manual/en/soapclient.setlocation.php
     *
     * @param string $new_location
     * @return string
     */
    public function __setLocation($new_location = null)
    {
        return parent::__setLocation($new_location);
    }

    /**
     * @link http://php.net/manual/en/soapclient.setsoapheaders.php
     *
     * @param mixed $soapheaders
     *
     * @return bool
     */
    public function __setSoapHeaders($soapheaders = null)
    {
        return parent::__setSoapHeaders($soapheaders);
    }
}