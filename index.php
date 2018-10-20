<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="Content-Style-Type" content="text/css"/>
        <meta http-equiv="Content-Script-Type" content="text/javascript"/>

        <title>高円寺ポートフォリオ</title>
        
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type=“text/javascript” src="script.js"></script>
    </head>
    <body>
        <header class="header">
            <h1>Koenjineerポートフォリオ</h1>
            <ul>    
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">ex1</a></li>
                <li><a href="#">ex2</a></li>
                <li><a id="target" href="#">ex3</a></li>
            </ul>
        </header>

        <div class="tabs">
            
            <input id="all" type="radio" name="tab_item" checked>
            <label class="tab_item" for="all">Takuto</label>
            <input id="programming" type="radio" name="tab_item">
            <label class="tab_item" for="programming">Hayato</label>
            <input id="design" type="radio" name="tab_item">
            <label class="tab_item" for="design">Daiki</label>
            <div class="tab_content" id="all_content">

             
            <div class="tab_content_description">
                <p class="c-txtsp">Takutoの内容がここに入ります</p>
                <!--コメント-->
                <div class="flex">
                    <?php
                    for($i=1;$i<=10;$i++
                    print '<h5 class="his-content" >Product:' .$i .'<br>';
                    print '<p class="content-text">ここに、各プロダクトの説明文を入れます。例えば、このリンクは掲示板サイトに通ります。</p>';
                    print '<a href="https://for-ml.appspot.com" id="his-link">掲示板サイト</a>';
                    print '</h5>';
                    }
                    ?>
                </div>
                


            </div>
            </div>

            <div class="tab_content" id="programming_content">
            <div class="tab_content_description">
            <p class="c-txtsp">
                Hayatoの内容がここに入ります<br></p>
                <a href="https://for-ml.appspot.com">・掲示板サイト</a>
                <input type="button" value="TEST" onclick="ale()">
                
            </div>
            </div>

            <div class="tab_content" id="design_content">
            <div class="tab_content_description">
            <p class="c-txtsp">Daikiの内容がここに入ります</p>
            </div>
            </div>
            </div>
    </body>

</html>
