<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" >
  $(function () {
    $(".submit").click(function (event) {
      var time = $("#time").val();
      var date = $("#date").val();
      var dataString = 'time=' + time + '&date=' + date;
      console.log(dataString);
      if (time == '' || date == '')
      {
        $('.success').fadeOut(200).hide();
        $('.error').fadeOut(200).show();
      } else
      {
        $.ajax({
          type: "POST",
          url: "post2.php",
          data: dataString,
          success: function (data) {
            $('.success').fadeIn(200).show();
            $('.error').fadeOut(200).hide();
            $("#data").html(data);
          }
        });
      }
      // event.preventDefault();
    });
  });
</script>
<form action="post.php" method="POST">
  <input type="text" id="time" value=""><br>
  <input type="date" id="date" value=""><br>
  <input name="submit" type="button" value="Submit" class="submit">
</form>
<div id="data"></div>
<span class="error" style="display:none"> Please Enter Valid Data</span>
<span class="success" style="display:none"> Form Submitted Success</span>

