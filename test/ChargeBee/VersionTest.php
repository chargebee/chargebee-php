<?php

class ChargeBee_VersionTest extends UnitTestCase
{

	public function testVersion()
	{
		$this->assertEqual(ChargeBee_Version::VERSION, '1.4.6');
	}

}

?>
