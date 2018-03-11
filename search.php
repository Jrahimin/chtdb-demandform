<?php
session_start();
include "connect.php";

	if(isset($_POST['login']))		
{
    //taking id and pass from the form 
    $uid=$_POST['uid'];
    $pass=$_POST['pass'];
    // database query
    $query="select * from admin where adminId ='$uid' and pass='$pass' ";
    $result=mysqli_query($connection,$query);
    //creating session 
    while($row=mysqli_fetch_assoc($result))
    {  
        $_SESSION['userid']=$row['adminId'];  
        header("Location:search.php");
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>খোঁজ করুন</title>

    <link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">

    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <style>
	
        body{
				background:url(mainback.jpg) no-repeat;
				background-size:cover;
				background-attachment: fixed;
        }
        .mainDiv{
				width: 70%;
				margin: 5% auto 1% auto;
				background:url(divback.jpg) no-repeat;
				background-size:cover;
				padding: 4%;
				border-radius:12px;
				box-shadow:1px 1px 12px 0px rgb(240,240,240);
        }
		
		.logDiv{
			width: 80%;
			margin: 5% auto;
		}
		
		legend{
            font-weight: bold;
            color: rgb(7,72,112);
			text-shadow:1px 1px 2px rgb(121,200,247);
        }
		
		.myButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #54a3f7;
	-webkit-box-shadow:inset 0px 1px 0px 0px #54a3f7;
	box-shadow:inset 0px 1px 0px 0px #54a3f7;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #007dc1), color-stop(1, #0061a7));
	background:-moz-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-webkit-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-o-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-ms-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:linear-gradient(to bottom, #007dc1 5%, #0061a7 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#007dc1', endColorstr='#0061a7',GradientType=0);
	background-color:#007dc1;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #124d77;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:1.4em;
	padding:6px 20px;
	font-weight:bold;
	text-decoration:none;
	text-shadow:0px 1px 0px #154682;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #0061a7), color-stop(1, #007dc1));
	background:-moz-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-webkit-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-o-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-ms-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:linear-gradient(to bottom, #0061a7 5%, #007dc1 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0061a7', endColorstr='#007dc1',GradientType=0);
	background-color:#0061a7;
}
.myButton:active {
	position:relative;
	top:1px;
}

		.headingdiv{
			width:100%;
			background:rgba(2,30,53,0.6);
			box-shadow:0px 0px 20px 12px rgba(2,30,53,0.8);
		}
		
		.pageheading{
			font-weight:bold;
			font-size:2.6em;
			color:white;
			text-align:center;
			text-shadow:2px 2px 0px rgb(2,30,53);
		}
		
		.first{
			width:80%;
			border:solid 1px black;
			padding:10px 40px;
			border-radius:14px;
			background:rgba(2,30,53,0.3);
			box-shadow:0px 0px 6px 1px rgb(2,30,53);
		}
		
		select{
			text-align:center;
		}
		
		select:hover{
			border:solid 1px rgb(14,145,222);
		}
		
    </style>
</head>
<body>


<?php
	if($_SESSION['userid']){
?>
	
	<div class="headingdiv">
		<center>
			<br/>
				<div class="first">
						<p class="pageheading" style="color:#E6E6FA;">খোঁজ করুন</p>	
				</div>			
			<br/>
		</center>
			<a href="OnlineDemandForm.php" style="margin-left:88.2%;">
				<div class="myButton">
					আবেদন ফরম
				</div>
			</a>
	</div>
	
	<br/><br/>
		
    <div class="mainDiv">
        <form class="form-horizontal" method="post" action="search_result.php" enctype="multipart/form-data" accept-charset="utf-8">
        <fieldset>
            <legend>খোঁজ করুন</legend>
			
				<div class="form-group">
                    <label class="control-label col-sm-4" for="Upozilla">আইডি:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="userId" name="userId">
                    </div>
                </div>
			
            <div class="form-group">
                <label class="control-label col-sm-4" for="FinancialYear">অর্থ বছর:</label>
                <div class="col-sm-6">
                    <select class="form-control" id="FinancialYear" name="FinancialYear">
                        <option value="">--অর্থ বছর--</option>
                        <option>২০১৬-২০১৭</option>
                        <option>২০১৭-২০১৮</option>
                        <option>২০১৮-২০১৯</option>
                        <option>২০১৯-২০২০</option>
                        <option>২০২০-২০২১</option>
                        <option>২০২১-২০২২</option>
                        <option>২০২২-২০২৩</option>
                        <option>২০২৩-২০২৪</option>
                        <option>২০২৪-২০২৫</option>
                        <option>২০২৫-২০২৬</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="Sector">সেক্টর/খাত:</label>
                <div class="col-sm-6">
                 <select class="form-control" id="Sector" name="Sector">
					<option value="">--সেক্টর/খাত--</option>
					<option value="শিক্ষা">শিক্ষা</option>
					<option value="সমাজকল্যাণ">সমাজকল্যাণ</option>
					<option value="যাতায়াত">যাতায়াত</option>
					<option value="ভৌত অবকাঠামো">ভৌত অবকাঠামো</option>
					<option value="কৃষি ও সেচ">কৃষি ও সেচ</option>
					<option value="ক্রীড়া ও সংস্কৃতি">ক্রীড়া ও সংস্কৃতি</option>
					<option value="অন্যান্য">অন্যান্য</option>
				</select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="Zilla">জেলা:</label>
                <div class="col-sm-6">
                    <select class="form-control" id="Zilla" name="Zilla" onchange="getZilla(this.value);">
                        <option value="">--জেলা--</option>
                        <option value="রাঙামাটি">রাঙামাটি</option>
                        <option value="বান্দরবান">বান্দরবান</option>
                        <option value="খাগড়াছড়ি">খাগড়াছড়ি</option>
                    </select>
                </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="Upozilla">উপজেলা:</label>
                    <div class="col-sm-6">
                        <select class="form-control" id="Upozilla" name="Upozilla">
                            <option value="">--উপজেলা--</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-12">
                        <button type="submit" id="submit" name="submit" class="btn btn-lg btn-primary" style="font-weight:bold;margin-left:51.2%;">খোঁজ করুন</button>
                    </div>
                </div>
        </fieldset>
            </form>
    </div>
				<form class="form-horizontal" action="logout.php" method="post" accept-charset="UTF-8">
				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-12">
					<button type="submit" id="logout" name="logout" class="btn btn-lg btn-warning" style="text-shadow:1px 1px 2px black;margin-left: 59.5%;font-weight:bold;">লগ আউট</button>
				</div>
				</form>
    <script src="jquery-3.1.1.min.js"></script>
    <script>
        function getZilla(val) {
            //create ajax func
            $.ajax({
                type: "POST",
                url: "data_input_query.php",
                data: "Zilla=" + val,
                success: function (data) {
                    $("#Upozilla").html(data);
                }
            });
        }
    </script>
	<?php
	}
	else{
	?>
	<html>
	<head>
			<meta charset="UTF-8"/>
			<title>লগইন করুন</title>
			
	</head>

<body>


	<div class="headingdiv">
		<center>
			<br/>
				<div class="first">
					<div class="second">
						<p class="pageheading">লগইন করুন</p>
					</div>				
				</div>			
			<br/>
		</center>
	</div>
	
	<br/><br/><br/>
	
<form class="form-horizontal" action="search.php" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
<div class="logDiv">
<fieldset>
<legend>লগ ইন করুন</legend>

    <div class="form-group">
        <label class="control-label col-sm-2" for="ProjectName">ইউজার আইডিঃ</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="uid" name="uid" placeholder="আইডি...">
        </div>
    </div>
	
	    <div class="form-group">
        <label class="control-label col-sm-2" for="ProjectName">পাসওয়ার্ডঃ</label>
        <div class="col-sm-6">
            <input type="password" class="form-control" id="pass" name="pass" placeholder="পাসওয়ার্ড...">
        </div>
		</div>
	
	    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-12">
            <button type="submit" id="login" name="login" class="btn btn-lg btn-primary" style="text-shadow:1px 1px 0px black;margin-left: 40%;font-weight:bold;">লগ ইন</button>
        </div>
    </div>
	
</fieldset>
</form>
</div>
</div>
</div>		
</body>
</html>
<?php
		}
?>

</body>
</html>