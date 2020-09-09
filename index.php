<?php include 'dbconnect.php'; ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=FB-APP-ID';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


function fb_share(dynamic_link,dynamic_title){
	//alert(dynamic_title);
	var  app_id = 'FB-APP-ID';
	var pageURL = "http://www.facebook.com/dialog/feed?app_id="+ app_id + "&link=" + dynamic_link;
	var w = 600;
	var h = 400;
	var left = (screen.width / 2) - (w / 2);
	var top = (screen.height / 2) - (h / 2);
	window.open(pageURL, dynamic_title , 'toolbar=0,location=0,direction=0,status=0,menubar=yes,scrollbars=no,resizable=no,copyhistory=no,width='+800+',height=' +650+',top='+top+',left='+left)
	return false;
}
</script>
	<table>
		<thead>
			<tr>
				<th>Sl.No.</th>
				<th>Name</th>
				<th>pass</th>
				<th>Share</th>
				<th>Check Error</th>
			</tr>
		</thead>
		<tbody>
			<?php  
			$r = "SELECT * FROM `login` LIMIT 10";
			$query = mysqli_query($conn,$r);
			$i = 1;
			while($row = mysqli_fetch_assoc($query))
			{ ?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['pass']; ?></td>
					<td>
					    <?php
							$id = $row["id"];
							$url = "http://xyz.com/share.php?id=$id";
							$data = $row["user_id"];
						?>
						<a href="javascript:void(0)" onclick="fb_share('<?php echo $url; ?>','<?php echo $data ?>')" class="fbBtm">
						    Share On Facebook
						</a>
					</td>
    				<td>
    					<a target="_blank" href="share.php?id=<?php echo $id; ?>">Check Error of Share Page</a>
					</td>
				</tr>
				<?php
			   $i++;	
			}?>
		</tbody>
	</table>



























