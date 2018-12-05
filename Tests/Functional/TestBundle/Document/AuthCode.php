<?php

declare(strict_types=1);

/*
 * This file is part of the FOSOAuthServerBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\OAuthServerBundle\Tests\Functional\TestBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use FOS\OAuthServerBundle\Entity\AuthCode as BaseAuthCode;

/**
 * @ODM\Document(collection="auth_codes")
 */
class AuthCode extends BaseAuthCode
{
    /**
     * @ODM\Id
     */
    protected $id;

    /**
     * @ODM\ReferenceOne(targetDocument=Client::class))
     */
    protected $client;

    /**
     * @ODM\ReferenceOne(targetDocument=User::class))
     */
    protected $user;
}
