<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $user = new User();
        $user->setEmail('test@mail.ru');
        $user->setPassword('$2y$13$RdAN8iJ5wYsGnVkwyoVPBO6gD0hvGYR0C.VUb1ezN1.SGrrB4XYIG');
        $user->setRoles(['ROLE_USER']);
        
        $manager->persist( $user );

        $manager->flush();
    }
}
