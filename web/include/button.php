<a name="button"><h3>Button</h3></a>

<?php 
	$color = array("white","red","green","blue","orange","purple","yellow","brown","black","grey");
	$all = count($color);
	for($i=0;$i<$all;$i++){
		echo '
			<p>For '.$color[$i].' button use <span class="label">.button-'.$color[$i].'</span> class.</p>
		';
		echo '
			<button class="button-'.$color[$i].'">Button</button>
		';

	}
 ?>
<p><b>Special Button for flat design.</b></p>
<?php 
	$color = array("white","red","green","blue","orange","purple","yellow","brown","black","grey");
	$all = count($color);
	for($i=0;$i<$all;$i++){
		echo '
			<p>For flat '.$color[$i].' button use <span class="label">.flat-'.$color[$i].'</span> class.</p>
		';
		echo '
			<button class="flat-'.$color[$i].'">Button</button>
		';

	}
 ?>


<a href="#top" class="label green right">Go to top</a>