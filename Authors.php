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


	
		<div id="container"> <!--An invisible container to keep the content in the middle of the page-->
			<h1 id="welcome">Authors</h1>
                        <p id="about">The authors of the Book Library</p>
                        <table class="tablestyle">
                        <thead>
                           <tr>
                                <th>Authorid</th>
                               <th>Author name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                            <?php
                                $db = new mysqli("localhost","librarian","","library");
                                $sql ="select * from authors";
                                $resultat = $db->query($sql);
                                while($row = $resultat->fetch_assoc())
                                {
                                    echo "<tr><td><a> {$row['authorid']}</a></td><td><a> {$row['name']} </a></td><td><button>Edit</button></td>
                                    <td><button>Delete</button></td></tr>";
 		
                                }
                                $resultat->close();
                                $db-> close();
                            ?>
                     </table>
                      
			
	
			
		</div>

	</body>

</html>