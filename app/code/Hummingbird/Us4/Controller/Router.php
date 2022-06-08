<?php

namespace Hummingbird\Us4\Controller;

class Router implements \Magento\Framework\App\RouterInterface
{

    protected $actionPath;
    protected $_response;

    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory, \Magento\Framework\App\ResponseInterface $response) {
        $this->actionPath = $actionFactory;
        $this->_response = $response;
    }

    public function match(\Magento\Framework\App\RequestInterface $request) {
        $testCategory = 'id/2';
        $info = trim($request->getPathInfo(),'/');
        if (preg_match_all("%(?=([A-Z][a-z]+))%", $info, $m)) {
            $request->setPathInfo(sprintf("/%s/%s/%s/%s", strtolower($m[1][0]), strtolower($m[1][1]), strtolower($m[1][2]), $testCategory));
            return $this->actionPath->create('Magento\Framework\App\Action\Forward',
                ['request' => $request]);
        }
        return null;
    }
}