
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Messages</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
	
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
		<br>
		<div class="tab">
	<table class="table table-striped" width="100%" text-align="center">
	      <thead>
	      <tr>
	      <th scope="col">Action</th>      
	      <th scope="col">Subject</th>  
	      <th scope="col" style="width:20%;">Message</th> 
	      <th scope="col">Firstname</th> 
	      <th scope="col">Lastname</th> 
	      <th scope="col">Email</th> 
	      <th scope="col">Phone</th> 
	      <th scope="col">Address</th> 

	      </tr>
	      </thead>
	      <!--?php while($row = mysqli_fetch_assoc($select)){ ?-->
	      <!--tr>
	         <td>
	         <a href="userchem.php?delete=<?php echo $row['id']; ?>" class="btn"><i class="fas fa-trash"></i>Delete</a>
	         </td>
	         <td><?php echo $row['subject']; ?></td>
	         <td style="word-break:break-all;"><?php echo $row['message']; ?></td>
	         <td><?php echo $row['firstname']; ?></td>
	         <td><?php echo $row['lastname']; ?></td>
	         <td><?php echo $row['email']; ?></td>
	         <td><?php echo $row['phone']; ?></td>
	         <td><?php echo $row['address']; ?></td>
	      </tr-->
	   <!--?php } ?-->
	   </table>
	</div>         
	                     </div> 
	        </div> 
	            
	  </section>
	  <script>
	let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".sidebarBtn");
	sidebarBtn.onclick = function() {
	  sidebar.classList.toggle("active");
	  if(sidebar.classList.contains("active")){
	  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
	}else
	  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
	}
	 </script>















	</div>
	
</body>
<style>
	.container {
	position: absolute;
	right: 0;
	width: 75vw;
	height: 1000vh;
	background: white;
}
</style>
</html>