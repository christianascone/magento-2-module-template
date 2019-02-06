<?php
namespace Christianascone\HelloWorld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'christianascone_helloworld_post';

	protected $_cacheTag = 'christianascone_helloworld_post';

	protected $_eventPrefix = 'christianascone_helloworld_post';

	protected function _construct()
	{
		$this->_init('Christianascone\HelloWorld\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}