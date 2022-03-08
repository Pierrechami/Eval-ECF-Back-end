<?php

namespace ContainerF2yUKLa;

include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder62b3f = null;
    private $initializer39cd2 = null;
    private static $publicProperties46a73 = [
        
    ];
    public function getConnection()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'getConnection', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'getMetadataFactory', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'getExpressionBuilder', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'beginTransaction', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'getCache', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->getCache();
    }
    public function transactional($func)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'transactional', array('func' => $func), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'commit', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->commit();
    }
    public function rollback()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'rollback', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'getClassMetadata', array('className' => $className), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'createQuery', array('dql' => $dql), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'createNamedQuery', array('name' => $name), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'createQueryBuilder', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'flush', array('entity' => $entity), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'clear', array('entityName' => $entityName), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->clear($entityName);
    }
    public function close()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'close', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->close();
    }
    public function persist($entity)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'persist', array('entity' => $entity), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'remove', array('entity' => $entity), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'refresh', array('entity' => $entity), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'detach', array('entity' => $entity), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'merge', array('entity' => $entity), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'contains', array('entity' => $entity), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'getEventManager', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'getConfiguration', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'isOpen', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'getUnitOfWork', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'getProxyFactory', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'initializeObject', array('obj' => $obj), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'getFilters', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'isFiltersStateClean', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'hasFilters', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return $this->valueHolder62b3f->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer39cd2 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder62b3f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder62b3f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder62b3f->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, '__get', ['name' => $name], $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        if (isset(self::$publicProperties46a73[$name])) {
            return $this->valueHolder62b3f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62b3f;
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
        $targetObject = $this->valueHolder62b3f;
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
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62b3f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder62b3f;
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
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, '__isset', array('name' => $name), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62b3f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder62b3f;
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
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, '__unset', array('name' => $name), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62b3f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder62b3f;
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
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, '__clone', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        $this->valueHolder62b3f = clone $this->valueHolder62b3f;
    }
    public function __sleep()
    {
        $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, '__sleep', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
        return array('valueHolder62b3f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer39cd2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer39cd2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer39cd2 && ($this->initializer39cd2->__invoke($valueHolder62b3f, $this, 'initializeProxy', array(), $this->initializer39cd2) || 1) && $this->valueHolder62b3f = $valueHolder62b3f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder62b3f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder62b3f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
