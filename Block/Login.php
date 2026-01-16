<?php

namespace Aoropeza\CustomerPartner\Block;

use Aoropeza\CustomerPartner\Helper\Config;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Customer\Block\Form\Login as MagentoLogin;
use Magento\Customer\Block\Form\Login\Info as MagentoLoginInfo;

class Login extends Template
{
    /**
     * Summary of configHelper
     * @var Config
     */
    private $configHelper;

    /**
     * Summary of magentoLogin
     * @var MagentoLogin
     */
    private $magentoLogin;

    /**
     * Summary of magentoLoginInfo
     * @var MagentoLoginInfo
     */
    private $magentoLoginInfo;

    /**
     * Summary of __construct
     * @param Template\Context $context
     * @param Config $configHelper
     * @param MagentoLogin $magentoLogin
     * @param MagentoLogin\Info $magentoLoginInfo
     * @param array $data
     */
    public function __construct(
        Context $context,
        Config $configHelper,
        MagentoLogin $magentoLogin,
        MagentoLoginInfo $magentoLoginInfo,
        array $data = []
    ) {
        $this->magentoLogin = $magentoLogin;
        $this->magentoLoginInfo = $magentoLoginInfo;
        $this->configHelper = $configHelper;
        parent::__construct($context, $data);
    }

    /**
     * Returns title
     * @return string
     */
    public function getTitle(): string
    {
        return $this->configHelper->getSuccessTitle();
    }

    /**
     * Retrieve form posting url
     *
     * @return string
     */
    public function getPostActionUrl()
    {
        return $this->magentoLogin->getPostActionUrl();
    }

    /**
     * Retrieve password forgotten url
     *
     * @return string
     */
    public function getForgotPasswordUrl()
    {
        return $this->magentoLogin->getForgotPasswordUrl();
    }

    /**
     * Retrieve username for form field
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->magentoLogin->getUsername();
    }

    /**
     * Check if autocomplete is disabled on storefront
     *
     * @return bool
     */
    public function isAutocompleteDisabled()
    {
        return $this->magentoLogin->isAutocompleteDisabled();
    }

    /**
     * Return registration
     *
     * @return \Magento\Customer\Model\Registration
     */
    public function getRegistration()
    {
        return $this->magentoLoginInfo->getRegistration();
    }

    /**
     * Retrieve create new account url
     *
     * @return string
     */
    public function getCreateAccountUrl()
    {
        return $this->magentoLoginInfo->getCreateAccountUrl();
    }




}
