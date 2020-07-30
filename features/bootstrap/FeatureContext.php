<?php

use Alex\MailCatcher\Behat\MailCatcherContext;
use Behat\Behat\Context\BehatContext;
use Templeiro\QA\Context\ApiContext;
use Templeiro\QA\Context\TempleiroNavigationContext;
use WebDriver\Behat\WebDriverContext;

class FeatureContext extends BehatContext
{
    public function __construct(array $parameters)
    {
        $this->useContext('api', new ApiContext());
        $this->useContext('templeiro_navigation', new TempleiroNavigationContext());
        $this->useContext('webdriver', new WebDriverContext());
        $this->useContext('mailcatcher', new MailCatcherContext());
    }
}
