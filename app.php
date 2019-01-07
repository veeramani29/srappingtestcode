<?php
include "simple_html_dom.php";
set_time_limit(0);
?>
 <base href="https://journals.sagepub.com" target="_blank">
<?php 

				
				
echo $brand_url='https://journals.sagepub.com/home/VRT';echo '<br>';	
				

			
				echo  $Bhtml=(file_get_html($brand_url)); 
				 $file = 'people.txt';
// Open the file to get existing content

				 file_put_contents($file, $Bhtml);

				

		
				 	
?>