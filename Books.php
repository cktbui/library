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

			
                        <form action="#" method="post">
                            <input type="text" name="title" placeholder="Book title">
                            <select name="author_name" placeholder="Author name">
                                <?php
                                    $db = new mysqli("localhost","librarian","","library");
                                    $sql ="select name from authors";
                                    $resultat = $db->query($sql);
                                    while($row = $resultat->fetch_assoc())
                                    {
                                        echo "<option>{$row['name']}</option>";
                                    }
                                    $resultat->close();
                                    $db->close();
                                    
                                ?>
                                </select>
                            <input type="text" name="ISBN" placeholder="ISBN">
                            <input type="text" name="pub_year" placeholder="Published year">
                            <input type="text" name="available" placeholder="Available">
                            <input type="submit" name="add" value="Add"> 
                            
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
                                    <?php
                                        $db = new mysqli("localhost","librarian","","library");
                                        $sql ="select b.bookid, b.title,a.name, b.pub_year, b.available from books as b, authors as a where b.authorid=a.authorid";
                                        $resultat = $db->query($sql);
                                        while($row = $resultat->fetch_assoc())
                                        {
                                            echo "<tr><td><a> {$row['bookid']} </a></td><td><a> {$row['title']} </a></td><td><a> {$row['name']} </a></td><td><a> {$row['pub_year']} </a></td><td><a> {$row['available']} </a></td><td><button>Edit</button></td>
                                            <td><input name='slett' type='submit' value='Delete' alt='{$row['bookid']}'></td></tr>";

                                        }
                                        $resultat->close();
                                        $db->close();
                                        if(isset($_POST["add"]))
                                        {
                                             $name = $_POST['author_name'];
                                             $db = new mysqli("localhost","librarian","","library");
                                             $getNameId = "select authorid from authors where name='$name'";
                                             $resultat1 = $db->query($getNameId);
                                             if($db->affected_rows==1)
                                             {
                                                 $row = $resultat1->fetch_assoc();
                                                 echo "{$row['authorid']}";
                                             }
                                             else{
                                                 die($db->error);
                                             }
                                             $resultat1->close();
                                             $title = $_POST['title'];
                                             $authorid = "{$row['authorid']}";
                                             $ISBN = $_POST['ISBN'];
                                             $pubyear = $_POST['pub_year'];
                                             $available = $_POST['available'];
                                             $sql = "insert into books values('', $authorid, '$title','$ISBN','$pubyear','$available')";
                                             $resultat = $db->query($sql);
                                             //$resultat->close();
                                             $db->close();
                                             
                                        }

                                        ?>
                             </table>
                          
                    </form>
                   <a href="http://www.urbandictionary.com/define.php?term=library" target="blank">what is a library? Click on me and find out!</a>			
		</div>

	</body>

</html>