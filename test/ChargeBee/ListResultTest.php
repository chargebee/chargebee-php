<?php

class ListResultTest extends UnitTestCase
{
    public function testResponseToListConversion()
    {
        $list = new \ChargeBee\ChargeBee\ListResult(ChargeBee_SampleData::listSubscriptions(), null);
        $this->assertEqual($list->count(), 2);
        foreach ($list as $l) {
            $this->assertEqual($l->subscription()->id, "sample_subscription");
        }
    }
}
