<?php
namespace Magento\Eav\Model\Entity\Attribute\Backend\Time\Updated;

/**
 * Interceptor class for @see \Magento\Eav\Model\Entity\Attribute\Backend\Time\Updated
 */
class Interceptor extends \Magento\Eav\Model\Entity\Attribute\Backend\Time\Updated implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\DateTime $dateTime)
    {
        $this->___init();
        parent::__construct($dateTime);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        return $pluginInfo ? $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo) : parent::beforeSave($object);
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute($attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttribute');
        return $pluginInfo ? $this->___callPlugins('setAttribute', func_get_args(), $pluginInfo) : parent::setAttribute($attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttribute');
        return $pluginInfo ? $this->___callPlugins('getAttribute', func_get_args(), $pluginInfo) : parent::getAttribute();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getType');
        return $pluginInfo ? $this->___callPlugins('getType', func_get_args(), $pluginInfo) : parent::getType();
    }

    /**
     * {@inheritdoc}
     */
    public function isStatic()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isStatic');
        return $pluginInfo ? $this->___callPlugins('isStatic', func_get_args(), $pluginInfo) : parent::isStatic();
    }

    /**
     * {@inheritdoc}
     */
    public function getTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTable');
        return $pluginInfo ? $this->___callPlugins('getTable', func_get_args(), $pluginInfo) : parent::getTable();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityIdField()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityIdField');
        return $pluginInfo ? $this->___callPlugins('getEntityIdField', func_get_args(), $pluginInfo) : parent::getEntityIdField();
    }

    /**
     * {@inheritdoc}
     */
    public function setValueId($valueId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setValueId');
        return $pluginInfo ? $this->___callPlugins('setValueId', func_get_args(), $pluginInfo) : parent::setValueId($valueId);
    }

    /**
     * {@inheritdoc}
     */
    public function setEntityValueId($entity, $valueId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEntityValueId');
        return $pluginInfo ? $this->___callPlugins('setEntityValueId', func_get_args(), $pluginInfo) : parent::setEntityValueId($entity, $valueId);
    }

    /**
     * {@inheritdoc}
     */
    public function getValueId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueId');
        return $pluginInfo ? $this->___callPlugins('getValueId', func_get_args(), $pluginInfo) : parent::getValueId();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityValueId($entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityValueId');
        return $pluginInfo ? $this->___callPlugins('getEntityValueId', func_get_args(), $pluginInfo) : parent::getEntityValueId($entity);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultValue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultValue');
        return $pluginInfo ? $this->___callPlugins('getDefaultValue', func_get_args(), $pluginInfo) : parent::getDefaultValue();
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($object);
    }

    /**
     * {@inheritdoc}
     */
    public function afterLoad($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterLoad');
        return $pluginInfo ? $this->___callPlugins('afterLoad', func_get_args(), $pluginInfo) : parent::afterLoad($object);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        return $pluginInfo ? $this->___callPlugins('afterSave', func_get_args(), $pluginInfo) : parent::afterSave($object);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeDelete($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeDelete');
        return $pluginInfo ? $this->___callPlugins('beforeDelete', func_get_args(), $pluginInfo) : parent::beforeDelete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function afterDelete($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDelete');
        return $pluginInfo ? $this->___callPlugins('afterDelete', func_get_args(), $pluginInfo) : parent::afterDelete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getAffectedFields($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAffectedFields');
        return $pluginInfo ? $this->___callPlugins('getAffectedFields', func_get_args(), $pluginInfo) : parent::getAffectedFields($object);
    }

    /**
     * {@inheritdoc}
     */
    public function isScalar()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScalar');
        return $pluginInfo ? $this->___callPlugins('isScalar', func_get_args(), $pluginInfo) : parent::isScalar();
    }
}
