<!DOCTYPE html>

<html lang="eng">
	<head>
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<title>The Library</title>
		<link rel="stylesheet" type="text/css" href="Style.css">
		<script type="text/javascript" src="javascript.js"></script>
	</head>

	<body>
		<header>
			<nav>
				<a class="bucket-link" href="Authors.php">Authors</a>
				<a href="../index.php" ><img src="B-ribbon.png" class="welcome-link-img" alt="Turqoise ribbon-link with a curly B on."/> </a> 
                                <a class="done-link" href="Books.php">Books</a>
			</nav>
		</header>


	
		<div id="container"> <!--An invisible container to keep my content in the middle of the page-->
			<h1 id="welcome">Books</h1>
                        <p id="about">All the books in the library!</p>

			
			
<table class="tablestyle">
 <thead>
 		<tr>
 			<th>S.N.</th>
 			<th>Book title</th>
 			<th>Author name</th>
 			<th>Published year</th>
 			<th>Available</th>
 			<th>Edit</th>
 			<th>Delete</th>
 		</tr>
 	</thead>
 	<tbody>
 	<?php 
 		$db = new mysqli("localhost","root","","library");
 		$sql ="select b.bookid, b.title,a.name, b.pub_year, b.available from books as b, authors as a where b.authorid = a.authorid";
 		$resultat = $db->query($sql);
 		if(!$resultat)
 		{
 			die("feil");
 		}
 		while( $row = $resultat->fetch_assoc())
 		{
 			$tekst= "<tr>
 			<td><a>{$row['bookid']}</a></td>
 			<td><a>$row['title']}</a></td>
 			<td><a>$row['name']}</a></td>
 			<td><a>$row['pub_year']}</a></td>
 			<td><a>$row['available']}</a></td>
 			<td><button>Edit</button></td>
 			<td><button>Delete</button></td>
 		</tr>"
 		}

 	?>
 	<!--	
 	
 		<tr>
 			<td><a>1</a></td>
 			<td><a>The Two Towers</a></td>
 			<td><a>J.R.R. Tolkein</a></td>
 			<td><a>1954</a></td>
 			<td><a>Yes</a></td>
 			<td><button>Edit</button></td>
 			<td><button>Delete</button></td>
 		</tr>
 		<tr>
 			<td><a>1</a></td>
 			<td><a>The Two Towers</a></td>
 			<td><a>J.R.R. Tolkein</a></td>
 			<td><a>1954</a></td>
 			<td><a>Yes</a></td>
 			<td><button>Edit</button></td>
 			<td><button>Delete</button></td>
 		</tr>
 		<tr>
 			<td><a>1</a></td>
 			<td><a>The Two Towers</a></td>
 			<td><a>J.R.R. Tolkein</a></td>
 			<td><a>1954</a></td>
 			<td><a>Yes</a></td>
 			<td><button>Edit</button></td>
 			<td><button>Delete</button></td>
 		</tr>-->
 	</tbody>
 </table>
		<a href="http://www.urbandictionary.com/define.php?term=library" target="blank">what is a library? Click on me and find out!</a>			
		</div>

	</body>

</html>