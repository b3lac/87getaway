<?php
    mail('glasgowindustries@gmail.com', $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['comment']);	
    echo "Success";  
?>
<p>Your email has been sent.</p><br>
<p>Return to the <a href="http://www.87getaway.com/index.html">Home Page</a> or the <a href="http://www.87getaway.com/contact.html">Contact Page</a></p>
