<?php
//index.php
include 'connect.php';
include 'header.php';
        $bdd = new pdo('mysql:host=localhost;dbname=online-forum-database;','root','');
        $allcategories =$bdd->query('SELECT * FROM categories ORDER BY cat_id DESC');
        if(isset($_GET['s']) and !empty($_GET['s']) ){
            $recherche = htmlspecialchars($_GET['s']);
            $allcategories = $bdd->query('SELECT cat_name FROM categories WHERE cat_name LIKE "%'.$recherche.'%" ORDER BY cat_id DESC');

        }

$sql = "SELECT  *
   FROM CATEGORIES
   INNER JOIN TOPICS
   ON CATEGORIES.CAT_ID = TOPICS.TOPIC_CAT;";


$result = mysqli_query($conn, $sql);

if(!$result)
{
    echo 'The categories could not be displayed, please try again later.';
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'No categories defined yet.';
    }
    else
    {
        ?>

        <!DOCTYPE html>
        <html>
        <form method="GET"> 
      <input type="search" name="s" placeholder="rechercher une categories">
     <input type="SUBMIT" value="Search!"> 
     </form>
     <section class="afficher_categories">
        <?php
         if($allcategories->rowcount()>0){
            while($categories = $allcategories->fetch()){
                
               ?>
               <p><?= $categories['cat_name'];?></p>
               <?php
            }
         }else
         echo 'categories introuvable !!!';
         ?>
         </section>
         </html>

         <?php
                
       echo '<table border="1">
              <tr>
                <th>Category</th>
                <th>Topic</th> 
              </tr>';

        while($row = mysqli_fetch_assoc($result))
        {
            echo '<tr>';
                echo '<td class="leftpart">';
                     echo '<h3><a href="category.php?id=' . $row['cat_id'] . '">' . $row['cat_name'] . '</a></h3>' . $row['cat_description'];
                echo '</td>';
                echo '<td class="rightpart">';
                            echo '<h3><a href="topic.php?id=' . $row['topic_id'] . '">' . $row['topic_subject'] . '</a><h3>';;
                echo '</td>';
            echo '</tr>';
        }
    }
}

?>
