<?php include 'inc/html-head';?>
<script type="text/javascript">
$(document).ready(function(){
document.getElementById("stream").style.display="none";
});
</script>
</head>
<body>
<!-- container -->
<div class="container-fluid" style="margin-top:10px;">
<!-- body -->
<div class="row-fluid">
<!-- content -->
<div class="span9">
<div class="outer-round" id="matte" style="padding:10px;">
<div class="inner-round" id="readable" style="margin:0px;">
<h2>Live Stream</h2>
<p>The Amateur Radio Organization for Undergraduate Student Entertainment</p>
<br />
<?php include 'inc/stream';?>
</div>
</div>
</div>
<!-- /content -->
<?php include 'inc/sidebar';?>
</div><!-- /body -->
</div><!-- /container -->
<?php include 'inc/footer';?>
</body>
</html>
