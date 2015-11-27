<?php header("Content-type: text/html; charset='utf-8'"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Testing Ajax</title>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    </head>
    <body>
        <div id="holder">
            
            <h3>Добро пожаловать!</h3>
            
            <p>Здесь вы найдете:</p>
            
            <ul>
                <li><a href="#">Печенюшки</a></li>
                <li><a href="#">Приколюшки</a></li>
                <li><a href="#">Другое</a></li>
            </ul>
            
            <button id="loadText">Текст</button>
            <button id="loadPage">Страница</button><br/><br/>
            
            <div id="loader"></div>
            
        </div>
        
        <script type="text/javascript">
            $(document).ready(function(){
               $('#loadText').click(function(){
                  $('#loader').load('text.html', function(){
                      alert('Done!');
                  }); 
               });
            });
        </script>
        
    </body>
</html>