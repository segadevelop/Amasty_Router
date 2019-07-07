<?php

namespace Sega\Extension\Controller\Index;

use Magento\Framework\App\Action\Context,
    Magento\Framework\View\Result\PageFactory,
    Magento\Framework\App\Action\Action;


class Index extends Action
{
    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->pageFactory->create();
    }
}