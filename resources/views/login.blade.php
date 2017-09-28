




<?php
 Form::open(array('url' => '/login'));
     Form::text('username');

     Form::password('password');


     Form::submit('Click Me!');

Form::close() 
?>