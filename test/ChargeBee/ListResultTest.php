<?php
class ChargeBee_ListResultTest extends UnitTestCase
{
	function testResponseToListConversion()
	{
		$list = new ChargeBee_ListResult(ChargeBee_SampleData::listSubscriptions());
		$this->assertEqual($list->count(), 2);
		foreach($list as $l)
		{
			$this->assertEqual($l->subscription()->id, "sample_subscription");
		}
	}
	
}
?>