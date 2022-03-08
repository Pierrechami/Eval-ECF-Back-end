<?php

namespace ContainerLwiU5wD;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4fe33 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeradca1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesedd34 = [
        
    ];

    public function getConnection()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'getConnection', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'getMetadataFactory', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'getExpressionBuilder', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'beginTransaction', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'getCache', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->getCache();
    }

    public function transactional($func)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'transactional', array('func' => $func), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'wrapInTransaction', array('func' => $func), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'commit', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->commit();
    }

    public function rollback()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'rollback', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'getClassMetadata', array('className' => $className), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'createQuery', array('dql' => $dql), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'createNamedQuery', array('name' => $name), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'createQueryBuilder', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'flush', array('entity' => $entity), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'clear', array('entityName' => $entityName), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->clear($entityName);
    }

    public function close()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'close', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->close();
    }

    public function persist($entity)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'persist', array('entity' => $entity), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'remove', array('entity' => $entity), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'refresh', array('entity' => $entity), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'detach', array('entity' => $entity), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'merge', array('entity' => $entity), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'getRepository', array('entityName' => $entityName), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'contains', array('entity' => $entity), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'getEventManager', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'getConfiguration', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'isOpen', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'getUnitOfWork', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'getProxyFactory', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'initializeObject', array('obj' => $obj), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'getFilters', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'isFiltersStateClean', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'hasFilters', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return $this->valueHolder4fe33->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializeradca1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4fe33) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4fe33 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4fe33->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, '__get', ['name' => $name], $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        if (isset(self::$publicPropertiesedd34[$name])) {
            return $this->valueHolder4fe33->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4fe33;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4fe33;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4fe33;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4fe33;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, '__isset', array('name' => $name), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4fe33;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4fe33;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, '__unset', array('name' => $name), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4fe33;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4fe33;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, '__clone', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        $this->valueHolder4fe33 = clone $this->valueHolder4fe33;
    }

    public function __sleep()
    {
        $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, '__sleep', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;

        return array('valueHolder4fe33');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeradca1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeradca1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeradca1 && ($this->initializeradca1->__invoke($valueHolder4fe33, $this, 'initializeProxy', array(), $this->initializeradca1) || 1) && $this->valueHolder4fe33 = $valueHolder4fe33;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4fe33;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4fe33;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
