<?php
	echo chr(65)."<br/>"; //ASCII-value
	echo chr(90)."<br/>"; 
	echo chr(97)."<br/>";
	echo chr(122)."<br/>"."<br/>";
	
	echo ord("A")."<br/>"; //string
	echo ord("anu")."<br/>"."<br/>";
	
	echo strtoupper("anukul mehta")."<br/>"."<br/>";
	
	echo strtolower("ANUKUL MEHTA")."<br/>"."<br/>";
	
	echo strlen("anuKul")."<br/>";
	echo strlen("anU Kul")."<br/>"."<br/>";
	
	echo strrev("Anukul")."<br/>";
	
	echo strcmp("hello","hello")."<br/>"; //strcmp(string1,string2)compare two string or case sensitive
	echo strcmp("Hello","hello")."<br/>";	
	echo strcmp("hello","Hello")."<br/>";
	echo strcasecmp("Hello","hello")."<br/>"."<br/>";  //case insensitive
	
	echo strstr("Hellow how Are","how")."<br/>"; //strstr(string,string_to_search or Number->ASCII value) case sensitive 
	echo strstr("hello","l")."<br/>";
	echo strstr("helloworld","wo")."<br/>";
	echo strstr("hello",111)."<br/>"; //111->small o
	echo stristr("hello world","WO")."<br/>"."<br/>";    //case insensitive
	
	echo str_replace("Morning","Night","Good Morning")."<br/>";  //str_replace(Find-chaeacter,Replace-chaeacter,string)
	echo str_replace("Patel","Mehta","Anukul Patel")."<br/>"."<br/>";
	
	echo ltrim("Hello world","Hello")."<br/>"; //ltrim(string,charlist)
	echo ltrim("Hello world","eHlo")."<br/>"; //it check only one character
	echo ltrim("Hello world","elo")."<br/>"."<br/>";
	
	echo rtrim("Hello world","dlr")."<br/>";
	echo rtrim("Hello world","dlrow")."<br/>";
	echo rtrim("Hello world","dlrw")."<br/>";
	echo rtrim("anukul mlhta","athm")."<br/>"."<br/>";
	
	echo trim("Hello world","Held")."<br/>";
	echo trim("Hello world","Herod")."<br/>";
	echo trim("Hello world","Herold")."<br/>"."<br/>";
	
	echo substr("Hello World",6)."<br/>"; //substr(string,start,length)
	echo substr("Hello World",10)."<br/>";
	echo substr("Hello World",1)."<br/>";
	echo substr("Hello World",-1)."<br/>";
	echo substr("Hello World",-10)."<br/>";
	echo substr("Hello World",-7)."<br/>";
	echo substr("Hello World",-4)."<br/>";
	echo substr("Hello World",-5)."<br/>";
	echo substr("Hello World",0,10)."<br/>";
	echo substr("Hello World",0,8)."<br/>";
	echo substr("Hello World",0,5)."<br/>";
	echo substr("Hello World",1,10)."<br/>";
	echo substr("Hello World",6,10)."<br/>";
	echo substr("Hello World",0,-1)."<br/>";
	echo substr("Hello World",0,-2)."<br/>";
	echo substr("Hello World",0,-6)."<br/>";
	echo substr("Hello World",-10,-2)."<br/>"."<br/>";
	
	echo strpos("Hello World","Wo")."<br/>";  //strpos(string,find,start)
	echo strpos("HellO World","o")."<br/>"; 
	echo strpos("Hello World","o")."<br/>";
	echo strpos("Hello World","o",3)."<br/>"; 
	echo strpos("Hello World","o",5)."<br/>";
	
	?>