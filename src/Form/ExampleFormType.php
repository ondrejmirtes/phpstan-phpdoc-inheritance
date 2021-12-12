<?php

declare(strict_types=1);

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\DataTransformerInterface;

/**
 * @implements DataTransformerInterface<mixed, mixed>
 */
final class ExampleFormType extends AbstractType implements DataTransformerInterface
{
    /** {@inheritdoc} */
    public function transform($value)
    {
        return $value;
    }

    /** {@inheritdoc} */
    public function reverseTransform($value)
    {
        return $value;
    }
}
