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
                      
                        <form action="#" method="post">
                        <input type="text" name="name" placeholder="Author name">
                        <input type="submit" name="add" value="Add"> 
                        
                        <table class="tablestyle">
                        <thead>
                           <tr>
                                <th>Author ID</th>
                               <th>Author name</th>
                                
                            </tr>
                        </thead>
                            
                        
                            <?php
                                $db = new mysqli("localhost","librarian","","library");
                                 if(isset($_POST["delete"]))
                                {
                                   $id=$_POST["radio"];
                                   $sql1= "select * from books, authors where books.authorid=authors.authorid and authors.authorid=$id";
                                   $resultat = $db->query($sql1);
                                   $antrader = $db->affected_rows;
                                   if($antrader === 0)
                                   {
                                      $sql ="delete from authors where authorid=$id";
                                      $resultat = $db->query($sql); 
                                   }
                                   else
                                   {
                                       echo 'ikke gyldig!!';
                                   }
                                   
                                }
                                $sql ="select * from authors";
                                $resultat = $db->query($sql);
                                while($row = $resultat->fetch_assoc())
                                {
                                    echo "<tr><td><input type='radio' name='radio'value='{$row['authorid']}'>{$row['authorid']}</td><td>{$row['name']}</td></tr>";
 		
                                }
                                                       
                               
                                   $resultat->close();
                                   $db-> close(); 
                                
                            ?>
                     </table>
                            <input type="submit" name="delete" value="delete">
                    </form>
	
			
		</div>

	</body>

</html>