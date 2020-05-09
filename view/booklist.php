<?php 

    foreach ($books as $book) { ?>
        <table>
            <tr>
                <td><a href="index.php?book=<?php echo $book->title ?>"><?php echo $book->title ?></a></td>
                <td><?php echo $book->author ?></td>
                <td><?php echo $book->pages ?></td> 
            </tr>
        </table>
    
    <?php
    
    }
?>