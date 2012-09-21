
<div class="guestbook">

<?php include('includes/comments.php') ?>
<hr>
	<?php 
		$sqlConnection = mysql_connect( "localhost", "783846_guest", "guest" );
			if( $sqlConnection === FALSE ){
				echo "Connection Failed. Please try refreshing the page.";
			} else {
				mysql_select_db( "pagangirlpixels_zzl_comments" );
				$queryResults = mysql_query( "SELECT * FROM comments ORDER BY id desc" );
			while( $aRow = mysql_fetch_assoc( $queryResults ) ){
				echo $aRow['Date'].'<br/><a href="mailto:'.$aRow['Email_Address'].'">'.$aRow['Name'].'</a><br/><a href="http://'.$aRow['Website'].'" target="_blank">'.$aRow['Website'].'</a><br/>'.$aRow['Comment'].'<br/><hr/><br/>';
			}
		}
	?>	
</div>
