function loadpage(){
	document.getElementById('securitycode').value = "";
	document.getElementById("myPromise").checked = false;
		
			var today = new Date();			
			sec = today.getSeconds();
			
			switch (sec){			
					case 0: case 34: setcode('RAHIM78'); break;
					case 33: setcode('QDKLM78'); break;
					case 32: setcode('AALFH79'); break;
					case 31: setcode('SCMLK56'); break;
					case 36: setcode('DCEAP32'); break;
					case 37: setcode('FGKWM48'); break;
					case 39: setcode('GPBCI36'); break;
					case 38: setcode('HZBWM36'); break;
					case 35: setcode('QYCCP94'); break;
					case 40: setcode('SLEQM73'); break;
					case 41: setcode('HCTOI65'); break;
					case 43: setcode('ICDMW49'); break;
					case 45: setcode('BUBCI38'); break;
					case 13: case 47: setcode('LDOMW37'); break;
					case 14: case 49: setcode('UEXDO08'); break;
					case 15: case 42: setcode('JLFOC15'); break;
					case 16: case 46: setcode('ULDQM73'); break;
					case 17: case 48: setcode('NHBOA19'); break;
					case 18: case 44: setcode('YRRAS73'); break;
					case 19: case 50: setcode('EKGPA94'); break;
					case 20: case 51: setcode('DUEHQ19'); break;
					case 21: case 53: setcode('RLVJR21'); break;
					case 22: case 59: setcode('ADQSW57'); break;
					case 23: case 52: setcode('HXAMK47'); break;
					case 24: case 57: setcode('IBIAR39'); break;
					case 25: case 54: setcode('MCBBI54'); break;
					case 26: case 56: setcode('IXAZZ13'); break;
					case 27: case 58: setcode('IBWNI38'); break;
					case 28: case 55: setcode('QOMAL38'); break;
					case 29:setcode('ZMARE84'); break;
					case 30: setcode('PASGF87'); break;					
					case 1: setcode('DDLJK78'); break;
					case 2: setcode('BJRMS79'); break;
					case 3: setcode('PKPKC56'); break;
					case 4: setcode('GOKUZ32'); break;
					case 5: setcode('BEERUS48'); break;
					case 6: setcode('WHISQ36'); break;
					case 7: setcode('CHAMP36'); break;
					case 8: setcode('CHVKN94'); break;
					case 9: setcode('VEGAT73'); break;
					case 10: setcode('SSGSS65'); break;
					case 11: setcode('DBSUP49'); break;
					case 12: setcode('FRIEZ38'); break;					
				}
}

		function setcode(mycode){			
					document.getElementById('thiscode').innerHTML = mycode;
					document.getElementById('storecode').innerHTML = mycode;
			}			
			
		function checkform(event){		
					var security = document.getElementById('securitycode').value;
					var data = document.getElementById('storecode').innerHTML;
					var checked = document.getElementById("myPromise").checked;
					
					
					var signPic = document.getElementById('ApplicantSign');
					var placePic = document.getElementById('projectPlace');
					var mapPic = document.getElementById('ProjectMap');
					var designPic = document.getElementById('ProjectDesign');
					var referencePic = document.getElementById('ReferencePaper');
					var benefitedPic = document.getElementById('ReferencePaperFromBenefitedPeople');
					
					var signature = document.getElementById("signature").innerHTML;
					var place = document.getElementById("place").innerHTML;
					var map = document.getElementById("map").innerHTML;					
					var design = document.getElementById("design").innerHTML;					
					var reference = document.getElementById("reference").innerHTML;					
					var benefit = document.getElementById("benefit").innerHTML;
					
					var signatureWidth = document.getElementById("signatureWidth").innerHTML;
					var signatureHeight = document.getElementById("signatureHeight").innerHTML;

					var placeWidth = document.getElementById("placeWidth").innerHTML;
					var placeHeight = document.getElementById("placeHeight").innerHTML;
			
					var mapWidth = document.getElementById("mapWidth").innerHTML;
					var mapHeight = document.getElementById("mapHeight").innerHTML;
					
					var designWidth = document.getElementById("designWidth").innerHTML;
					var designHeight = document.getElementById("designHeight").innerHTML;
					
					var referenceWidth = document.getElementById("referenceWidth").innerHTML;
					var referenceHeight = document.getElementById("referenceHeight").innerHTML;
					
					var benefitWidth = document.getElementById("benefitWidth").innerHTML;
					var benefitHeight = document.getElementById("benefitHeight").innerHTML;
					
					var mobileLeNo= document.getElementById("MobileNo").value;
					var mobileLength= mobileLeNo.length;
					if(mobileLength>0 && mobileLength!==11){
						alert("মোবাইল নম্বর ১১ ডিজিট হতে হবে");
					}
				
					 if (signPic.files.length > 0) {
						for (var i = 0; i <= signPic.files.length - 1; i++) {
							var pasize = signPic.files.item(i).size;   
							var signsize = Math.round((pasize / 1024));	
						}
					}

					if (placePic.files.length > 0) {
						for (var i = 0; i <= placePic.files.length - 1; i++) {
							var pfsize = placePic.files.item(i).size;
							var placesize = Math.round((pfsize / 1024));
						}
					}
			
					 if (mapPic.files.length > 0) {
						for (var i = 0; i <= mapPic.files.length - 1; i++) {
							var pbsize = mapPic.files.item(i).size;   
							var mapsize = Math.round((pbsize / 1024));	
						}
					}
					
					 if (designPic.files.length > 0) {
						for (var i = 0; i <= designPic.files.length - 1; i++) {
							var pcsize = designPic.files.item(i).size;   
							var designsize = Math.round((pcsize / 1024));	
						}
					}
					
					 if (referencePic.files.length > 0) {
						for (var i = 0; i <= referencePic.files.length - 1; i++) {
							var pdsize = referencePic.files.item(i).size;   
							var referencesize = Math.round((pdsize / 1024));	
						}
					}
					
					 if (benefitedPic.files.length > 0) {
						for (var i = 0; i <= benefitedPic.files.length - 1; i++) {
							var pesize = benefitedPic.files.item(i).size;   
							var benefitsize = Math.round((pesize / 1024));	
						}
					}
				
				
						if( signsize>100)
						{
							alert('স্বাক্ষরের ছবির সাইজ ১০০ কিলোবাইটের কম হতে হবে');
							event.preventDefault();
						}
						
						else if( mapsize>400 || placesize>400 || designsize>400 || referencesize>400 || benefitsize>400){
							alert('স্বাক্ষর ব্যতীত অন্যান্য কাগজপত্রের সাইজ ৪০০ কিলোবাইটের কম হতে হবে');
							event.preventDefault();								
						}

						else if(signature){
							if(signatureWidth!=300 || signatureHeight!=80){
								alert('স্বাক্ষরের ছবির আকার ৩০০x৮০ হতে হবে');
								event.preventDefault();								
							}
						}

						else if(place){
							if(placeWidth!=1280 || placeHeight!=960){
								alert('স্বাক্ষর ব্যতীত অন্যান্য ছবির আকার ১২৮০x৯৬০ হতে হবে');
								event.preventDefault();
							}
						}
							
						else if(map){
							if(mapWidth!=1280 || mapHeight!=960){
								alert('স্বাক্ষর ব্যতীত অন্যান্য ছবির আকার ১২৮০x৯৬০ হতে হবে');
								event.preventDefault();								
							}
						}
						
						else if(design){
							if(designWidth!=1280 || designHeight!=960){
								alert('স্বাক্ষর ব্যতীত অন্যান্য ছবির আকার ১২৮০x৯৬০ হতে হবে');
								event.preventDefault();								
							}
						}
						
						else if(reference){
							if(referenceWidth!=1280 || referenceHeight!=960){
								alert('স্বাক্ষর ব্যতীত অন্যান্য ছবির আকার ১২৮০x৯৬০ হতে হবে');
								event.preventDefault();								
							}
						}
						
						else if(benefit){
							if(benefitWidth!=1280 || benefitHeight!=960){
								alert('স্বাক্ষর ব্যতীত অন্যান্য ছবির আকার ১২৮০x৯৬০ হতে হবে');
								event.preventDefault();								
							}
						}
				
						else if(!checked){
							alert('দয়া করে চুক্তির শর্তে টিক চিহ্ন দিন');
							event.preventDefault();						
						}						
						else if(security!=data){
							alert('আপনার প্রবেশ করানো সিকিউরিটি কোডটি ঠিক আছে কিনা দেখুন');
							event.preventDefault();						
						}
						
						var ProjectName = document.getElementById("ProjectName").value;
						var Unionn = document.getElementById("Unionn").value;
						var WardNo = document.getElementById("WardNo").value;						
						var Village = document.getElementById("Village").value;
						var RoadNo = document.getElementById("RoadNo").value;
						var HoldingNo = document.getElementById("HoldingNo").value;
						var Boundary = document.getElementById("Boundary").value;
						var ProjectCost = document.getElementById("ProjectCost").value;
						var ProjectDetails = document.getElementById("ProjectDetails").value;
						var ProjectPurpose = document.getElementById("ProjectPurpose").value;
						var NumberOfBenefitedVillages = document.getElementById("NumberOfBenefitedVillages").value;
						var NumberOfBenefitedFamilies = document.getElementById("NumberOfBenefitedFamilies").value;
						var NumberOfBenefitedPeople = document.getElementById("NumberOfBenefitedPeople").value;
						var AffectsOnNature = document.getElementById("AffectsOnNature").value;
						var OtherOrgName = document.getElementById("OtherOrgName").value;
						var ApplicantName = document.getElementById("ApplicantName").value;
						var Designation = document.getElementById("Designation").value;
						var FatherName = document.getElementById("FatherName").value;
						var MotherName = document.getElementById("MotherName").value;
						var ApplicantZilla = document.getElementById("ApplicantZilla").value;
						var ApplicantUpozilla = document.getElementById("ApplicantUpozilla").value;
						var ApplicantUnionPorishod = document.getElementById("ApplicantUnionPorishod").value;
						var ApplicantVillage = document.getElementById("ApplicantVillage").value;
						var ApplicantWardNo = document.getElementById("ApplicantWardNo").value;
						var ApplicantRoadNo = document.getElementById("ApplicantRoadNo").value;
						var MobileNo = document.getElementById("MobileNo").value;
						
						var checkBangla = false;
						
						if(hasToBeBangla(ProjectName) || hasToBeBangla(Unionn) || hasToBeBangla(WardNo) || hasToBeBangla(Village) || hasToBeBangla(RoadNo))
						{
							checkBangla = true;
						}
						
						if( hasToBeBangla(Boundary) || hasToBeBangla(HoldingNo) || hasToBeBangla(ProjectCost) || hasToBeBangla(ProjectDetails) || hasToBeBangla(ProjectPurpose) || hasToBeBangla(NumberOfBenefitedFamilies)  || hasToBeBangla(NumberOfBenefitedPeople) || hasToBeBangla(NumberOfBenefitedVillages) || hasToBeBangla(AffectsOnNature) )
						{
							checkBangla = true;
						}
						
						
						if( hasToBeBangla(OtherOrgName) || hasToBeBangla(ApplicantName) || hasToBeBangla(Designation) || hasToBeBangla(FatherName) || hasToBeBangla(MotherName) || hasToBeBangla(ApplicantZilla) || hasToBeBangla(ApplicantUpozilla) )
						{
							checkBangla = true;
						}
						
						if(hasToBeBangla(ApplicantUnionPorishod) || hasToBeBangla(ApplicantVillage) || hasToBeBangla(ApplicantWardNo) || hasToBeBangla(ApplicantRoadNo) || hasToBeBangla(MobileNo))
						{
							checkBangla = true;
						}
						
						
						var HoldingNo = document.getElementById("HoldingNo").value;
						var ProjectCost = document.getElementById("ProjectCost").value;
						var Designation = document.getElementById("Designation").value;
						
						if(HoldingNo!=""){
							if(hasToBeBangla(HoldingNo)){
								checkBangla = true;
							}
						}
						
						if(ProjectCost!=""){
							if(hasToBeBangla(HoldingNo)){
								checkBangla = true;
							}							
						}
						
						if(Designation!=""){
							if(hasToBeBangla(HoldingNo)){
								checkBangla = true;
							}							
						}
						
						if(checkBangla){
							alert("ইমেইল এবং সিকিউরিটি কোড ব্যতিত কোনো তথ্য ইংরেজিতে লেখা যাবে না");
							event.preventDefault();
						};
				
}
			
				function hasToBeBangla(mychar){
				
									var n1;
									
									for (var i = 0, n1 = mychar.length; i < n1; i++) {
									
									
									if(mychar.charCodeAt( i )>=32 && mychar.charCodeAt( i )<=47){
										continue;
									}
									
									if(mychar.charCodeAt( i )>=58 && mychar.charCodeAt( i )<=64){
										continue;
									}
									
									if(mychar.charCodeAt( i )>=91 && mychar.charCodeAt( i )<=96){
										continue;
									}
									
									if(mychar.charCodeAt( i )>=123 && mychar.charCodeAt( i )<=126){
										continue;
									}
									
									if (mychar.charCodeAt( i ) <= 255) {
											return true;
								}
							}
				}
		
		 function signature(input) {				 
									if (input.files) {									
									  var reader = new FileReader();
									  reader.onload = function (e) {
										var imga = new Image;
										
										imga.onload = function() {										  
										  document.getElementById("signatureWidth").innerHTML = imga.width;
										  document.getElementById("signatureHeight").innerHTML = imga.height;
										  document.getElementById("signature").innerHTML = "1";
										};										
										imga.src = reader.result;
									  };
									  reader.readAsDataURL(input.files[0]);
									}
					}

	function place(input) {
		if (input.files) {
			var reader = new FileReader();
			reader.onload = function (e) {
				var imga = new Image;
	
				imga.onload = function() {
					document.getElementById("placeWidth").innerHTML = imga.width;
					document.getElementById("placeHeight").innerHTML = imga.height;
					document.getElementById("place").innerHTML = "1";
				};
				imga.src = reader.result;
			};
			reader.readAsDataURL(input.files[0]);
		}
	}

		 function map(input) {				 
									if (input.files) {									
									  var reader = new FileReader();
									  reader.onload = function (e) {
										var imga = new Image;
										
										imga.onload = function() {										  
										  document.getElementById("mapWidth").innerHTML = imga.width;
										  document.getElementById("mapHeight").innerHTML = imga.height;
										  document.getElementById("map").innerHTML = "1";
										};										
										imga.src = reader.result;
									  };
									  reader.readAsDataURL(input.files[0]);
									}
					}
					
		function design(input) {				 
									if (input.files) {									
									  var reader = new FileReader();
									  reader.onload = function (e) {
										var imga = new Image;
										
										imga.onload = function() {										  
										  document.getElementById("designWidth").innerHTML = imga.width;
										  document.getElementById("designHeight").innerHTML = imga.height;
										  document.getElementById("design").innerHTML = "1";
										};										
										imga.src = reader.result;
									  };
									  reader.readAsDataURL(input.files[0]);
									}
					}
					
		function reference(input) {				 
									if (input.files) {									
									  var reader = new FileReader();
									  reader.onload = function (e) {
										var imga = new Image;
										
										imga.onload = function() {										  
										  document.getElementById("referenceWidth").innerHTML = imga.width;
										  document.getElementById("referenceHeight").innerHTML = imga.height;
										  document.getElementById("reference").innerHTML = "1";
										};										
										imga.src = reader.result;
									  };
									  reader.readAsDataURL(input.files[0]);
									}
					}
					
		function benefit(input) {				 
									if (input.files) {									
									  var reader = new FileReader();
									  reader.onload = function (e) {
										var imga = new Image;
										
										imga.onload = function() {										  
										  document.getElementById("benefitWidth").innerHTML = imga.width;
										  document.getElementById("benefitHeight").innerHTML = imga.height;
										  document.getElementById("benefit").innerHTML = "1";
										};										
										imga.src = reader.result;
									  };
									  reader.readAsDataURL(input.files[0]);
									}
					}