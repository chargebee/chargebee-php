<?php

class ChargeBee_VersionTest extends UnitTestCase
{

	public function testVersion()
	{
		$this->assertEqual(ChargeBee_Version::VERSION, '1.3.8');
	}

}

?>
