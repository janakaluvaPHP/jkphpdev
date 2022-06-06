
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="https://www.codexworld.com/wp-content/uploads/2014/09/favicon.ico" type="image/x-icon" />
        <meta name="description" content="Live Demo at CodexWorld - Multi-select Dropdown List with Checkbox using jQuery">
        <meta name="keywords" content="demo, codexworld demo, project demo, live demo, tutorials, programming, coding">
        <meta name="author" content="CodexWorld">
        <title>Live Demo - Multi-select Dropdown List with Checkbox using jQuery</title>
        <!-- Bootstrap core CSS -->
        <link href="http://demos.codexworld.com/includes/css/bootstrap.css" rel="stylesheet">
        <!-- Add custom CSS here -->
        <link href="http://demos.codexworld.com/includes/css/style.css" rel="stylesheet">
		
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <link rel="stylesheet" type="text/css" href="http://demos.codexworld.com/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.css"/>
<style type="text/css">
ul,li { margin:0; padding:0; list-style:none;}
.label { color:#000; font-size:16px;}
</style>
</head>
<body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
                        <a class="navbar-brand" href="https://www.codexworld.com/">
                <img src="https://www.codexworld.com/wp-content/uploads/2014/09/codexworld-logo.png" alt="CodexWorld">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="social_btn nav navbar-nav navbar-left">
                <li class="flike"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2Fcodexworld&width=85&layout=button_count&action=like&show_faces=false&share=false&height=21&appId=1602134356668306" width="85" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></li>
                <li class="tflow"><iframe allowtransparency="true" data-show-count="true" frameborder="0" scrolling="no" src="//platform.twitter.com/widgets/follow_button.html?screen_name=codexworldblog" style="width:300px; height:20px;"></iframe></li>
            </ul>
             
            <ul class="nav navbar-nav navbar-right">
                        	<li>
                    <a href="http://www.codexworld.com/downloads/multi-select-dropdown-list-with-checkbox-jquery">Download</a>
                </li>
                        
                        	<li>
                    <a href="https://www.codexworld.com/multi-select-dropdown-list-with-checkbox-jquery/">Tutorial</a>
                </li>
                        </ul>
                    </div>
        <!-- /.navbar-collapse -->
          	</div>
</nav>
<div class="bar-header">
	<!-- CodexWorld_Demo_HeaderTop -->
	<ins class="adsbygoogle"
		 style="display:block"
		 data-ad-client="ca-pub-5750766974376423"
		 data-ad-slot="8179048472"
		 data-ad-format="auto"
		 data-full-width-responsive="true"></ins>
	<script>
		 (adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</div>
<div class="demo-title"><h4>DEMO BY <span class="one">CODEX</span><span class="two">WORLD</span>: Multi-select Dropdown List with Checkbox using jQuery</h4></div>
        <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="div-center">
                <h2>jQuery MultiSelect Basic Uses</h2>
                <select name="langOpt[]" multiple id="langOpt">
                <option value="C++">C++</option>
                <option value="C#">C#</option>
                <option value="Java">Java</option>
                <option value="Objective-C">Objective-C</option>
                <option value="JavaScript">JavaScript</option>
                <option value="Perl">Perl</option>
                <option value="PHP">PHP</option>
                <option value="Ruby on Rails">Ruby on Rails</option>
                <option value="Android">Android</option>
                <option value="iOS">iOS</option>
                <option value="HTML">HTML</option>
                <option value="XML">XML</option>
                </select>
                
                <h2>jQuery MultiSelect With Search Option</h2>
                <select name="langOpt2[]" multiple id="langOpt2">
                <option value="C++">C++</option>
                <option value="C#">C#</option>
                <option value="Java">Java</option>
                <option value="Objective-C">Objective-C</option>
                <option value="JavaScript">JavaScript</option>
                <option value="Perl">Perl</option>
                <option value="PHP">PHP</option>
                <option value="Ruby on Rails">Ruby on Rails</option>
                <option value="Android">Android</option>
                <option value="iOS">iOS</option>
                <option value="HTML">HTML</option>
                <option value="XML">XML</option>
                </select>
                
                <h2>jQuery MultiSelect With Select All Option</h2>
                <select name="langOpt3[]" multiple id="langOpt3">
                <option value="C++">C++</option>
                <option value="C#">C#</option>
                <option value="Java">Java</option>
                <option value="Objective-C">Objective-C</option>
                <option value="JavaScript">JavaScript</option>
                <option value="Perl">Perl</option>
                <option value="PHP">PHP</option>
                <option value="Ruby on Rails">Ruby on Rails</option>
                <option value="Android">Android</option>
                <option value="iOS">iOS</option>
                <option value="HTML">HTML</option>
                <option value="XML">XML</option>
                </select>
                
                <h2>jQuery MultiSelect With Optgroup</h2>
                <select name="langOptgroup[]" multiple id="langOptgroup">
                    <optgroup label="Programming Languages">
                        <option value="C++ / C#">C++ / C#</option>
                        <option value="Java">Java</option>
                        <option value="Objective-C">Objective-C</option>
                    </optgroup>
                    <optgroup label="Client-side scripting Languages">
                        <option value="JavaScript">JavaScript</option>
                    </optgroup>
                    <optgroup label="Server-side scripting Languages">
                        <option value="Perl">Perl</option>
                        <option value="PHP">PHP</option>
                        <option value="Ruby on Rails">Ruby on Rails</option>
                    </optgroup>
                    <optgroup label="Mobile Platforms">
                        <option value="Android">Android</option>
                        <option value="iOS">iOS</option>
                    </optgroup>
                    <optgroup label="Document Markup Languages">
                        <option value="HTML">HTML</option>
                        <option value="XML">XML</option>
                    </optgroup>
                </select>
            </div>
    	</div>
  	</div>
</div>
    	<div class="bar-footer">
			<!-- CodexWorld_Demo_PageBottom -->
			<ins class="adsbygoogle"
				 style="display:block"
				 data-ad-client="ca-pub-5750766974376423"
				 data-ad-slot="1397129652"
				 data-ad-format="auto"
				 data-full-width-responsive="true"></ins>
			<script>
				 (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
        </div>
        	<!-- JavaScript -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     	        <script src="http://demos.codexworld.com/includes/js/bootstrap.js"></script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <!--<script src="https://apis.google.com/js/platform.js" async defer></script>-->
    	<script src="http://demos.codexworld.com/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.js"></script>
<script>
$('#langOpt').multiselect({
    columns: 1,
    placeholder: 'Select Languages'
});

$('#langOpt2').multiselect({
    columns: 1,
    placeholder: 'Select Languages',
    search: true
});

$('#langOpt3').multiselect({
    columns: 1,
    placeholder: 'Select Languages',
    search: true,
    selectAll: true
});

$('#langOptgroup').multiselect({
    columns: 4,
    placeholder: 'Select Languages',
    search: true,
    selectAll: true
});
</script>
</body>
</html>