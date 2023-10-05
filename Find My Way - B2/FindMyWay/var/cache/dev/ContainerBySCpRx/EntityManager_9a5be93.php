<?php

namespace ContainerBySCpRx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2024c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer55fd2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties81c18 = [
        
    ];

    public function getConnection()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'getConnection', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'getMetadataFactory', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'getExpressionBuilder', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'beginTransaction', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'getCache', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'transactional', array('func' => $func), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'commit', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->commit();
    }

    public function rollback()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'rollback', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'getClassMetadata', array('className' => $className), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'createQuery', array('dql' => $dql), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'createNamedQuery', array('name' => $name), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'createQueryBuilder', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'flush', array('entity' => $entity), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'clear', array('entityName' => $entityName), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->clear($entityName);
    }

    public function close()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'close', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->close();
    }

    public function persist($entity)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'persist', array('entity' => $entity), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'remove', array('entity' => $entity), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'refresh', array('entity' => $entity), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'detach', array('entity' => $entity), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'merge', array('entity' => $entity), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'contains', array('entity' => $entity), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'getEventManager', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'getConfiguration', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'isOpen', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'getUnitOfWork', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'getProxyFactory', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'initializeObject', array('obj' => $obj), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'getFilters', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'isFiltersStateClean', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'hasFilters', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return $this->valueHolder2024c->hasFilters();
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

        $instance->initializer55fd2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2024c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2024c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2024c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, '__get', ['name' => $name], $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        if (isset(self::$publicProperties81c18[$name])) {
            return $this->valueHolder2024c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2024c;

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

        $targetObject = $this->valueHolder2024c;
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
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2024c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2024c;
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
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, '__isset', array('name' => $name), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2024c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2024c;
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
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, '__unset', array('name' => $name), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2024c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2024c;
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
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, '__clone', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        $this->valueHolder2024c = clone $this->valueHolder2024c;
    }

    public function __sleep()
    {
        $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, '__sleep', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;

        return array('valueHolder2024c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer55fd2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer55fd2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer55fd2 && ($this->initializer55fd2->__invoke($valueHolder2024c, $this, 'initializeProxy', array(), $this->initializer55fd2) || 1) && $this->valueHolder2024c = $valueHolder2024c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2024c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2024c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
