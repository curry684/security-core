<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Core\Authentication\Token;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @author Wouter de Jong <wouter@wouterj.nl>
 */
class NullToken implements TokenInterface
{
    public function __toString(): string
    {
        return '';
    }

    public function getRoleNames(): array
    {
        return [];
    }

    public function getCredentials()
    {
        return '';
    }

    public function getUser()
    {
        return '';
    }

    public function setUser(string|\Stringable|UserInterface $user)
    {
        throw new \BadMethodCallException('Cannot set user on a NullToken.');
    }

    public function getUsername()
    {
        trigger_deprecation('symfony/security-core', '5.3', 'Method "%s()" is deprecated, use getUserIdentifier() instead.', __METHOD__);

        return '';
    }

    public function getUserIdentifier(): string
    {
        return '';
    }

    public function isAuthenticated()
    {
        return true;
    }

    public function setAuthenticated(bool $isAuthenticated)
    {
        throw new \BadMethodCallException('Cannot change authentication state of NullToken.');
    }

    public function eraseCredentials()
    {
    }

    public function getAttributes()
    {
        return [];
    }

    public function setAttributes(array $attributes)
    {
        throw new \BadMethodCallException('Cannot set attributes of NullToken.');
    }

    public function hasAttribute(string $name)
    {
        return false;
    }

    public function getAttribute(string $name)
    {
        return null;
    }

    public function setAttribute(string $name, mixed $value)
    {
        throw new \BadMethodCallException('Cannot add attribute to NullToken.');
    }

    public function __serialize(): array
    {
        return [];
    }

    public function __unserialize(array $data): void
    {
    }
}
