<?php 
include "connect.php";

   if(!empty(!isset($_POST['submit'])))
	{
		global $connection;
		$Zilla=$_POST['Zilla'];
		$query= "SELECT * FROM thana WHERE Zilla='$Zilla'";
		$result=mysqli_query($connection, $query);
		
		echo "<option value=''>--উপজেলা--</option>";
		while($row=mysqli_fetch_assoc($result))
		{
			$UpazillaBname=$row['bname'];

			echo "<option value='$UpazillaBname'>$UpazillaBname</option>";
		}	
	}
	
	if(isset($_POST['submit'])){
    //project
    $ProjectName=$_POST['ProjectName'];
    $Zilla=$_POST['Zilla'];
    $Upozilla=$_POST['Upozilla'];
    $Unionn=$_POST['Unionn'];
    $Sector=$_POST['Sector'];
	$HoldingNo=$_POST['HoldingNo'];
	$Boundary=$_POST['Boundary'];
    $AffectsOnNature=$_POST['AffectsOnNature'];
    $LandDispute=$_POST['LandDispute'];
    $OtherOrganization=$_POST['OtherOrganization'];
	$OtherOrgWorkName=$_POST['OtherOrgWorkName'];

    // $UnionPorishod=$_POST['UnionPorishod'];
    $Village=$_POST['Village'];
    $WardNo=$_POST['WardNo'];
    $RoadNo=$_POST['RoadNo'];
    $ProjectCost=$_POST['ProjectCost'];
    $ProjectDetails=$_POST['ProjectDetails'];
    $ProjectPurpose=$_POST['ProjectPurpose'];
    $NumberOfBenefitedVillages=$_POST['NumberOfBenefitedVillages'];
    $NumberOfBenefitedFamilies=$_POST['NumberOfBenefitedFamilies'];
    $NumberOfBenefitedPeople=$_POST['NumberOfBenefitedPeople'];
    $FinancialYear=$_POST['FinancialYear'];
    
    //applicant
    $ApplicantName=$_POST['ApplicantName'];
	$Designation=$_POST['Designation'];
    $FatherName=$_POST['FatherName'];
    $MotherName=$_POST['MotherName'];
    $ApplicantZilla=$_POST['ApplicantZilla'];
    $ApplicantUpozilla=$_POST['ApplicantUpozilla'];
    $ApplicantUnionPorishod=$_POST['ApplicantUnionPorishod'];
    $ApplicantVillage=$_POST['ApplicantVillage'];
    $ApplicantWardNo=$_POST['ApplicantWardNo'];
    $ApplicantRoadNo=$_POST['ApplicantRoadNo'];
    $MobileNo=$_POST['MobileNo'];
    $Email=$_POST['Email'];
    $success=true;

    // Image Documents
    //signature
    $filetmp= $_FILES['ApplicantSign']["tmp_name"];
    $filename1= "sign-".$MobileNo."-".$Email."-".$_FILES['ApplicantSign']["name"];
    $filetype= $_FILES['ApplicantSign']["type"];
    $filepath= "personal_image/".$filename1;
    move_uploaded_file($filetmp,$filepath);

        //place
        $filetmp= $_FILES['ProjectPlace']["tmp_name"];
        $filename6= "place-".$MobileNo."-".$Email."-".$_FILES['ProjectPlace']["name"];
        $filetype= $_FILES['ProjectPlace']["type"];
        $filepath= "personal_image/".$filename6;
        move_uploaded_file($filetmp,$filepath);

    //map
    $filetmp= $_FILES['ProjectMap']["tmp_name"];
    $filename2= "map-".$MobileNo."-".$Email."-".$_FILES['ProjectMap']["name"];
    $filetype= $_FILES['ProjectMap']["type"];
    $filepath= "personal_image/".$filename2;
    move_uploaded_file($filetmp,$filepath);

    //design
    $filetmp= $_FILES['ProjectDesign']["tmp_name"];
    $filename3= "design-".$MobileNo."-".$Email."-".$_FILES['ProjectDesign']["name"];
    $filetype= $_FILES['ProjectDesign']["type"];
    $filepath= "personal_image/".$filename3;
    move_uploaded_file($filetmp,$filepath);

    //reference paper
    $filetmp= $_FILES['ReferencePaper']["tmp_name"];
    $filename4= "reference-".$MobileNo."-".$Email."-".$_FILES['ReferencePaper']["name"];
    $filetype= $_FILES['ReferencePaper']["type"];
    $filepath= "personal_image/".$filename4;
    move_uploaded_file($filetmp,$filepath);

    //agreement from people
    $filetmp= $_FILES['ReferencePaperFromBenefitedPeople']["tmp_name"];
    $filename5= "agreement-".$MobileNo."-".$Email."-".$_FILES['ReferencePaperFromBenefitedPeople']["name"];
    $filetype= $_FILES['ReferencePaperFromBenefitedPeople']["type"];
    $filepath= "personal_image/".$filename5;
    move_uploaded_file($filetmp,$filepath);

	mysqli_autocommit($connection,FALSE);
	//query for project table
    $query1="insert into project(ProjectName,Zilla,Upozilla,Sector,UnionPorishod,Village,WardNo,RoadNo, HoldingNo, Boundary, ProjectCost,ProjectDetails,ProjectPurpose,NumberOfBenefitedVillages,NumberOfBenefitedFamilies,NumberOfBenefitedPeople,FinancialYear,AffectsOnNature,LandDispute,OtherOrganization,OtherOrgWorkName)";
    $query1 .="values('$ProjectName','$Zilla','$Upozilla','$Sector','$Unionn','$Village','$WardNo','$RoadNo', '$HoldingNo', '$Boundary', '$ProjectCost','$ProjectDetails','$ProjectPurpose','$NumberOfBenefitedVillages','$NumberOfBenefitedFamilies','$NumberOfBenefitedPeople','$FinancialYear','$AffectsOnNature','$LandDispute','$OtherOrganization','$OtherOrgWorkName')";
    $result1 = mysqli_query($connection, $query1);
		
		if(!$result1) 
		{
			die("Query Failed...".mysqli_error($connection));
            $success=false;
		}
    //query for applicant table
    $query2="insert into applicant(ApplicantName, Designation, FatherName, MotherName, ApplicantZilla, ApplicantUpozilla, ApplicantUnionPorishod, ApplicantVillage, ApplicantWardNo, ApplicantRoadNo, MobileNo, Email, ApplicantSign, ProjectMap, ProjectDesign, ReferencePaper, ReferencePaperFromBenefitedPeople, projectPlace)";
    $query2 .="values('$ApplicantName', '$Designation', '$FatherName','$MotherName','$ApplicantZilla','$ApplicantUpozilla','$ApplicantUnionPorishod','$ApplicantVillage','$ApplicantWardNo','$ApplicantRoadNo','$MobileNo','$Email', '$filename1', '$filename2', '$filename3', '$filename4', '$filename5', '$filename6')";
    $result2 = mysqli_query($connection, $query2);
		
		if(!$result2) 
		{
			die("Query Failed...".mysqli_error($connection));
            $success=false;

        }
	mysqli_commit($connection);
 
    //query for fetching applicant id
   $query3 ="select Id from applicant order by Id DESC Limit 1";
   $result3 = mysqli_query($connection,$query3);
     while(  $row=mysqli_fetch_array($result3)  ){
         $applicantId =  $row['Id'];
     }
   //query for fetching project id
    $query4 ="select Id from project order by Id DESC Limit 1";
   $result4 = mysqli_query($connection,$query4);
     while(  $row=mysqli_fetch_array($result4)  ){
         $projectId =  $row['Id'];
     }
  //query for updateing project table
  $query5 =  "update project set applicantId='$applicantId' where Id='$projectId'";
  $result5  =  mysqli_query($connection,$query5);
  if(!result5)
  {
	  die("Query Failed".mysqli_error($connection));
	  $success=false;
  }
  mysqli_commit($connection);
  
  if(success==true)
  {?>
	 <html>
		<p>
			ধন্যবাদ! আপনার আবেদন সফল হয়েছে। আপনার আইডি <?php echo $applicantId; ?>। আইডিটি সংগ্রহে রাখুন।  
		</p>
	 </html>
	 <?php
  }
  else{
	  ?>
	  <html>
		<p>
			দুঃখিত! আপনার আবেদন সফল হয়নি। পুনরায় সতর্কতার সাথে আবেদন সম্পন্ন করুন।
		</p>
	  </html>
	  <?php
	  }
	}
	?>
