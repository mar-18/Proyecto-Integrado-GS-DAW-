<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Salon extends \App\Entity\Salon implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Salon' . "\0" . 'idsalon', '' . "\0" . 'App\\Entity\\Salon' . "\0" . 'nombresalon', '' . "\0" . 'App\\Entity\\Salon' . "\0" . 'capacidad', '' . "\0" . 'App\\Entity\\Salon' . "\0" . 'foto', '' . "\0" . 'App\\Entity\\Salon' . "\0" . 'precio', '' . "\0" . 'App\\Entity\\Salon' . "\0" . 'decoracionIddecoracion'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Salon' . "\0" . 'idsalon', '' . "\0" . 'App\\Entity\\Salon' . "\0" . 'nombresalon', '' . "\0" . 'App\\Entity\\Salon' . "\0" . 'capacidad', '' . "\0" . 'App\\Entity\\Salon' . "\0" . 'foto', '' . "\0" . 'App\\Entity\\Salon' . "\0" . 'precio', '' . "\0" . 'App\\Entity\\Salon' . "\0" . 'decoracionIddecoracion'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Salon $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdsalon(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdsalon();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdsalon', []);

        return parent::getIdsalon();
    }

    /**
     * {@inheritDoc}
     */
    public function getNombresalon(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombresalon', []);

        return parent::getNombresalon();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombresalon(string $nombresalon): \App\Entity\Salon
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombresalon', [$nombresalon]);

        return parent::setNombresalon($nombresalon);
    }

    /**
     * {@inheritDoc}
     */
    public function getFoto(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFoto', []);

        return parent::getFoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setFoto(?string $foto): \App\Entity\Salon
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFoto', [$foto]);

        return parent::setFoto($foto);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrecio(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrecio', []);

        return parent::getPrecio();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrecio(float $precio): \App\Entity\Salon
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrecio', [$precio]);

        return parent::setPrecio($precio);
    }

    /**
     * {@inheritDoc}
     */
    public function getDecoracionIddecoracion(): ?\App\Entity\Decoracion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDecoracionIddecoracion', []);

        return parent::getDecoracionIddecoracion();
    }

    /**
     * {@inheritDoc}
     */
    public function setDecoracionIddecoracion(?\App\Entity\Decoracion $decoracionIddecoracion): \App\Entity\Salon
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDecoracionIddecoracion', [$decoracionIddecoracion]);

        return parent::setDecoracionIddecoracion($decoracionIddecoracion);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getCapacidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCapacidad', []);

        return parent::getCapacidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setCapacidad(int $capacidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCapacidad', [$capacidad]);

        return parent::setCapacidad($capacidad);
    }

}
