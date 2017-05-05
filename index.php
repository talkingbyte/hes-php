<?php
echo "<!DOCTYPE html><html><head><link rel='stylesheet' href='styles.css' type='text/css'><script type='text/javascript' src='scripts.js'></script><title>Welcome to Harrow English School, Darbhanga</title></head>";
echo "<body><h1>Harrow English School, Darbhanga</h1>";
echo "<div id='search_box'><form action='details.php' method='POST'>\n<select name='sel_class'><option>Nursery<option>LKG<option>UKG<option value='1'>I<option value='2'>II<option value='3'>III<option value='4'>IV<option value='5'>V<option value='6'>VI<option value='7'>VII<option value='8'>VIII<option>IX<option>X<option>XI<option>XII</select>\n<select name='sel_section'><option>A<option>B<option>C<option>D</select>\n<input type='submit' value='Show details' />\n</form></div>";
echo "</body></html>";
?>
