<?php

declare (strict_types=1);
namespace RectorPrefix20220511;

use Rector\Config\RectorConfig;
use Rector\Php80\Rector\Class_\AnnotationToAttributeRector;
use Rector\Php80\ValueObject\AnnotationToAttribute;
return static function (\Rector\Config\RectorConfig $rectorConfig) : void {
    $rectorConfig->ruleWithConfiguration(\Rector\Php80\Rector\Class_\AnnotationToAttributeRector::class, [new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\AlsoLoad'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\ChangeTrackingPolicy'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\DefaultDiscriminatorValue'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\DiscriminatorField'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\DiscriminatorMap'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\DiscriminatorValue'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\Document'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\EmbeddedDocument'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\EmbedMany'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\EmbedOne'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\Field'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\File'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\File\\ChunkSize'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\File\\Filename'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\File\\Length'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\File\\Metadata'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\File\\UploadDate'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\HasLifecycleCallbacks'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\Id'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\Index'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\Indexes'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\InheritanceType'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\Lock'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\MappedSuperclass'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\PostLoad'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\PostPersist'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\PostRemove'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\PostUpdate'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\PreFlush'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\PreLoad'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\PrePersist'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\PreRemove'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\PreUpdate'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\QueryResultDocument'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\ReadPreference'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\ReferenceMany'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\ReferenceOne'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\ShardKey'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\UniqueIndex'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\Validation'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\Version'), new \Rector\Php80\ValueObject\AnnotationToAttribute('Doctrine\\ODM\\MongoDB\\Mapping\\Annotations\\View')]);
};
