<?php

namespace ContainerZXWP8Ra;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder745da = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4bb56 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a094 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'getConnection', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'getMetadataFactory', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'getExpressionBuilder', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'beginTransaction', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'getCache', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'transactional', array('func' => $func), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->transactional($func);
    }

    public function commit()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'commit', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->commit();
    }

    public function rollback()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'rollback', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'getClassMetadata', array('className' => $className), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'createQuery', array('dql' => $dql), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'createNamedQuery', array('name' => $name), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'createQueryBuilder', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'flush', array('entity' => $entity), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'clear', array('entityName' => $entityName), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->clear($entityName);
    }

    public function close()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'close', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->close();
    }

    public function persist($entity)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'persist', array('entity' => $entity), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'remove', array('entity' => $entity), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'refresh', array('entity' => $entity), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'detach', array('entity' => $entity), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'merge', array('entity' => $entity), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'contains', array('entity' => $entity), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'getEventManager', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'getConfiguration', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'isOpen', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'getUnitOfWork', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'getProxyFactory', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'initializeObject', array('obj' => $obj), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'getFilters', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'isFiltersStateClean', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'hasFilters', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->hasFilters();
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

        $instance->initializer4bb56 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder745da) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder745da = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder745da->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, '__get', ['name' => $name], $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        if (isset(self::$publicProperties5a094[$name])) {
            return $this->valueHolder745da->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder745da;

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

        $targetObject = $this->valueHolder745da;
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
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder745da;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder745da;
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
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, '__isset', array('name' => $name), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder745da;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder745da;
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
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, '__unset', array('name' => $name), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder745da;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder745da;
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
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, '__clone', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        $this->valueHolder745da = clone $this->valueHolder745da;
    }

    public function __sleep()
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, '__sleep', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return array('valueHolder745da');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4bb56 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4bb56;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'initializeProxy', array(), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder745da;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder745da;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
