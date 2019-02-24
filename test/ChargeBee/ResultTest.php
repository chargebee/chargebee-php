<?php

class ChargeBee_ResultTest extends UnitTestCase
{
    public function testSimpleResponseToObjectConversion()
    {
        $result = new \ChargeBee\ChargeBee\Result(ChargeBee_SampleData::simpleSubscription());
        $s = $result->subscription();
        $c = $result->customer();
        $this->assertEqual($s->id, "simple_subscription");
        $this->assertEqual($s->planId, "basic");
        $this->assertEqual($c->firstName, "simple");
        $this->assertEqual($c->lastName, "subscription");
    }

    public function testNestedResponseToObjectConversion()
    {
        $result = new \ChargeBee\ChargeBee\Result(ChargeBee_SampleData::nestedSubscription());
        $s = $result->subscription();
        $this->assertEqual($s->id, "nested_subscription");
        $addons = $s->addons;
        $this->assertEqual(count($addons), 2);
        foreach ($addons as $a) {
            $this->assertTrue(in_array($a->id, array('monitor', 'ssl')));
        }
    }

    public function testEventResponseToObjectConversion()
    {
        $result = new \ChargeBee\ChargeBee\Result(ChargeBee_SampleData::sampleEvent());
        $event = $result->event();
        $content = $event->content();
        $s = $content->subscription();
        $this->assertEqual($s->id, "unpaid_cancelled");
        $c = $content->customer();
        $this->assertEqual($c->email, "unpaid_cancelled@test.com");
        $card = $content->card();
        $this->assertEqual($card->cardType, "visa");
    }
}
