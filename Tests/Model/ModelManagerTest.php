<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\DoctrineMongoDBAdminBundle\Tests\Model;

use Sonata\DoctrineMongoDBAdminBundle\Model\ModelManager;

class ModelManagerTest extends \PHPUnit_Framework_TestCase
{
    public function testFilterEmpty()
    {
        $registry = $this->getMockBuilder('Doctrine\ODM\MongoDB\DocumentManager')
                ->disableOriginalConstructor()
                ->getMock();

        $manager = new ModelManager($registry);
    }

}
