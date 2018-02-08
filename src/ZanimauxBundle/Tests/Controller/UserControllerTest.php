<?php

namespace ZanimauxBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testAffiche()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/affiche');
    }

}
