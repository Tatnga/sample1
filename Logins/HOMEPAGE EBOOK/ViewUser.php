
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View User</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
	<div class="container">
		<div class="header">
			<div class="nav">
				<div class="search">
					<input type="text" placeholder="Search..">
					<button type="submit"><img src="search.png" style="height: 30px;"></button>
				</div>
			</div>
			<div class="user">
				<a href="Home.php" class="btn">Home Page</a>
			</div>
		</div>
	</div>
	
</head>
<body>
	<div class="side-bar">
		<div>
			<center>
			<img src="Ebook.png" width="150px">
			</center>
		</div>	
		<ul>
			
			<li>
				<a href="Home.php" class="active">
				<i class="fa-solid fa-house"></i>
				<span class="links_name">&nbsp;Home Page</span>
				</a>
			</li>
		
			<li>
				<a href="ViewBooks.php" class="active">
				<i class="fa-solid fa-book"></i>
				<span class="links_name">&nbsp;View Books</span>
				</a>
			</li>
		
			<li>
				<a href="ViewUser.php" class="active">
				<i class="fa-solid fa-user"></i>
				<span class="links_name">&nbsp;View User</span>
				</a>
			</li>
		
			<li>
				<a href="ViewMessage.php" class="active">
				<i class="fa-solid fa-message"></i>
				<span class="links_name">&nbsp;View Message</span>
				</a>
			</li>
			
			<li>
				<a href="History.php" class="active">
				<i class="fa fa-history" aria-hidden="true"></i>
				<span class="links_name">&nbsp;View History</span>
				</a>
			</li>
			<li style="margin-top: 150px;">
				<a href="../login.php" class="active">
				<i class="fa-solid fa-right-from-bracket"></i>
				<span class="links_name">&nbsp;Log out</span>
				</a>
			</li>
			
		</ul>
	</div>

	<div class="container">
		<div class="header">
			<div class="nav">
				<div class="search">
					<input type="text" placeholder="Search..">
					<button type="submit"><img src="search.png" style="height: 30px;"></button>
				</div>
			</div>
			<div class="user">
				<a href="Home.php" class="btn">Home Page</a>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>

		<div class="home-content">
         <!--<p>Manage</p>-->
         <div class="user">
         .</p>
        

         <div class="tab">
                    <table class="table table-striped" width="100%" text-align="center">
                    <tr>
                    <th scope="col"><strong>NAME</strong></th>
                    <th scope="col"><strong>ID#</strong></th>
                    <th scope="col"><strong>EMAIL</strong></th>     
                    <th scope="col"><strong>status</strong></th>
                    <th scope="col"><strong>Action</strong></th>     
                	</tr>

                   <!--?php
				   $data = $db->retrieve("film");
				   $data = json_decode($data, 1);
				   
				   if(is_array($data)){
				      foreach($data as $id => $film){
				         echo "<tr>
				         <td><img src='{$film['thumbnail']}'></td>
				         <td>{$film['title']}</td>
				         <td>{$film['year']}</td>
				         <td>{$film['rating']}</td>
				         <td><a href='edit.php?id=$id'>EDIT</a></td>
				         <td><a href='delete.php?id=$id'>DELETE</a></td>
				      </tr>";
				      }
				   }
				   ?-->




              </table>
        </div> 

	</div>
	
</body>
<style>
	.container {
	position: absolute;
	right: 0;
	width: 78vw;
	height: 1000vh;
	background: white;
}
</style>
</html>