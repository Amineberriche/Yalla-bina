<?php

namespace ContainerZXWP8Ra;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class Paginator_f262b94 extends \Knp\Component\Pager\Paginator implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Knp\Component\Pager\Paginator|null wrapped object, if the proxy is initialized
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

    public function setDefaultPaginatorOptions(array $options) : void
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'setDefaultPaginatorOptions', array('options' => $options), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        $this->valueHolder745da->setDefaultPaginatorOptions($options);
return;
    }

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        return $this->valueHolder745da->paginate($target, $page, $limit, $options);
    }

    public function subscribe(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber) : void
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'subscribe', array('subscriber' => $subscriber), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        $this->valueHolder745da->subscribe($subscriber);
return;
    }

    public function connect(string $eventName, $listener, int $priority = 0) : void
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, 'connect', array('eventName' => $eventName, 'listener' => $listener, 'priority' => $priority), $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        $this->valueHolder745da->connect($eventName, $listener, $priority);
return;
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

        unset($instance->eventDispatcher, $instance->defaultOptions, $instance->requestStack);

        $instance->initializer4bb56 = $initializer;

        return $instance;
    }

    public function __construct(?\Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher = null, ?\Symfony\Component\HttpFoundation\RequestStack $requestStack = null)
    {
        static $reflection;

        if (! $this->valueHolder745da) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
            $this->valueHolder745da = $reflection->newInstanceWithoutConstructor();
        unset($this->eventDispatcher, $this->defaultOptions, $this->requestStack);

        }

        $this->valueHolder745da->__construct($eventDispatcher, $requestStack);
    }

    public function & __get($name)
    {
        $this->initializer4bb56 && ($this->initializer4bb56->__invoke($valueHolder745da, $this, '__get', ['name' => $name], $this->initializer4bb56) || 1) && $this->valueHolder745da = $valueHolder745da;

        if (isset(self::$publicProperties5a094[$name])) {
            return $this->valueHolder745da->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');

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
        unset($this->eventDispatcher, $this->defaultOptions, $this->requestStack);
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

if (!\class_exists('Paginator_f262b94', false)) {
    \class_alias(__NAMESPACE__.'\\Paginator_f262b94', 'Paginator_f262b94', false);
}
