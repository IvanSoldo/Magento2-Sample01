<?php

namespace Inchoo\Sample01\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Template;

class Hello extends \Magento\Framework\View\Element\Template
{
    protected $scopeConfig;

    public function __construct(Template\Context $context, array $data = [], ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function isShown(): bool
    {
        return $this->scopeConfig->getValue('sample01/general/display');
    }

    /**
     * @return string
     */
    public function getHelloWorld()
    {
        return 'Hello World :]';
    }
}

