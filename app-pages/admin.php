<?php
if($_SESSION['user'] == "it@awesomecompany.com")
{
	?>
                        <h4 class="widgettitle">Congratulations</h4>
                        <div class="widgetcontent">
                          Flag is <em>RST{1MPLIC1TFLOWISD34D}</em>
                        </div>
<?php
}else{
	?>
	                     <h4 class="widgettitle">Access denied</h4>
                        <div class="widgetcontent">
                          Only <em>it@awesomecompany.com</em> user is allowed to access this area.
                        </div>
	<?php
}
?>