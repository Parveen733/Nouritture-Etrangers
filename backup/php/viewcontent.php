<?php while($row=mysqli_fetch_array($result)) {?>
<a href="Recipecontentdtl.php?Recipe_Id=<?php echo $row['Recipe_Id']?>" >
      <div class="viewcontent">
    <img src="<?php echo $row['Recipe_Image']?>" onerror="this.src ='../img/defaultimage.jpg'">
       <h1><?php echo $row['Recipe_Name']?></h1>
        <table >
        
        <tr>
        <td><h3>Ingrediants:</h3></td>    
        <td><h4><?php echo $row['Recipe_Ingrediants'] ?></h4></td>
        </tr>
        <tr>
            <td><h3>Abstract:</h3></td>
            <td><h4><?php echo $row['Recipe_Desc']?></h4></td>
            </tr>
           
        </table>
          
          
          

        </div> 
        </div>
    
     
      </div>
        </a>
    <?php } ?> <!--While-->