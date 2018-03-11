<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>নিবন্ধন</title>

    <link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">

    <style>
        body{
            background:url(mainback.jpg) no-repeat;
			background-size:cover;
			background-attachment: fixed;
        }
        .mainDiv{
            width: 80%;
            margin: 3% auto;
            background:url(divback.jpg) no-repeat;
			background-size:cover;
            padding: 4%;
			border-radius:12px;
        }
        .project{
            margin-bottom: 4%;
        }
        .address{
            margin-bottom: 4%;
        }
        .others{
            margin-bottom: 4%;
        }
        .applicant{
            margin-bottom: 4%;
        }
        .left{
            width: 50%;
            float: left;
        }
        .right{
            width: 50%;
            float: left;
        }
        .heading{
            font-weight: bold;
            color: rgb(7,72,112);
			text-shadow:1px 1px 2px rgb(121,200,247);
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
		label, .myPromise{
			font-weight:bold;
			font-size:1.2em;
		}
		
		input[type="file"]{			
			background:white;
			border:solid 1px rgb(14,145,222);			
		}
		
		input[type="file"]:hover{			
			background:white;		
		}
		
		input:hover, select:hover{
			border:solid 1px rgb(14,145,222);
		}
		
		.notice{
			color:rgb(129,17,1);
			font-size:1.1em;
		}
		
		#thiscode{
			font-weight:bold;
			font-size:1.2em;
		}		
    </style>
</head>
<body onLoad="loadpage();">

	<div class="headingdiv">
		<center>
			<br/>
				<div class="first">
						<p class="pageheading" style="color:#E6E6FA;">প্রকল্প গ্রহণের আবেদন</p>	
				</div>			
			<br/>
		</center>
	</div>
	
	<br/>

<div class="mainDiv">
<form class="form-horizontal" method="post" action="data_input_query.php" enctype="multipart/form-data" accept-charset="utf-8">
    <div class="project">
<fieldset>
    <legend class="heading">*প্রকল্প</legend>
	
	<div class="form-group">
        <label class="control-label col-sm-2" for="ProjectName">প্রস্তাবিত প্রকল্প/স্কিমের নাম:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="ProjectName" name="ProjectName"  required="required">
        </div>
    </div>
    
	<div class="form-group">
        <label class="control-label col-sm-2" for="FinancialYear">অর্থ বছর:</label>
        <div class="col-sm-6">
            <select class="form-control" id="FinancialYear" name="FinancialYear" required="required">
                <option value="">--অর্থ বছর--</option>
                <option value="২০১৮-২০১৯">২০১৮-২০১৯</option>
                <option value="২০১৯-২০২০">২০১৯-২০২০</option>
                <option value="২০২০-২০২১">২০২০-২০২১</option>
                <option value="২০২১-২০২২">২০২১-২০২২</option>
                <option value="২০২২-২০২৩">২০২২-২০২৩</option>
                <option value="২০২৩-২০২৪">২০২৩-২০২৪</option>
                <option value="২০২৪-২০২৫">২০২৪-২০২৫</option>
                <option value="২০২৫-২০২৬">২০২৫-২০২৬</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="Sector">সেক্টর/খাত:</label>
        <div class="col-sm-6">
            <select class="form-control" id="Sector" name="Sector"  required="required">
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
    </div>
</fieldset>

    <div class="address">
<fieldset>
    <legend class="heading">প্রস্তাবিত প্রকল্পের/স্কিমের অবস্থান ও ভূমি সংক্রান্ত তথ্য</legend>
    <div class="left">
        <div class="form-group">
            <label class="control-label col-sm-4" for="Zilla">*জেলা:</label>
            <div class="col-sm-6">
                <select class="form-control" id="Zilla" name="Zilla" onchange="getZilla(this.value);"  required="required">
                    <option>--জেলা--</option>
                    <option value="রাঙামাটি">রাঙামাটি</option>
                    <option value="বান্দরবান">বান্দরবান</option>
                    <option value="খাগড়াছড়ি">খাগড়াছড়ি</option>
                </select>
            </div>

        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="Unionn">*ইউনিয়ন:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="Unionn" name="Unionn"  required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="WardNo">*ওয়ার্ড নং:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="WardNo" name="WardNo"  required="required">
            </div>
        </div>
		
		<div class="form-group">
            <label class="control-label col-sm-4" for="HoldingNo">খতিয়ান/হোল্ডিং নং ও দাগ নম্বর (যদি জানা থাকে):</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="HoldingNo" name="HoldingNo">
            </div>
        </div>
		
		 <div class="form-group">
         <label class="control-label col-sm-6" for="">*প্রস্তাবিত প্রকল্পের/স্কিমের ভূমি/এলাকা নিয়ে কোন বিরোধ আছে কি না? :</label>
         <div class="col-sm-6">
              <label class="radio-inline"><input type="radio" id="LandDisputeYes" name="LandDispute" value="হ্যাঁ" onclick="noSubmit();" required="required">হ্যাঁ</label>
              <label class="radio-inline"><input type="radio" id="LandDisputeNo" name="LandDispute" value="প্রযোজ্য নয়" onclick="yesSubmit();">প্রযোজ্য নয়</label>
         </div>
		 </div>
    </div>

    <div class="right">
        <div class="form-group">
            <label class="control-label col-sm-4" for="Upozilla">*উপজেলা:</label>
            <div class="col-sm-6">
                <select class="form-control" id="Upozilla" name="Upozilla" required="required">
                    <option value="">--উপজেলা--</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="Village">*গ্রাম:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="Village" name="Village" required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="RoadNo">*রাস্তা/বাড়ির নাম:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="RoadNo" name="RoadNo" required="required">
            </div>
        </div>
		
		<div class="form-group">
            <label class="control-label col-sm-4" for="Boundary">*চৌহদ্দি:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="Boundary" name="Boundary" required="required">
            </div>
        </div>
    </div>
</fieldset>
    </div>

    <div class="others">
        <fieldset>
            <legend class="heading">*প্রস্তাবিত প্রকল্প/স্কিমের প্রাসঙ্গিক তথ্য</legend>
        <div class="form-group">
            <label class="control-label col-sm-4" for="ProjectCost">প্রস্তাবিত প্রকল্প/স্কিম বাস্তবায়নে  আনুমানিক ব্যয়:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="ProjectCost" name="ProjectCost" required="required">
            </div>
        </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="ProjectDetails">প্রকল্প/স্কিমের সংক্ষিপ্ত বিবরণঃ<br/>(সর্বোচ্চ ২০০ শব্দের মধ্যে লিখুন)</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="ProjectDetails" name="ProjectDetails" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="ProjectPurpose">প্রকল্প/স্কিম গ্রহণের উদ্দেশ্যঃ<br/>(সর্বোচ্চ ২০০ শব্দের মধ্যে লিখুন)</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="ProjectPurpose" name="ProjectPurpose" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="NumberOfBenefitedVillages">প্রকল্প/স্কিম গ্রহণের ফলে মোট উপকারভোগী গ্রাম/মহল্লা ও পাড়ার সংখ্যা (আনুমানিক):</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="NumberOfBenefitedVillages" name="NumberOfBenefitedVillages" required="required">
                </div>
                <label class="control-label col-sm-2" for="" style="margin-left: -13%;">টি</label>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="NumberOfBenefitedFamilies">মোট উপকারভোগী পরিবারের সংখ্যা (আনুমানিক):</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="NumberOfBenefitedFamilies" name="NumberOfBenefitedFamilies" required="required">
                </div>
                <label class="control-label col-sm-2" for="" style="margin-left: -13%;">টি</label>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="NumberOfBenefitedPeople">মোট উপকারভোগীর সংখ্যা (আনুমানিক):</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="NumberOfBenefitedPeople" name="NumberOfBenefitedPeople" required="required">
                </div>
                <label class="control-label col-sm-2" for="" style="margin-left: -12%;">জন</label>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="">প্রকল্প/স্কিম গ্রহণের কারণে পরিবেশের উপর কোন<br/>বিরূপ প্রভাব পড়বে কি না?:</label>
                <div class="col-sm-6">
                    <label class="radio-inline"><input type="radio" name="ifNature" onclick="natureClickYes();" required="required">হ্যাঁ</label>
                    <label class="radio-inline"><input type="radio" name="ifNature" onclick="natureClickNo();">প্রযোজ্য নয়</label>
                </div>
            </div>
            <div id="AffectsOnNatureDiv" class="form-group" style="display: none;">
                <label class="control-label col-sm-4" for="AffectsOnNature">প্রভাবের বিবরণ:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="AffectsOnNature" name="AffectsOnNature">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="">প্রস্তাবিত প্রকল্প/স্কিমের জন্য কোন সংস্থায়<br/>আবেদন করা হয়েছে কি না?:</label>
                <div class="col-sm-6">
                    <label class="radio-inline"><input type="radio" id="otherOrgYes" name="ifOtherOrg" onclick="otherOrgClickYes();" required="required">হ্যাঁ</label>
                    <label class="radio-inline"><input type="radio" id="otherOrgNo" name="ifOtherOrg" onclick="otherOrgClickNo();" value="প্রযোজ্য নয়">প্রযোজ্য নয়</label>
                </div>
            </div>
            <div id="otherOrgDiv" class="form-group" style="display: none;">
                <label class="control-label col-sm-4" for="">দ্বৈততা থাকা সংস্থা:</label>
                <div class="col-sm-6">
                <label class="checkbox-inline"><input type="checkbox" name="org" class="org" value="এলজিইডি">এলজিইডি</label>
                <label class="checkbox-inline"><input type="checkbox" name="org" class="org" value="জেলা পরিষদ">জেলা পরিষদ</label>
				<label class="checkbox-inline"><input type="checkbox" name="org" class="org" value="উপজেলা পরিষদ">উপজেলা পরিষদ</label>
                <label class="checkbox-inline"><input type="checkbox" name="org" class="org" value="পৌরসভা">পৌরসভা</label>
                <label class="checkbox-inline"><input type="checkbox" name="org" class="org" value="সওজ বিভাগ">সওজ বিভাগ</label>
                <label class="checkbox-inline"><input type="checkbox" name="org" class="org" value="এনজিও">এনজিও</label>
                <label class="checkbox-inline"><input type="checkbox" name="org" id="orgOther" class="org" value="অন্যান্য" onclick="otherOrgName();">অন্যান্য</label>
                </div>
                <input type="hidden" name="OtherOrganization" id="allOrgHidden" value="প্রযোজ্য নয়">
            </div>
			<div class="form-group">
				<label class="control-label col-sm-6" id="OtherOrgNameLabel" for="OtherOrgName" style="display:none;">অন্যান্য সংস্থার নামঃ</label>
				<div class="col-sm-6">
				<input type="text" class="form-control" id="OtherOrgName" name="OtherOrgName" style="display:none;">
				</div>
			</div>
			
				<div class="form-group">
                <label class="control-label col-sm-4">প্রস্তাবিত ভূমি/এলাকায় অন্য কোন সংস্থা ইতোপূর্বে<br/>কোন প্রকল্প/স্কিম বাস্তবায়ন করেছে কি না?:</label>
                <div class="col-sm-6">
                    <label class="radio-inline"><input type="radio" id="otherOrgWorkYes" name="ifOtherOrgWork" onclick="otherOrgWorkClickYes();" required="required">হ্যাঁ</label>
                    <label class="radio-inline"><input type="radio" id="otherOrgWorkNo" name="ifOtherOrgWork" onclick="otherOrgWorkClickNo();" value="প্রযোজ্য নয়">প্রযোজ্য নয়</label>
                </div>
            </div>
			
			<div class="form-group" id="otherOrgWork" style="display:none;">
				<label class="control-label col-sm-6" id="OtherOrgWorkNameLabel" for="OtherOrgWorkName" >ইতোপূর্বে প্রকল্প/স্কিম বাস্তবায়ন করা সংস্থার নামঃ</label>
				<div class="col-sm-6">
				<input type="text" class="form-control" id="OtherOrgWorkName" name="OtherOrgWorkName">
				</div>
			</div>
			
        </fieldset>
        </div>
        <div class="applicant">
            <fieldset>
                <legend class="heading">আবেদনকারীর বিবরণ</legend>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="ApplicantName">*নাম:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="ApplicantName" name="ApplicantName" required="required">
                    </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-sm-2" for="Designation">*পদবী ও প্রতিষ্ঠানের নাম (যদি থাকে):</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Designation" name="Designation">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="FatherName">*পিতার নাম:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="FatherName" name="FatherName" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="MotherName">*মাতার নাম:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="MotherName" name="MotherName" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="ApplicantZilla">*জেলা:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="ApplicantZilla" name="ApplicantZilla" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="ApplicantUpozilla">*উপজেলা:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="ApplicantUpozilla" name="ApplicantUpozilla" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="ApplicantUnionPorishod">*ইউনিয়ন:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="ApplicantUnionPorishod" name="ApplicantUnionPorishod" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="ApplicantVillage">*গ্রামের নাম:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="ApplicantVillage" name="ApplicantVillage" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="ApplicantWardNo">*ওয়ার্ড নং:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="ApplicantWardNo" name="ApplicantWardNo" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="ApplicantRoadNo">*রাস্তা/বাড়ির নাম:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="ApplicantRoadNo" name="ApplicantRoadNo" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="MobileNo">*মোবাইল:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="MobileNo" name="MobileNo" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="Email">ইমেইল:</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="Email" name="Email">
                    </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-sm-4" for="ApplicantSign">*আবেদনকারীর স্বাক্ষর (স্বাক্ষরের আকার ৩০০×৮০ হতে হবে):</label>
                    <div class="col-sm-6">
                        <input type="file" class="btn btn-success" id="ApplicantSign" onchange="signature(this);" name="ApplicantSign" required="required">
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="doc">
            <fieldset>
                <legend class="heading">আবেদনের সাথে দাখিলকৃত/সংযুক্ত</legend>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="ProjectPlace">প্রস্তাবিত প্রকল্প এলাকার বর্তমান ছবি :</label>
                    <div class="col-sm-6">
                        <input type="file" class="btn btn-success" id="ProjectPlace" onchange="place(this);" name="ProjectPlace">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="ProjectMap">ম্যাপ/মাঠ খসড়া (যদি থাকে):</label>
                    <div class="col-sm-6">
                        <input type="file" class="btn btn-success" id="ProjectMap" onchange="map(this);" name="ProjectMap">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="ProjectDesign">প্রস্তাবিত কাজের সম্ভাব্য নকশা (যদি থাকে):</label>
                    <div class="col-sm-6">
                        <input type="file" class="btn btn-success" id="ProjectDesign" onchange="design(this);" name="ProjectDesign">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="ReferencePaper">*স্থাণীয় জনপ্রতিনিধির সুপারিশপত্র:</label>
                    <div class="col-sm-6">
                        <input type="file" class="btn btn-success" required="required" id="ReferencePaper" onchange="reference(this);" name="ReferencePaper">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="ReferencePaperFromBenefitedPeople">*সংশ্লিষ্ট প্রকল্প/স্কিমের এলাকার উপকারভোগীদের সম্মতিপত্র <br/> (নূন্যতম ১০ জনের জাতীয় পরিচয়পত্রের নম্বর উল্লেখপূর্বক সাক্ষর সহ):</label>
                    <div class="col-sm-6">
                        <input type="file" class="btn btn-success" required="required" onchange="benefit(this);" id="ReferencePaperFromBenefitedPeople" name="ReferencePaperFromBenefitedPeople">
                    </div>
                </div>
            </fieldset>
            <br/><br/><br/>
            <div class="form-group">
                <div class="col-sm-8">
                    <label class="checkbox-inline notice myPromise" style="margin-left: 5%; color: #963019;font-weight: bold; font-size:1.1em;"><input type="checkbox" required="required" id="myPromise">
						এ মর্মে সজ্ঞানে জানাচ্ছি যে আমার জানামতে  উপরিবর্ণিত সকল তথ্য সঠিক *
                    </label>
					
					<br/><br/><br/><br/>
					
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="">*সিকিউরিটি কোড:</label>
				
				<p class="col-sm-2" id="thiscode" style="display:inline-block;margin-top:6px;"></p>

                <div class="col-sm-4">
                    <input type="text" class="form-control" id="securitycode" required="required">
                </div>				
            </div>
        </div>
    <br/><br/><br/>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-12">
            <button type="submit" id="submit" name="submit" class="btn btn-lg btn-primary" onclick="checkform(event)" style="margin-left: 24%;font-weight:bold;">আবেদন করুন</button>
        </div>
    </div>
	
	<br/><br/><br/>
	
	<p id="storecode" style="display:none;"></p>
	
	<p id="signature" style="display:none;"></p>
	<p id="signatureWidth" style="display:none;"></p>
	<p id="signatureHeight" style="display:none;"></p>
    
    <p id="place" style="display:none;"></p>
    <p id="placeWidth" style="display:none;"></p>
    <p id="placeHeight" style="display:none;"></p>
    
	<p id="map" style="display:none;"></p>
	<p id="mapWidth" style="display:none;"></p>
	<p id="mapHeight" style="display:none;"></p>
	
	
	<p id="design" style="display:none;"></p>
	<p id="designWidth" style="display:none;"></p>
	<p id="designHeight" style="display:none;"></p>
	
	
	<p id="reference" style="display:none;"></p>
	<p id="referenceWidth" style="display:none;"></p>
	<p id="referenceHeight" style="display:none;"></p>
	
	<p id="benefit" style="display:none;"></p>
	<p id="benefitWidth" style="display:none;"></p>
	<p id="benefitHeight" style="display:none;"></p>
	
	
</form>
</div>

<script src="jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="formscript.js?v=1.1"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
<script>
    $(document).ready(function () {
        $("#submit").click(function (event) {
			//checking all selected checkbox from org
            var checkedValues = $('.org:checkbox:checked').map(function() {
                return this.value;
        }).get();
            var length=checkedValues.length;
			if(document.getElementById("otherOrgYes").checked){
			if(length==0){
				alert("দ্বৈততা থাকা প্রতিষ্ঠানে টিক দিন");
			}
			}
            var allOrgs="";
            for(var i=0;i<length;i++)
            {
                if(i<length-1)
                    {
                    allOrgs +=checkedValues[i]+", ";
                    }
                else {
					if(checkedValues[i]=="অন্যান্য")
					{
						var otherName= $("#OtherOrgName").val();
						allOrgs +=otherName;
						if(otherName==""){
							alert("দ্বৈততা থাকা অন্যান্য সংস্থার নাম দিন");
							event.preventDefault();
						}
						continue;
					}
					
                    allOrgs +=checkedValues[i];
                }
            }
            if(allOrgs!=""){
                $("#allOrgHidden").val(allOrgs);
            }
        });
    });
</script>
<script type="text/javascript">
	
	function otherOrgName(){
			document.getElementById("OtherOrgName").style.display="block";
			document.getElementById("OtherOrgNameLabel").style.display="block";
	}
	
	function noSubmit(){
		alert("প্রকল্প এলাকায় জমি সংক্রান্ত বিরোধ থাকলে আবেদন গ্রহণযোগ্য নয়");
		document.getElementById("submit").disabled = true;
	}
	
	function yesSubmit(){
		document.getElementById("submit").disabled = false;
	}
    function natureClickYes() {
        document.getElementById("AffectsOnNatureDiv").style.display = "block";
		document.getElementById("AffectsOnNature").setAttribute("required", "required");
    }
    function natureClickNo() {
        document.getElementById("AffectsOnNatureDiv").style.display = "none";
		document.getElementById("AffectsOnNature").removeAttribute("required");
        document.getElementById("AffectsOnNature").value="প্রযোজ্য নয়";
    }
    function otherOrgClickYes() {
        document.getElementById("otherOrgDiv").style.display = "block";
    }
    function otherOrgClickNo() {
        document.getElementById("otherOrgDiv").style.display = "none";
    }
	function otherOrgWorkClickYes() {
        document.getElementById("otherOrgWork").style.display = "block";
		document.getElementById("OtherOrgWorkName").setAttribute("required", "required");
    }
    function otherOrgWorkClickNo() {
        document.getElementById("otherOrgWork").style.display = "none";
		document.getElementById("OtherOrgWorkName").removeAttribute("required");
        document.getElementById("OtherOrgWorkName").value="প্রযোজ্য নয়";
    }
    function getZilla(val){
        $.ajax({
            type: "POST",
            url: "data_input_query.php",
            data: "Zilla="+val,
            success: function(data){
                $("#Upozilla").html(data);
            }
        });
    }
</script>

</body>
</html>