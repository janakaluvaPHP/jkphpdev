
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="https://www.codexworld.com/wp-content/uploads/2014/09/favicon.ico" type="image/x-icon" />
        <title>Live Demo - Multi-select Dropdown List with Checkbox using jQuery</title>
        <!-- Bootstrap core CSS -->
        <link href="http://demos.codexworld.com/includes/css/bootstrap.css" rel="stylesheet">
        <!-- Add custom CSS here -->
        <link href="http://demos.codexworld.com/includes/css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://demos.codexworld.com/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.css"/>
<style type="text/css">
ul,li { margin:0; padding:0; list-style:none;}
.label { color:#000; font-size:12px;}
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="div-center">
               
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
                
            </div>
    	</div>
  	</div>
</div>
<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://demos.codexworld.com/includes/js/bootstrap.js"></script>
<script src="http://demos.codexworld.com/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.js"></script>
<script>
// $('#langOpt').multiselect({
//     columns: 1,
//     placeholder: 'Select Languages'
// });

// $('#langOpt2').multiselect({
//     columns: 1,
//     placeholder: 'Select Languages',
//     search: true
// });

$('#langOpt3').multiselect({
    columns: 1,
    placeholder: 'Select Languages',
    search: true,
    selectAll: true
});

// $('#langOptgroup').multiselect({
//     columns: 4,
//     placeholder: 'Select Languages',
//     search: true,
//     selectAll: true
// });
</script>
</body>
</html>