<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Animanga extends \App\Entity\Animanga implements \Doctrine\ORM\Proxy\Proxy
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
     * @see \Doctrine\Persistence\Proxy::__isInitialized
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'originalTitle', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'synopsis', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'note', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'releaseDate', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'tomes', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'episodes', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'status', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'lastModification', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'feedbacks', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'genres'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'originalTitle', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'synopsis', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'note', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'releaseDate', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'tomes', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'episodes', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'status', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'lastModification', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'feedbacks', '' . "\0" . 'App\\Entity\\Animanga' . "\0" . 'genres'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Animanga $proxy) {
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
    public function setTitle(?string $title): \App\Entity\Animanga
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginalTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginalTitle', []);

        return parent::getOriginalTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginalTitle(?string $originalTitle): \App\Entity\Animanga
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginalTitle', [$originalTitle]);

        return parent::setOriginalTitle($originalTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(string $type): \App\Entity\Animanga
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getSynopsis(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSynopsis', []);

        return parent::getSynopsis();
    }

    /**
     * {@inheritDoc}
     */
    public function setSynopsis(?string $synopsis): \App\Entity\Animanga
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSynopsis', [$synopsis]);

        return parent::setSynopsis($synopsis);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', []);

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote(?int $note): \App\Entity\Animanga
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', [$note]);

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getTomes(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTomes', []);

        return parent::getTomes();
    }

    /**
     * {@inheritDoc}
     */
    public function setTomes(?int $tomes): \App\Entity\Animanga
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTomes', [$tomes]);

        return parent::setTomes($tomes);
    }

    /**
     * {@inheritDoc}
     */
    public function getEpisodes(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEpisodes', []);

        return parent::getEpisodes();
    }

    /**
     * {@inheritDoc}
     */
    public function setEpisodes(?int $episodes): \App\Entity\Animanga
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEpisodes', [$episodes]);

        return parent::setEpisodes($episodes);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(?string $status): \App\Entity\Animanga
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(?string $image): \App\Entity\Animanga
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastModification(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastModification', []);

        return parent::getLastModification();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastModification(?\DateTimeInterface $lastModification): \App\Entity\Animanga
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastModification', [$lastModification]);

        return parent::setLastModification($lastModification);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeedbacks(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeedbacks', []);

        return parent::getFeedbacks();
    }

    /**
     * {@inheritDoc}
     */
    public function addFeedback(\App\Entity\Avis $feedback): \App\Entity\Animanga
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFeedback', [$feedback]);

        return parent::addFeedback($feedback);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFeedback(\App\Entity\Avis $feedback): \App\Entity\Animanga
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFeedback', [$feedback]);

        return parent::removeFeedback($feedback);
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
    public function getReleaseDate(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReleaseDate', []);

        return parent::getReleaseDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setReleaseDate(?string $releaseDate): \App\Entity\Animanga
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReleaseDate', [$releaseDate]);

        return parent::setReleaseDate($releaseDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenres(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenres', []);

        return parent::getGenres();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenres(?string $genres): \App\Entity\Animanga
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenres', [$genres]);

        return parent::setGenres($genres);
    }

}