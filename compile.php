<?php
	$asset = "css img js themes font-awesome-4.0.3";
	echo("[*] Generating index.html\n");
	exec("rm -rf out");
	exec("mkdir -pv out");
	exec("php index.php > out/index.html");

	echo("[*] Patching index.html\n");
	// replace .php with .html

	$path_to_file = 'out/index.html';
	$file_contents = file_get_contents($path_to_file);
	$file_contents = str_replace(".php",".html",$file_contents);
	file_put_contents($path_to_file,$file_contents);

	$files = scandir("pages");
	echo("[*] Generating subpages:\n");
	exec("mkdir -pv out/pages");
	foreach ($files as $key => $value)
		if(!is_dir($value)) {
			exec("php pages/" . $value . " > out/pages/" . str_replace(".php", ".html", $value));
			echo("    [+] Generating pages/" . str_replace(".php", ".html", $value) . "\n");
		}

	echo("[*] Copying plugins\n");
	exec("cp -r plugins out/");

	echo("[*] Copying assets: " . $asset . "\n");
	exec("cp -rf " . $asset . " out/ ");

	echo("[*] Removing *.php files\n");
	exec("rm -rf `find out | grep  .php`");

	echo("\nSuccess!! See ./out directory.\n\n");
?>
