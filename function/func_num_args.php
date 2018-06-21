<?php
	function Hello()
	{
		echo func_num_args()." "."Arguments passed to the Function<br/>";
	}
	echo Hello("Anukul","Mehta");
?>