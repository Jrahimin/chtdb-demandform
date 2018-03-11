<html>
<?php
    session_start();
 ?>

<head>
	<meta charset="UTF-8">
	<title>খোঁজকৃত ফলাফল</title>
	
	<style>
	
		body{
            background:url(mainback.jpg) no-repeat;
			background-size:cover;
			background-attachment: fixed;
        }
		
        .mainDiv{
            width: 96%;
			background-color: rgba(243,249,254,0.5);
			margin:0 auto;
			border-radius:12px;
			min-height:500px;
        }
		
		.heading{
			font-size:1.5em;
			padding-left:70px;
            font-weight: bold;
            color: rgb(7,72,112);
			text-shadow:1px 1px 2px rgb(121,200,247);
        }
		
		hr{
			margin-top:-20px;
		}
		
		.theButton {
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
.theButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #0061a7), color-stop(1, #007dc1));
	background:-moz-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-webkit-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-o-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-ms-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:linear-gradient(to bottom, #0061a7 5%, #007dc1 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0061a7', endColorstr='#007dc1',GradientType=0);
	background-color:#0061a7;
}
.theButton:active {
	position:relative;
	top:1px;
}
		
		.tab{
			width:90%;
		}
		
		.tdhead{
			width:24%;
		}
		
		.tddesc{
			width:26%;
		}
		
		.dhead{
			font-weight:bold;
			font-size:1.1em;
			text-align:right;
		}

		.desc{
			padding:2px;
		}
		
		.paperpic{
			width:auto;
			padding:2px;
			border:solid 2px rgb(14,51,97);
		}
		
		.paperpicSign{
			width:350px;
			padding:2px;
			margin-left:65%;
			height:auto;
			border:solid 2px rgb(14,51,97);
		}
		
		a{
			text-decoration:none;
            
		}
		
		a:visited{
			color:black;
		}
		
		
		.myButton {
			box-shadow: 0px 0px 0px 2px #9fb4f2;			
			background-color:rgb(32,115,198);
			display:inline-block;
			cursor:pointer;
			color:#ffffff;
			font-family:Arial;
			font-size:1.1em;
			font-weight:bold;
			padding:8px;
			border-radius:10px;
			text-shadow:0px 1px 0px #283966;
		}
		
		.headingdiv{
			width:100%;
			padding:5px;
			background:rgba(2,30,53,0.6);
			box-shadow:0px 0px 20px 12px rgba(2,30,53,0.8);
		}
		
		.pageheading{
			font-weight:bold;
			font-size:30px;
			color:white;
			text-align:center;
			padding:0;
			text-shadow:2px 2px 0px rgb(2,30,53);
		}
		
		.first{
			width:80%;
			border:solid 1px black;
			padding:1px 40px;
			border-radius:14px;
			background:rgba(2,30,53,0.3);
			box-shadow:0px 0px 6px 1px rgb(2,30,53);
		}
		
	</style>
	
</head>
<body>
		<div class="headingdiv">
		<center>
				<div class="first">
						<p class="pageheading" style="color:#E6E6FA;">খোঁজকৃত ফলাফল</p>	
				</div>
		</center>
	</div>
	<br/>

<?php
	include "connect.php";

	if(isset($_SESSION['userid'])){
		$_SESSION['userId']=$_POST['userId'];
        
		$db_fields = array('ApplicantId', 'FinancialYear', 'Sector', 'Zilla', 'Upozilla' );
		$db_table ="project";
		$form_fields = array('userId', 'FinancialYear', 'Sector', 'Zilla', 'Upozilla' );
		$conditions = array();

	$i=0;
    foreach($form_fields as $field){
		
        if(isset($_POST[$field]) && $_POST[$field] != ''){
            $conditions[] = "$db_table.$db_fields[$i] ='$_POST[$field]'";
			$i++;
		}
			else{
				$i++;
				continue; 
			        }
    }
    //query building
    $query = "SELECT * FROM project JOIN applicant ON applicant.Id=project.ApplicantId ";
    // if there are conditions defined
    if(count($conditions) > 0) {
        //append the conditions
        $query .= "WHERE " . implode (' AND ', $conditions); 
		
    }
	
	$result = mysqli_query($connection, $query);
    while($row=mysqli_fetch_array($result)){
        //project
		$ProjectName=$row['ProjectName'];
		$Zilla=$row['Zilla'];
		$Upozilla=$row['Upozilla'];
		$Sector=$row['Sector'];
		$UnionPorishod=$row['UnionPorishod'];
        $Village=$row['Village'];
        $WardNo=$row['WardNo'];
        $RoadNo=$row['RoadNo'];
        $ProjectCost=$row['ProjectCost'];
        $ProjectDetails=$row['ProjectDetails'];
        $ProjectPurpose=$row['ProjectPurpose'];
		$NumberOfBenefitedVillages=$row['NumberOfBenefitedVillages'];
		$NumberOfBenefitedFamilies=$row['NumberOfBenefitedFamilies'];
		$NumberOfBenefitedPeople=$row['NumberOfBenefitedPeople'];
        $AffectsOnNature=$row['AffectsOnNature'];
        $LandDispute=$row['LandDispute'];
        $OtherOrganization=$row['OtherOrganization'];
		$OtherOrgWorkName=$row['OtherOrgWorkName'];
        $FinancialYear=$row['FinancialYear'];
        //applicant
		$ApplicantId = $row['Id'];
        $ApplicantName  =  $row['ApplicantName'];
        $FatherName  =  $row['FatherName'];
        $MotherName  =   $row['MotherName'];
        $ApplicantZilla  =  $row['ApplicantZilla'];
        $ApplicantUpozilla  =  $row['ApplicantUpozilla'];
        $ApplicantUnionPorishod  = $row['ApplicantUnionPorishod'];
        $ApplicantVillage  =  $row['ApplicantVillage'];
        $ApplicantWardNo  = $row['ApplicantWardNo'];
        $ApplicantRoadNo  =  $row['ApplicantRoadNo'];
        $MobileNo  =  $row['MobileNo'];
        $Email   =   $row['Email'];
        $ApplicantSign  =  $row['ApplicantSign'];
        $ProjectMap =  $row['ProjectMap'];
        $ProjectDesign = $row['ProjectDesign'];
        $ReferencePaper = $row['ReferencePaper'];
        $ReferencePaperFromBenefitedPeople = $row['ReferencePaperFromBenefitedPeople'];
    
	

    ?>

	<div class="mainDiv">
		
		<br/><br/><br/>
		<p class="heading">প্রকল্প</p>
		<hr color="white" width="90%" height="1px"/>
		
		<br/>
		
		<center>
		
		<table class="tab">
		
			<tr>	
			
				<td class="tdhead">
					<p class="dhead">
						অর্থ বছর :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
														<?php echo $FinancialYear; ?>
					</p>
				</td>
				
				<td class="tdhead">
					<p class="dhead">
						সেক্টর/খাত :

					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $Sector; ?>
					</p>
				</td>
				
			</tr>
			
			<tr>	
			
				<td class="tdhead">
					<p class="dhead">
						প্রকল্প/স্কিমের নাম :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $ProjectName; ?>
					</p>
				</td>
				
				<td class="tdhead">
					<p class="dhead">
						
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															
					</p>
				</td>
				
			</tr>
		
		</table>
		
		</center>
		
		<br/><br/>
		<p class="heading">ঠিকানা</p>
		<hr color="white" width="90%" height="1px"/>
		
		<br/>
		
		<center>
		
		<table class="tab">
		
			<tr>	
			
				<td class="tdhead">
					<p class="dhead">
						জেলা :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $Zilla; ?>
					</p>
				</td>
				
				<td class="tdhead">
					<p class="dhead">
						উপজেলা :

					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $Upozilla; ?>
					</p>
				</td>
				
			</tr>
			
			<tr>	
			
				<td class="tdhead">
					<p class="dhead">
						ইউনিয়ন :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $UnionPorishod; ?>
					</p>
				</td>
				
				<td class="tdhead">
					<p class="dhead">
						গ্রাম :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $Village; ?>
					</p>
				</td>
				
			</tr>
			
			<tr>	
			
				<td class="tdhead">
					<p class="dhead">
						ওয়ার্ড নং :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $WardNo; ?>
					</p>
				</td>
				
				<td class="tdhead">
					<p class="dhead">
						রাস্তা/বাড়ির নাম :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $RoadNo; ?>
					</p>
				</td>
				
			</tr>
		
		</table>
		
		</center>
		
		
		<br/><br/>
		<p class="heading">প্রকল্প ব্যয় ও অন্যান্য</p>
		<hr color="white" width="90%" height="1px"/>
		
		<br/>
		
		<center>
		
		<table class="tab">
		
			<tr>	
			
				<td class="tdhead">
					<p class="dhead">
						প্রকল্প/স্কিমের ব্যয় (আনুমানিক) :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $ProjectCost; ?>
					</p>
				</td>
				
				<td class="tdhead">
					<p class="dhead">
						প্রকল্প/স্কিমের বিবরণ :

					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $ProjectDetails; ?>
					</p>
				</td>
				
			</tr>
			
			<tr>	
			
				<td class="tdhead">
					<p class="dhead">
						প্রকল্প/স্কিম গ্রহণের উদ্দেশ্য :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $ProjectPurpose; ?>
					</p>
				</td>
				
				<td class="tdhead">
					<p class="dhead">
						মোট উপকারভোগী গ্রাম/মহল্লা ও পাড়ার সংখ্যা :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $NumberOfBenefitedVillages; ?>
					</p>
				</td>
				
			</tr>
			
			<tr>	
			
				<td class="tdhead">
					<p class="dhead">
						মোট উপকারভোগী পরিবারের সংখ্যা :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $NumberOfBenefitedFamilies; ?>
					</p>
				</td>
				
				<td class="tdhead">
					<p class="dhead">
						মোট উপকারভোগীর সংখ্যা :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $NumberOfBenefitedPeople; ?>
					</p>
				</td>
				
			</tr>
			
			<tr>	
			
				<td class="tdhead">
					<p class="dhead">
						প্রকল্প/স্কিম গ্রহণের কারণে পরিবেশের উপর বিরূপ প্রভাব (যদি থাকে) :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $AffectsOnNature; ?>
					</p>
				</td>
			</tr>
			
			<tr>	
			
				<td class="tdhead">
					<p class="dhead">
						প্রস্তাবিত প্রকল্পের সাথে অনান্য সংস্থার কোন প্রকল্পের দ্বৈততা (যদি থাকে):
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $OtherOrganization; ?>
					</p>
				</td>
				
				<td class="tdhead">
					<p class="dhead">
						প্রস্তাবিত ভূমি/এলাকায় ইতোপূর্বে প্রকল্প/স্কিম বাস্তবায়ন করা সংস্থার নামঃ
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $OtherOrgWorkName; ?>
					</p>
				</td>
				
			</tr>
		
		</table>
		
		</center>
		
		<br/><br/>
		<p class="heading">আবেদনকারীর বিবরণ</p>
		<hr color="white" width="90%" height="1px"/>
		
		<br/>
		
		<center>
		
		<table class="tab">
		
			<tr>	

				<td class="tdhead">
					<p class="dhead">
						আবেদনকারীর আইডি :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $ApplicantId; ?>
					</p>
				</td>
				
				<td class="tdhead">
					<p class="dhead">
						নাম :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $ApplicantName; ?>
					</p>
				</td>
				
				<td class="tdhead">
					<p class="dhead">
						পিতার নাম :

					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $FatherName; ?>
					</p>
				</td>
				
			</tr>
			
			<tr>	
			
				<td class="tdhead">
					<p class="dhead">
						মাতার নাম :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $MotherName; ?>
					</p>
				</td>
				
				<td class="tdhead">
					<p class="dhead">
						জেলা :

					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $ApplicantZilla; ?>
					</p>
				</td>
				
			</tr>
			
			<tr>	
			
				<td class="tdhead">
					<p class="dhead">
						উপজেলা :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $ApplicantUpozilla; ?>
					</p>
				</td>
				
				<td class="tdhead">
					<p class="dhead">
						ইউনিয়ন :

					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $ApplicantUnionPorishod; ?>
					</p>
				</td>
				
			</tr>
			
			<tr>	
			
				<td class="tdhead">
					<p class="dhead">
						গ্রাম :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $ApplicantVillage; ?>
					</p>
				</td>
				
				<td class="tdhead">
					<p class="dhead">
						ওয়ার্ড নং :

					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $ApplicantWardNo; ?>
					</p>
				</td>
				
			</tr>
			
			<tr>	
			
				<td class="tdhead">
					<p class="dhead">
						রাস্তা/বাড়ির নাম :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $ApplicantRoadNo; ?>
					</p>
				</td>
				
				<td class="tdhead">
					<p class="dhead">
						মোবাইল :

					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $MobileNo; ?>
					</p>
				</td>
				
			</tr>
			
			<tr>	
			
				<td class="tdhead">
					<p class="dhead">
						ইমেইল :
					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															<?php echo $Email; ?>
					</p>
				</td>
				
				<td class="tdhead">
					<p class="dhead">
						

					</p>
				</td>
				
				<td class="tddesc">
					<p class="desc">
															
					</p>
				</td>
				
			</tr>
			
		</table>
		
		</center>

		<br/>
		<p class="heading" id="paperHeading" style="display:none">প্রয়োজনীয় কাগজপত্রসমূহ</p>
		<hr color="white" width="90%" height="1px"/>			
		<center>
		
		<div class="tab">
			
			<p class="dhead" style="text-align:left;">
				আবেদনকারীর স্বাক্ষর :
			</p>
						
			<div class="paperpicSign">
																<img src="personal_image/<?php echo  $ApplicantSign; ?>"/>
																<br/>
																(<?php echo $ApplicantName; ?> &nbsp; এর স্বাক্ষর)
			</div>
			
			<div id="hideDiv" style="display:none">
			<br/><br/>
			
			<p class="dhead" style="text-align:left;">
				ম্যাপ :
			</p>
			
			
			<div class="paperpic">
																<img src="personal_image/<?php echo  $ProjectMap; ?>"/>
			</div>
			
			<br/><br/>
			
			<p class="dhead" style="text-align:left;">
				কাজের নকশা :
			</p>
						
			<div class="paperpic">
																<img src="personal_image/<?php echo  $ProjectDesign; ?>"/>
			</div>
			
			<br/><br/>
			
			<p class="dhead" style="text-align:left;">
				জনপ্রতিনিধির সুপারিশপত্র :
			</p>
			
			
			<div class="paperpic">
																<img src="personal_image/<?php echo  $ReferencePaper; ?>"/>
			</div>
			
			<br/><br/>
			
			<p class="dhead" style="text-align:left;">
				এলাকার উপকারভোগীদের সম্মতিপত্র :
			</p>
			
			
			<div class="paperpic">
																<img src="personal_image/<?php echo  $ReferencePaperFromBenefitedPeople; ?>"/>
			</div>
			</div>
			<br/><br/>
		
		</div>
	<script src="jquery-3.1.1.min.js"></script>
	<?php
	if($_SESSION['userId']!="")
	{
	?>
	<script>
    $(document).ready(function () {
		$('#hideDiv').css({display: "block"});
		$('#paperHeading').css({display: "block"});
	});
	</script>
	
	<?php
	}
	}
	}
	?>
		
		<br/><br/>
		<a href="search.php">
			
			<button class="myButton">পুনরায় খোঁজ করুন</button>
			
		</a>
		
		</center>
		
		<br/><br/><br/><br/><br/>
			
	</div>
	
	<br/><br/><br/><br/>
			<center>
				<a href="OnlineDemandForm.php">
					<div class="theButton">
						আবেদন ফরম
					</div>
				</a>
			</center>	
			
		<br/><br/><br/><br/>
	
	
		
</body>

</html>
