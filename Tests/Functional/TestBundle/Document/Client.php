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
use FOS\OAuthServerBundle\Entity\Client as BaseClient;

/**
 * @ODM\Document(collection="clients")
 */
class Client extends BaseClient
{
    /**
     * @ODM\Id
     */
    protected $id;
}
