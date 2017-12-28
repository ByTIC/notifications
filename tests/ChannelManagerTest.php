<?php

namespace ByTIC\Notifications\Tests;

use ByTIC\Notifications\ChannelManager;
use ByTIC\Notifications\Channels\MailDbChannel;

class ChannelManagerTest extends AbstractTest
{
    
    public function testDriverMailDb()
    {
        $manager = new ChannelManager();
        
        $channel = $manager->channel('mailDb');
        $this->assertInstanceOf(MailDbChannel::class, $channel);
    }

}