<?php
if($_SESSION['user'] == "it@awesomecompany.com")
{
	?>
                        <h4 class="widgettitle">Welcome</h4>
                        <div class="widgetcontent">
                          Welcome it@awesomecompany.com.
						  <!-- Flag is RST{<?php echo hash("sha256", "1MPLIC1TFLOWISD34D"); ?>} -->
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