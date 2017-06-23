<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="cache-control" content="no-cache"/>
  <meta http-equiv="expires" content="0"/>

  <link href="css/style.css" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  
  <title><?=$title?></title>
  <link rel="shortcut icon" href="images/shortcutLogo.svg" type="image/svg+xml">

 </head>
 <body>
  <header>
    
    <object id="logo"  data="images/logoS.svg" type="image/svg+xml"></object>

    <nav>
       <ul>
         <li><a href="#"><object id="inactive" data="images/cafedraSmallLogo.svg" type="image/svg+xml"></object><object id="active" data="images/cafedraSmallLogoInversed.svg" type="image/svg+xml"></object>&nbsp О кафедре</a></li>
         <li><a href="#"><object id="inactive" data="images/studySmallLogo.svg" type="image/svg+xml"></object><object id="active" data="images/studySmallLogoInversed.svg" type="image/svg+xml"></object>&nbsp Учебная работа</a></li>
         <li><a href="http://local.isit.bstu.by1/"><object id="inactive" data="images/main.svg" type="image/svg+xml"></object><object id="active" data="images/mainInversed.svg" type="image/svg+xml"></object>&nbsp На главную</a></li>
         <li><a href="#"><object id="inactive" data="images/studentSmallLogo.svg" type="image/svg+xml"></object><object id="active" data="images/studentSmallLogoInversed.svg" type="image/svg+xml"></object>&nbsp Студентам</a></li>
         <li><a href="https://www.belstu.by/"><object id="inactive" data="images/bstuSmallLogo.svg" type="image/svg+xml"></object><object id="active" data="images/bstuSmallLogoInversed.svg" type="image/svg+xml"></object>&nbsp Сайт БГТУ</a></li>
        </ul>
    </nav>

    <object id="flexSupport"  data="images/logoS.svg" type="image/svg+xml"></object>
  </header>

  <wrapper>
      <div class="content">
        <div class="newsList">
            
            <div class="tooltip"><a href="#">
             <div class="imgContainer"> <img src="images/content/1.jpg"> </div>
                <span class="tooltiptext"><?=$h1?></span>
                </a>
            </div> 

            <div class="tooltip"><a href="#">
             <div class="imgContainer"> <img src="images/content/2.jpg"> </div>
                <span class="tooltiptext"><?=$h1?></span>
                </a>
            </div> 

            <div class="tooltip"><a href="#">
             <div class="imgContainer"> <img src="images/content/3.jpg"> </div>
                <span class="tooltiptext"><?=$h1?></span>
                </a>
            </div>

            <div class="tooltip"><a href="#">
             <div class="imgContainer"> <img src="images/content/4.jpg"> </div>
                <span class="tooltiptext"><?=$h1?></span>
                </a>            
            </div>

            <div class="tooltip"><a href="#">
             <div class="imgContainer"> <img src="images/content/5.jpg"> </div>
                <span class="tooltiptext"><?=$h1?></span>
                </a>            
            </div> 

            <div class="tooltip"><a href="#">
             <div class="imgContainer"> <img src="images/content/6.jpg"> </div>
                <span class="tooltiptext"><?=$h1?></span>
                </a>            
            </div>

            <div class="tooltip"><a href="#">
             <div class="imgContainer"> <object id="moreNews"  data="images/newsSmallLogo.svg" type="image/svg+xml"></object> </div>
                <span class="tooltiptext">Все новости</span>
                </a>            
            </div>
        </div>

        <div class="mainNews">

          <div class="article">
             <h4><?=$h1?></h4>
             <div class="imageContainer"> <img src="images/content/7.jpg"> </div>
             <div id="textContainer">
             <?=$component?>
            </div> 
            <span class="click">Развернуть</span>           
          </div>

          <div class="article">
             <h4><?=$h1?></h4>
             <div class="imageContainer"> <img src="images/content/7.jpg"> </div>
             <div id="textContainer">
             <?=$component?>
             </div> 
            <span class="click">Развернуть</span>           
          </div>
                   
        </div>

     </div>
  </wrapper>

  <footer>
    <div class="footerContent">
       <object id="logoInversed"  data="images/logoBstu.svg" type="image/svg+xml"></object>
    </div>
  </footer>

  <script src="js/script.js"></script>

</body>
</html>