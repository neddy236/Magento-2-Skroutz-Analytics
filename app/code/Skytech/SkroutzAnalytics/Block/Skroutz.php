<?php
    // @Author: Vasilis Neris
    // @contact: vasilis.neris@gmail.com
    // @Description: Skroutz Analytics
    
    
    // Skytech Skroutz Analytics is free software: you can redistribute it and/or modify
    // it under the terms of the GNU General Public License as published by
    // the Free Software Foundation, either version 3 of the License, or
    // (at your option) any later version.

    // Skytech Skroutz Analytics is distributed in the hope that it will be useful,
    // but WITHOUT ANY WARRANTY; without even the implied warranty of
    // MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    // GNU General Public License for more details.

    // You should have received a copy of the GNU General Public License
    // along with this code.  If not, see <https://www.gnu.org/licenses/>.

namespace Skytech\SkroutzAnalytics\Block;


class Skroutz extends \Magento\Framework\View\Element\Template
{

    private $scopeConfig;

    protected $orderFactory;
 
    private $checkoutSession;


    /**
     * 
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Sales\Api\Data\OrderInterfaceFactory $orderFactory,
        \Magento\Checkout\Model\Session $checkoutSession,
        array $data = []

    ) {
        parent::__construct($context, $data);
        $this->_scopeConfig = $scopeConfig;
        $this->orderFactory = $orderFactory;
        $this->checkoutSession = $checkoutSession;
        
    }
    /**
     * @return mixed
    */
    public function getStoreConfig($data)
	{
		return $this->_scopeConfig->getValue($data, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

   

    public function getOrderByIncrementId() {

        $incrementId = $this->checkoutSession->getData('last_real_order_id');
        $order       = $this->orderFactory->create()->loadByIncrementId($incrementId);
 
        return $order;
    }


}