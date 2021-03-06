<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Manifestation extends \App\Entity\Manifestation implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'eventDate', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'cp', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'club', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'brochure', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'imageFile'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'eventDate', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'cp', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'club', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'brochure', '' . "\0" . 'App\\Entity\\Manifestation' . "\0" . 'imageFile'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Manifestation $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(string $title): \App\Entity\Manifestation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventDate', []);

        return parent::getEventDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventDate(\DateTimeInterface $eventDate): \App\Entity\Manifestation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventDate', [$eventDate]);

        return parent::setEventDate($eventDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille(string $ville): \App\Entity\Manifestation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getCp(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCp', []);

        return parent::getCp();
    }

    /**
     * {@inheritDoc}
     */
    public function setCp(string $cp): \App\Entity\Manifestation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCp', [$cp]);

        return parent::setCp($cp);
    }

    /**
     * {@inheritDoc}
     */
    public function getClub(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClub', []);

        return parent::getClub();
    }

    /**
     * {@inheritDoc}
     */
    public function setClub(string $club): \App\Entity\Manifestation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClub', [$club]);

        return parent::setClub($club);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): \App\Entity\Manifestation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getBrochure(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrochure', []);

        return parent::getBrochure();
    }

    /**
     * {@inheritDoc}
     */
    public function setBrochure(?string $brochure): \App\Entity\Manifestation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBrochure', [$brochure]);

        return parent::setBrochure($brochure);
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFile(\Symfony\Component\HttpFoundation\File\File $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFile', [$image]);

        return parent::setImageFile($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFile(): ?\Symfony\Component\HttpFoundation\File\File
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFile', []);

        return parent::getImageFile();
    }

}
