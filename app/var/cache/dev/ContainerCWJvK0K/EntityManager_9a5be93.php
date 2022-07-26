<?php

namespace ContainerCWJvK0K;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0624b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera7539 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb86d8 = [
        
    ];

    public function getConnection()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'getConnection', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'getMetadataFactory', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'getExpressionBuilder', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'beginTransaction', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'getCache', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->getCache();
    }

    public function transactional($func)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'transactional', array('func' => $func), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'wrapInTransaction', array('func' => $func), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'commit', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->commit();
    }

    public function rollback()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'rollback', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'getClassMetadata', array('className' => $className), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'createQuery', array('dql' => $dql), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'createNamedQuery', array('name' => $name), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'createQueryBuilder', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'flush', array('entity' => $entity), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'clear', array('entityName' => $entityName), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->clear($entityName);
    }

    public function close()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'close', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->close();
    }

    public function persist($entity)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'persist', array('entity' => $entity), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'remove', array('entity' => $entity), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'refresh', array('entity' => $entity), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'detach', array('entity' => $entity), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'merge', array('entity' => $entity), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'getRepository', array('entityName' => $entityName), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'contains', array('entity' => $entity), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'getEventManager', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'getConfiguration', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'isOpen', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'getUnitOfWork', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'getProxyFactory', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'initializeObject', array('obj' => $obj), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'getFilters', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'isFiltersStateClean', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'hasFilters', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return $this->valueHolder0624b->hasFilters();
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

        $instance->initializera7539 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0624b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0624b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0624b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, '__get', ['name' => $name], $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        if (isset(self::$publicPropertiesb86d8[$name])) {
            return $this->valueHolder0624b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0624b;

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

        $targetObject = $this->valueHolder0624b;
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
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0624b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0624b;
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
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, '__isset', array('name' => $name), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0624b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0624b;
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
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, '__unset', array('name' => $name), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0624b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0624b;
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
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, '__clone', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        $this->valueHolder0624b = clone $this->valueHolder0624b;
    }

    public function __sleep()
    {
        $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, '__sleep', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;

        return array('valueHolder0624b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera7539 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera7539;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera7539 && ($this->initializera7539->__invoke($valueHolder0624b, $this, 'initializeProxy', array(), $this->initializera7539) || 1) && $this->valueHolder0624b = $valueHolder0624b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0624b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0624b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
