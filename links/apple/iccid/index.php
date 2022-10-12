<!DOCTYPE html>
<html lang="eng">
<?php include '../../phps/header.php'; ?>
<body>
<?php include '../../phps/nav.php';
?>
  <div class="content">
    <div class="content-cell">
    	<h1>Latest ICCID</h1>
      <h1 id="iccid"></h1>
      <p id="date"></p>
      <p><b>Tested on:</b></p> 
      <p><b> Works on latest ios verison(15.4.1)</b></p><br><hr>
      <h2>Current not working last checked on 09/04/2022</h2><hr>
   </div>
  </div>
  <center>
    <br><b>
    </p>Notes//: "if fail please try using code with a AT@T sim" 
    unless the phone orginal carrier is AT@T then use a T-Mobile or verizon sim with >>><u><a class="link" href="https://apps.apple.com/jm/app/vpn-cat-master-express-proxy/id1134784923">vpn cat master</a></u><<< setting it to america [cybermode]</p></b>
</center><br>
<hr>
<br><!--
<h2>Older ICCID</h2>
<ul>
	<b>Active</b>
	<li>89014103270421602830 last used 11-04-2022</li>
	<li>89014103270421602574 last used 07-04-2022</li>

<b>NON-active</b>	


</ul>-->
</u>



<?php include '../../phps/footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://source.chinasnow.net/static/layui/layui.js?v=2.3.0"></script>
<script type="text/javascript">
layui.config({
   version:'20200523',
   base:'http://source.chinasnow.net/static/js/'
}).extend({
 usapi:'/usapi'
}).use(['usapi','util','jquery'],function(){
  layui.usapi.get.call({
    basePath:'http://usapi.chinasnow.net'
  },'http://usapi.chinasnow.net/getIccid', {
    key: 3
  }, function(res) {
    var iccid,date;
    if (res) {
      iccid = res.iccid;
      date = layui.util.toDateString(res.startTime, 'yyyy-MM-dd');
    } else {
      date = layui.util.toDateString(new Date(), 'yyyy-MM-dd');
    }
    layui.$('#iccid').text(iccid || '当前无可用ICCID');
    layui.$('#date').text('Updated：'+date);
  });
})
</script>

</body>
</html>