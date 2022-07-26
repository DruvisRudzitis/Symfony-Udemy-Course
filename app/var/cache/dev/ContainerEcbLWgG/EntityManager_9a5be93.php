<?php

namespace ContainerEcbLWgG;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder66194 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere4595 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7143e = [
        
    ];

    public function getConnection()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'getConnection', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'getMetadataFactory', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'getExpressionBuilder', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'beginTransaction', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'getCache', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->getCache();
    }

    public function transactional($func)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'transactional', array('func' => $func), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'wrapInTransaction', array('func' => $func), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'commit', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->commit();
    }

    public function rollback()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'rollback', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'getClassMetadata', array('className' => $className), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'createQuery', array('dql' => $dql), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'createNamedQuery', array('name' => $name), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'createQueryBuilder', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'flush', array('entity' => $entity), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'clear', array('entityName' => $entityName), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->clear($entityName);
    }

    public function close()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'close', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->close();
    }

    public function persist($entity)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'persist', array('entity' => $entity), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'remove', array('entity' => $entity), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'refresh', array('entity' => $entity), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'detach', array('entity' => $entity), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'merge', array('entity' => $entity), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'getRepository', array('entityName' => $entityName), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'contains', array('entity' => $entity), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'getEventManager', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'getConfiguration', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'isOpen', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'getUnitOfWork', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'getProxyFactory', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'initializeObject', array('obj' => $obj), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'getFilters', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'isFiltersStateClean', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'hasFilters', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return $this->valueHolder66194->hasFilters();
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

        $instance->initializere4595 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder66194) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder66194 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder66194->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, '__get', ['name' => $name], $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        if (isset(self::$publicProperties7143e[$name])) {
            return $this->valueHolder66194->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66194;

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

        $targetObject = $this->valueHolder66194;
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
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66194;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder66194;
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
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, '__isset', array('name' => $name), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66194;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder66194;
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
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, '__unset', array('name' => $name), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66194;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder66194;
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
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, '__clone', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        $this->valueHolder66194 = clone $this->valueHolder66194;
    }

    public function __sleep()
    {
        $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, '__sleep', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;

        return array('valueHolder66194');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere4595 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere4595;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere4595 && ($this->initializere4595->__invoke($valueHolder66194, $this, 'initializeProxy', array(), $this->initializere4595) || 1) && $this->valueHolder66194 = $valueHolder66194;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder66194;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder66194;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
