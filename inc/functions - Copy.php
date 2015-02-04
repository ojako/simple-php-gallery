<?php

//print front page showcase gallery
function printShowcaseGallery(){
	echo '<ul class="g">'."\r\n";
	if ($handle = opendir('media')) {
		while (false !== ($entry = readdir($handle))) {
			$files = glob("media/$entry/thumbs/*.*");
			$blacklist = array('.', '..');
			//print showcase
			if($entry == "Showcase"){
				for ($i=0; $i<count($files); $i++){
					$num = $files[$i];
					$filename = basename($files[$i]);
					echo '<li>';
					echo '<a href="media/'.$entry.'/'.$filename.'" class="image-hover lb" data-lightbox-hidpi="image_large@2x.jpg" data-lightbox-type="ajax" data-lightbox-gallery="'.$entry.'"><img src="'.$num.'" alt="'.$entry.' - '.$num.'"/></a>';
					echo "</li>\r\n";
				}
			}
		//echo '<div class="spacer"></div>';
		}
	closedir($handle);
	echo "</ul>\r\n";
	}else{
		echo "<p>Gallery cannot open directory</p>";
	}
}

//strip unusual characters and file extentions from strings
function ldap_pear_hex2asc($string) {
	$patterns = [''];
	$replacements = [''];
	//remove unusual characters
	$string = preg_replace('/[^a-z\.\-[:space:]]/i', '', $string);
	//remove extension
	$string = preg_replace('/\\.[^.\\s]{3,4}$/', '', $string);
    return $string;
}











//print all images and thumbs from media gallery
function printAllImages(){
	if ($handle = opendir('media')) {
		$thumbsize = 250;
		while (false !== ($entry = readdir($handle))) {
			$files = glob("media/$entry/thumbs/*.*");
			$blacklist = array('.', '..');
			//do not print showcase
			if($entry != "Showcase")
	{			/*if (!in_array($entry, $blacklist)) {
					echo '<section class="gallery-section">';
					echo '<header>';
					echo '<h3>'.basename($entry).'</h3>';
					echo '</header>';
				}*/
				for ($i=0; $i<count($files); $i++){
					$num = $files[$i];
					$filename = basename($files[$i]);
					$cleanname = ldap_pear_hex2asc($filename);
					echo '<div class="img-tile">' . "\n";
					echo '<a href="media/'.$entry.'/'.$filename.'" class="image-hover lb" title="'.basename($entry).' - '.$cleanname.'" data-lightbox-hidpi="image_large@2x.jpg" data-lightbox-type="ajax" data-lightbox-gallery="'.$entry.'"><img class="lazy" data-original="'.$num.'" alt="'.$cleanname.'" height="'.$thumbsize.'" width="'.$thumbsize.'"/></a>';
					echo "</div>" . "\n";
				}
			}
		}	
		closedir($handle);
	}
}

//print all images and thumbs from media gallery with headers
function printGalleryList(){
	echo '<section class="gallery">';
	if ($handle = opendir('media')) {
		$thumbsize = 100;
		while (false !== ($entry = readdir($handle))) {
			$files = glob("media/$entry/thumbs/*.*");
			$blacklist = array('.', '..');
			//do not print showcase
			if($entry != "Showcase"){
				if (!in_array($entry, $blacklist)) {
					echo '<section class="gallery-section">';
					echo '<header>';
					echo '<h3>'.basename($entry).'</h3>';
					echo '</header>';
				}
				for ($i=0; $i<count($files); $i++){
					$num = $files[$i];
					$filename = basename($files[$i]);
					echo '<div class="img-tile">';
					echo '<a href="media/'.$entry.'/'.$filename.'" class="image-hover lb" data-lightbox-hidpi="image_large@2x.jpg" data-lightbox-type="ajax" data-lightbox-gallery="'.$entry.'"><img src="'.$num.'" alt="'.$entry.' - '.$num.'" height="'.$thumbsize.'" width="'.$thumbsize.'"/></a>';
					echo "</div>";
				}
			}
		}	
		closedir($handle);
	}
	echo "</section>";
}

//print gallery selectors
function printGallerySelectors(){
	if ($handle = opendir('media')) {
		//set thumb size
		$thumbsize = 200;
		while (false !== ($entry = readdir($handle))) {
			$coverPhoto = ("media/$entry/thumbs/cover.jpg");
			$blacklist = array('.', '..', 'Showcase');
			//print showcase or not
				if (!in_array($entry, $blacklist)) {
					echo '<section class="album-tile">';
					echo '<header>';
					echo '<h3>'.basename($entry).'</h3>';
					echo '</header>';
				}
					echo '<div class="album-tile">';
					
					echo '<a href="#" class="image-hover" data-lightbox-hidpi="image_large@2x.jpg" data-lightbox-type="ajax" data-lightbox-gallery="'.$entry.'"><img src="'.$coverPhoto.'" alt="'.$entry.'" height="'.$thumbsize.'" width="'.$thumbsize.'"/></a>';
					
					echo "</div>";
			
			echo "</section>";
		}	
		closedir($handle);
	}
}

?>