<?php

class ChargeBee_WebhookDeserializeTest extends UnitTestCase
{

  function testWebhookSerializing()
	{
		$event = ChargeBee_Event::deserialize(ChargeBee_SampleData::webhookData());
		$content = $event->content();
		$this->assertNotEqual($content->customer(), null);
		$this->assertNotEqual($content->subscription(), null);
		$this->assertNotEqual($content->card(), null);
		$this->assertNotEqual($content->invoice(), null);
	}
  
}

?>