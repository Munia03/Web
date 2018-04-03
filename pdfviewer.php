<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Instruction an Education Category Bootstrap Responsive Web Template | About :: w3layouts</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Instruction Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//tags -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">


</head>

<body>
<!-- header -->
<div class="header-1">
    <div class="content white agile-info">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <h1><span class="fa fa-book" aria-hidden="true"></span> Research Aid <label>Education</label></h1>
                    </a>
                </div>
                <!--/.navbar-header-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-2" id="link-effect-2">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html" class="effect-3">Home</a></li>
                            <li class="active"><a href="about.html" class="effect-3">About</a></li>
                            <li><a href="services.php" class="effect-3">Resources</a></li>
                            <!--<li><a href="gallery.html" class="effect-3">Profile</a></li>-->
                            <!--<li class="dropdown">-->
                            <!--<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Pages <b class="caret"></b></a>-->
                            <!--<ul class="dropdown-menu">-->
                            <!--<li><a href="codes.html">Codes</a></li>-->
                            <!--<li><a href="icons.html">Icons</a></li>-->
                            <!--</ul>-->
                            <!--</li>-->
                            <li><a href="home.html" class="effect-3">Sign In</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#SignupModal" class="effect-3">Sign Up</a></li>
                        </ul>
                    </nav>
                </div>
                <!--/.navbar-collapse-->
                <!--/.navbar-->
            </div>
        </nav>
    </div>
</div>
<!-- //header -->
<!-- pdf -->

    <div class="container" style="height: 750px">

        <div class="col-lg-8" style="height: 100%">
            <div class="embed-responsive embed-responsive"style="padding-bottom: 100%;">
                <object class="embed-responsive-item" data="sample.pdf" type="application/pdf" internalinstanceid="9" title="">
                    <p>Your browser isn't supporting embedded pdf files. You can download the file
                        <a href="sample.pdf">here</a>.</p>
                </object>
            </div>
        </div>
        <div class="col-lg-4">
            <!-- //google custom search -->
            <script>
                (function() {
                    var cx = '002466053272353934275:pdwbledvoyg';
                    var gcse = document.createElement('script');
                    gcse.type = 'text/javascript';
                    gcse.async = true;
                    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(gcse, s);
                })();
            </script>
            <gcse:search enableAutoComplete="true"></gcse:search>
            <gcse:searchresults defaultToImageSearch ="false"></gcse:searchresults>


            <script>
                function loadDoc() {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var data = JSON.parse(this.responseText);
                            for (var i=0;i< data['items'].length;i++){
                                if (data['items'][i]['mime']==="application/pdf") {
                                    document.getElementById("data").innerHTML += data['items'][i]['link'] + '<br/>';
                                }
                            }
                        }
                    };
                    var key = document.getElementById('entry').value;
                    xhttp.open("GET", "https://www.googleapis.com/customsearch/v1?key=AIzaSyChxl14zZBdVeRjOdP_qNKBCjsovNXIiUA%20&cx=002466053272353934275:8vi8gdsikzo&q="+key, true);
                    xhttp.send();
                }
            </script>
            <input type="text" id="entry"/>
            <button type="button" onclick="loadDoc()">Request data</button>
            <div id="data"></div>


            <!--
               <form action="search.php" method="GET">
                   <label for="">Pesquisar: </label> <input type="text" name="q" />
               </form>
               <div id="content"></div>

               <script>

                   function hndlr(response) {
                       for (var i = 0; i < response.items.length; i++) {
                           var item = response.items[i];
                           // in production code, item.htmlTitle should have the HTML entities escaped.
                           // if (item.mime==="application/pdf") {
                           document.getElementById("content").innerHTML += "<br>" + item.htmlTitle + "<br>" + item.link;
                           //  }
                       }
                   }
               </script>
               <script src="https://www.googleapis.com/customsearch/v1?key=AIzaSyChxl14zZBdVeRjOdP_qNKBCjsovNXIiUA &amp;cx=002466053272353934275:8vi8gdsikzo&amp;q=learning&amp;callback=hndlr">
               </script> -->

        </div>

        </div>


            <!--//google custom search -->

<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- skills -->
<script src="js/skill.bars.jquery.js"></script>
<script>
    $(document).ready(function(){

        $('.skillbar').skillBars({
            from: 0,
            speed: 4000,
            interval: 100,
            decimals: 0,
        });

    });
</script>
<!-- //skills -->

<!-- footer -->
<div class="footer_top_agileits">
    <div class="container">

        <div class="col-md-4 footer_grid">

        </div>


        <div class="col-md-4 footer_grid">
            <h3>Contact Info</h3>
            <ul class="address">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i>8088 USA, Honey block, <span>New York City.</span></li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                <li><i class="fa fa-phone" aria-hidden="true"></i>+09187 8088 9436</li>
            </ul>
        </div>
    </div>
</div>
<!-- footer -->

</body>
</html>
