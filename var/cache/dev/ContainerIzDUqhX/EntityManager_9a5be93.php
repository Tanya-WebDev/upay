<?php

namespace ContainerIzDUqhX;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder894ec = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7cc41 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfba30 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'getConnection', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'getMetadataFactory', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'getExpressionBuilder', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'beginTransaction', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'getCache', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'transactional', array('func' => $func), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'commit', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->commit();
    }

    public function rollback()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'rollback', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'getClassMetadata', array('className' => $className), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'createQuery', array('dql' => $dql), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'createNamedQuery', array('name' => $name), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'createQueryBuilder', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'flush', array('entity' => $entity), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'clear', array('entityName' => $entityName), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->clear($entityName);
    }

    public function close()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'close', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->close();
    }

    public function persist($entity)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'persist', array('entity' => $entity), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'remove', array('entity' => $entity), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'refresh', array('entity' => $entity), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'detach', array('entity' => $entity), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'merge', array('entity' => $entity), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'contains', array('entity' => $entity), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'getEventManager', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'getConfiguration', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'isOpen', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'getUnitOfWork', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'getProxyFactory', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'initializeObject', array('obj' => $obj), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'getFilters', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'isFiltersStateClean', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'hasFilters', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return $this->valueHolder894ec->hasFilters();
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

        $instance->initializer7cc41 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder894ec) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder894ec = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder894ec->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, '__get', ['name' => $name], $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        if (isset(self::$publicPropertiesfba30[$name])) {
            return $this->valueHolder894ec->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder894ec;

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

        $targetObject = $this->valueHolder894ec;
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
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder894ec;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder894ec;
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
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, '__isset', array('name' => $name), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder894ec;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder894ec;
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
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, '__unset', array('name' => $name), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder894ec;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder894ec;
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
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, '__clone', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        $this->valueHolder894ec = clone $this->valueHolder894ec;
    }

    public function __sleep()
    {
        $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, '__sleep', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;

        return array('valueHolder894ec');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7cc41 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7cc41;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7cc41 && ($this->initializer7cc41->__invoke($valueHolder894ec, $this, 'initializeProxy', array(), $this->initializer7cc41) || 1) && $this->valueHolder894ec = $valueHolder894ec;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder894ec;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder894ec;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
