<?php
namespace Isha\Us8\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\ObjectManagerInterface;

class Employee extends Action
{
    protected $pageFactory;
    protected $objectManager;
    protected $messageManager;

    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        ObjectManagerInterface $objectManager,
        ManagerInterface $messageManager
    ) {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
        $this->objectManager = $objectManager;
        $this->messageManager = $messageManager;
    }

    public function execute()
    {
        $page = $this->pageFactory->create();
        // $email = $this->getRequest()->getParam('email_id');

        // Handle form submission
        if ($postData = $this->getRequest()->getPostValue()) {
            try {
                // Creating an instance of the Employee model
                $employee = $this->objectManager->create('Isha\Us8\Model\Employee');
                $employee->setData($postData);
                $employee->save();
                
                $this->messageManager->addSuccessMessage(__('Employee data saved successfully.'));
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage(__('Error occurred while saving employee data.'));
            }

            // Redirect to the same page after form submission
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setPath('*/*/employee');
            return $resultRedirect;
        }

        return $page;
    }
}


// $order = $this->_objectManager->create('Magento\Sales\Model\Order')->load(1); // this is entity id
// $order->setCustomerEmail($email);
// if ($order) {
//     try {
//         $this->_objectManager->create('\Magento\Sales\Model\OrderNotifier')
//             ->notify($order);
//         $this->messageManager->addSuccess(__('You sent the order email.'));
//     } catch (\Magento\Framework\Exception\LocalizedException $e) {
//         $this->messageManager->addError($e->getMessage());
//     } catch (\Exception $e) {
//         $this->messageManager->addError(__('We can\'t send the email order right now.'));
//         $this->_objectManager->create('Magento\Sales\Model\OrderNotifier')->critical($e);
//     }
// }
