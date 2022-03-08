<?php

namespace ContainerBggo9GL;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderccf86 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere5853 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb0489 = [
        
    ];

    public function getConnection()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'getConnection', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'getMetadataFactory', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'getExpressionBuilder', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'beginTransaction', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'getCache', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->getCache();
    }

    public function transactional($func)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'transactional', array('func' => $func), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'wrapInTransaction', array('func' => $func), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'commit', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->commit();
    }

    public function rollback()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'rollback', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'getClassMetadata', array('className' => $className), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'createQuery', array('dql' => $dql), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'createNamedQuery', array('name' => $name), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'createQueryBuilder', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'flush', array('entity' => $entity), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'clear', array('entityName' => $entityName), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->clear($entityName);
    }

    public function close()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'close', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->close();
    }

    public function persist($entity)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'persist', array('entity' => $entity), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'remove', array('entity' => $entity), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'refresh', array('entity' => $entity), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'detach', array('entity' => $entity), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'merge', array('entity' => $entity), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'getRepository', array('entityName' => $entityName), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'contains', array('entity' => $entity), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'getEventManager', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'getConfiguration', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'isOpen', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'getUnitOfWork', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'getProxyFactory', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'initializeObject', array('obj' => $obj), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'getFilters', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'isFiltersStateClean', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'hasFilters', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return $this->valueHolderccf86->hasFilters();
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

        $instance->initializere5853 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderccf86) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderccf86 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderccf86->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, '__get', ['name' => $name], $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        if (isset(self::$publicPropertiesb0489[$name])) {
            return $this->valueHolderccf86->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccf86;

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

        $targetObject = $this->valueHolderccf86;
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
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccf86;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderccf86;
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
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, '__isset', array('name' => $name), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccf86;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderccf86;
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
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, '__unset', array('name' => $name), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccf86;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderccf86;
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
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, '__clone', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        $this->valueHolderccf86 = clone $this->valueHolderccf86;
    }

    public function __sleep()
    {
        $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, '__sleep', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;

        return array('valueHolderccf86');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere5853 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere5853;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere5853 && ($this->initializere5853->__invoke($valueHolderccf86, $this, 'initializeProxy', array(), $this->initializere5853) || 1) && $this->valueHolderccf86 = $valueHolderccf86;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderccf86;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderccf86;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
