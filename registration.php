<?php
    $citizenname=$_POST['citizenname'];
    $emailid=$_POST['emailid'];
    $mobileno=$_POST['mobileno'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    $dateofbirth=$_POST['dateofbirth'];
    $sex=$_POST['sex'];
    $municipality=$_POST['municipality'];
    $pincode=$_POST['pincode'];
    $area=$_POST['area'];
    $locality=$_POST['locality'];
    $street=$_POST['street'];
    $buildingname=$_POST['buildingname'];
    $doorno=$_POST['doorno'];
    
    $conn = new mysqli('localhost','root','','watermeter');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(citizenname,email,mobileno,password,confirmpassword,DOB,sex,municipality,pincode,area,locality,street,buildingname,doorno) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssssssssss", $citizenname,$email,$mobileno,$password,$confirmpassword,$dateofbirth,$sex,$municipality,$pincode,$area,$locality,$street,$buildingname,$doorno);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
<html>
    
        <link rel="icon" href="logo.png">
        <title>
            Aquaria
        </title>
        <style>
            .cont{
                border-radius: 15px;    
              background-color: #ebf8f5;    
              padding: 5px; 
              position: absolute;
              left: 160px; 
              width: 1200px;
              top: 150px;
              height: 680px;
              box-shadow: 2px 2px 2px  2px black;
            }
            .b:hover{
                color:rgb(236, 50, 30)
            }
            .form-control{
                border: 2px solid black;
            }
            .form-control:hover{
                border-color: #457da0;
            }
            .p2:hover{
        transform: scale(1.01);
        text-decoration: underline;
        transition: 0.5s;}
        .p3:hover{
            transform: scale(1.01);
            transition: 0.25s;
            text-decoration: underline;
        }

        </style>
    
        
    
    <body style="background-color: whitesmoke">
        <div>
            <header style="background-color: white;height: 80px;position: absolute;left: 80px">
                <div style="border-left: 1px solid;border-left-color:black;height: 100;border-bottom: 1px solid black;width: 1370px;border-right: 1px solid black;border-radius: 5px;box-shadow: 1px 1px 5px black" >
                    <a href="" style="text-decoration: none">
                        <img src="logo.png"  alt="logo" height="100" width="100">
                        <p style="position:relative;left: 45px;bottom: 110px;color: green;font-family: cursive;font-size: 25px">Aquaria</p>
                    </a>
                    <a href="" style="text-decoration: none">
                        <p style="color: green;position:absolute;left:450px;font-size: 20px;bottom: -20px">Services</p>
                    </a>
                    <a href="" style="text-decoration: none">
                        <p style="color: green;position:absolute;left:550px;font-size: 20px;bottom: -20px">Home</p>
                    </a>
                    <a href="" style="text-decoration: none">
                        <p style="color: green;position:absolute;left:630px;font-size: 20px;bottom: -20px">Properties</p>
                    </a>
                    <a href="" style="text-decoration: none">
                        <p style="color: green;position:absolute;left:750px;font-size: 20px;bottom: -20px">Payment</p>
                    </a>
                   
                    <a href="" style="text-decoration: none">
                        <p style="color: green;position:absolute;left:850px;font-size: 20px;bottom: -20px">Feedback</p>
                    </a>
                    <a href="" style="text-decoration: none">
                        <p style="color: green;position:absolute;left:960px;font-size: 20px;bottom: -20px">My Profile</p>
                    </a>
                    <a href="" style="text-decoration: none">
                        <p style="color: green;position:absolute;left:1080px;font-size: 20px;bottom: -20px">Contact</p>
                    </a>
                    <a href="" style="text-decoration: none">
                        <p style="color: green;position:absolute;left:1180px;font-size: 20px;bottom: -20px">Help</p>
                    </a>
                    <a href="" style="text-decoration: none">
                        <p style="color: green;position:absolute;left:1250px;font-size: 20px;bottom: -20px">Logout</p>
                    </a>
                </div>
    
            </header>
        </div>
        <div class="cont">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="ctl01">
                <div id="PageContent_divmain" class="main">
                    <div class="container margin-bottom-20">
                        <div id="PageContent_update1">
                
                                <div class="col-md-12 tab-content margin-top-20">
                                    
                                    <div class="col-md-12">
                                        <div class="content-header">
                                            <h2 style="color:green"  style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"class="p2">New Citizen Registration</h2>
                                            <hr style="color:red">
                                        </div>
                                    </div>
            
                                    <div class="col-md-6 col-sm-6" style="width:50%;float:left">
            
                                        
            
                                        <div class="content-page">
                                            <div class="form-horizontal" role="form">
            
                                                
            
                                                <div class="form-group">
                                                    <label  style="position:absolute;top:105px;left:10px" class="col-lg-4 control-label">Citizen Name<span class="require" style="color:red"> *</span></label>
                                                    
                                                        <input name="firstname" style="position:absolute;left:200px;height:30px;top:100px;width:300px" maxlength="40" id="PageContent_txtfirstname" tabindex="2" class="form-control"type="text" />
                                                        <span id="PageContent_RequiredFieldValidator2" class="FieldValidator" style="color:Red;display:none;">Enter First Name</span>
                                                    <span class="flderror fld2-error"></span>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="email" style="position:absolute;top:165px;left:10px" class="col-lg-4 control-label">Email ID <span class="require" style="color:Red;">*</span></label>
                                                    
                                                        <input name="emailid" style="position:absolute;left:200px;height:30px;top:160px;width:300px" maxlength="40" id="PageContent_txtemailid" tabindex="3" class="form-control" type="text" />
                                                        
                                                        <span id="PageContent_RequiredFieldValidator3" class="FieldValidator" style="color:Red;display:none;">Enter Email ID</span>
                                                        <span id="PageContent_lblemailid" class="FieldValidator"></span>
                                                    
                                                    <span class="flderror fld3-error"></span>
                                                </div>
                                                
                                                <div class="form-group">
            
            
                                                    <label for="password" class="col-lg-4 control-label" style="position:absolute;top:225px;left:10px">Mobile Number<span class="require" style="color:Red;"> *</span></label>
                                                    
                                                        
                                                    
                                                            
                                                            <input name="mobileno" style="position:absolute;left:250px;width:180px;height:30px;top:220px" maxlength="10" id="PageContent_txtmobileno" tabindex="4" class="form-control" type="text"/>
                                                            <span id="PageContent_RequiredFieldValidator4" class="FieldValidator" style="color:Red;display:none;">Enter Mobile No</span>
                                                            <span id="PageContent_lblmobileno" class="FieldValidator"></span></div>
            
                                                        
            
                                                    
                                                    <span class="flderror fld4-error"></span>
                                                
            
                                                <div class="form-group">
            
                                                    <label for="email" class="col-lg-4 control-label" style="position:absolute;top:285px;left:10px">Password <span class="require" style="color:Red;">*</span></label>
                                                    
                                                        <input name="password" type="password" style="position:absolute;left:200px;height:30px;top:280px;width:300px" maxlength="40" id="PageContent_txtpassword" tabindex="5" class="form-control"/>
                                                        <span id="PageContent_RequiredFieldValidator5" class="FieldValidator" style="color:Red;display:none;">Enter Password</span>
                                                        <span id="PageContent_Regex2" style="color:Red;font-size:11px;visibility:hidden;">Min length 7 & Should contain atleast 1 Alpha,1 Num,1 Special Char</span>
                                                        <span id="PageContent_lblpassword" class="FieldValidator"></span>
                                                    
                                                    <span class="flderror fld5-error"></span>
            
                                                </div>
                                               
            
                                                <div class="form-group">
            
                                                    <label for="email" class="col-lg-4 control-label" style="position:absolute;top:345px;left:10px">Confirm Password <span class="require" style="color:Red;">*</span></label>
                                                    
                                                        <input name="confirmpassword" style="position:absolute;left:200px;height:30px;top:340px;width:300px" type="password"  maxlength="40" id="PageContent_txtconfrmpasswd" tabindex="6" class="form-control" />
                                                        <span id="PageContent_CompareValidator1" title="Password must be the same" class="ValidationError" style="color:Red;display:none;">Password must be the same</span>
                                                        <span id="PageContent_RequiredFieldValidator6" class="FieldValidator" style="color:Red;display:none;">Enter Confirm Password</span>
                                                    
                                                    <span class="flderror fld6-error"></span>
            
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="password" class="col-lg-4 control-label" style="position:absolute;top:405px;left:10px">Date of Birth <span class="require" style="color:Red;">*</span></label>
                                                        <input name="dateofbirth"  style="position:absolute;left:200px;width:150px;height:30px;top:400px" id="PageContent_txtdateofbirth" tabindex="7" class="form-control datepicker" type="text" placeholder="DD/MM/YYYY" />
                                                        <span id="PageContent_RequiredFieldValidator7" class="FieldValidator" style="color:Red;display:none;">Enter Date of Birth</span>
                                                    
                                                    <span class="flderror fld7-error"></span>
                                                </div>
            
                                                <div class="form-group">
                                                    <label for="password" class="col-lg-4 control-label" style="position:absolute;top:465px;left:10px">Gender<span class="require" style="color:Red;"> *</span></label>
                                                    
                                                        <select name="Sex" id="PageContent_ddlChildSex" style="position:absolute;left:200px;top:460px;width:150px;height:30px" tabindex="8" class="form-control" >
                    <option  value="nil">--Select--</option>
                    <option name="male" value="male">Male</option>
                    <option name="female" value="female">Female</option>
                    <option female="others" value="Others">Others</option>
            
                </select>
                                                        <span id="PageContent_RequiredFieldValidator8" class="FieldValidator" style="color:Red;display:none;">Select Sex</span>
            
                                                    
                                                    <span class="flderror fld8-error"></span>
                                                </div>
                                               
                                                <div class="form-group" style="position:absolute;top:525px;left:10px">
                                                  <b> Note :</b> </br>                                      
                                                        &nbsp; 1. After submitting this form ,An activation code will be snet to the registered mobile no.</br> &nbsp;&nbsp;&nbsp; &nbsp;This code will be valid only for 12 Hrs.
                                                        </br>
                                                       &nbsp;  2. Pl. Click on the "New User Verification" tab in the citizen portal https://tnurbanepay.tn.gov.in 
                                                         </br>
                                                       &nbsp;  3. You will be propmted to enter the activation code. 
                                                         </br>
                                                       &nbsp;  4.After validating the Activation code, you will be redirected to the Home page                                      
                                                  
                                                </div>
            
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-6" style="width:50%;float:right">
            
                                        <div class="content-page">
            
                                            <div class="form-horizontal" role="form">
            
            
                                                <div class="form-group">
                                                    <div style="margin-left: 12px;">
                                                    </div>
                                                </div>
                                                
            
                                                <div id="PageContent_DivOrg" class="form-group">
            
                                                    <label style="position:absolute;top:165px" class="col-lg-4 control-label">Municipality/Corporation Name</label>
                                                    
                                                        <select style="position:absolute;left:850px;height:30px;top:160px;width:300px" name="municipality"  id="PageContent_drporg" tabindex="10" class="form-control">
                    <option selected="selected" value="--Select--">--Select--</option>
                    <option name="ADIRAMPATTINAM MUNICIPALITY" value="ADIRAMPATTINAM MUNICIPALITY">ADIRAMPATTINAM MUNICIPALITY</option>
                    <option name="AMBASAMUDRAM MUNICIPALITY" value="AMBASAMUDRAM MUNICIPALITY">AMBASAMUDRAM MUNICIPALITY</option>
                    <option name="AMBUR MUNICIPALITY" value="AMBUR MUNICIPALITY">AMBUR MUNICIPALITY</option>
                    <option name="ARAKKONAM MUNICIPALITY" value="ARAKKONAM MUNICIPALITY">ARAKKONAM MUNICIPALITY</option>
         

                </select>
            
                                                    
                                                    <span class="flderror fld9-error"></span>
            
                                                </div>
            
                                                
                                                
                                                
            
                                                <div class="form-group">
            
                                                    <label style="position:absolute;top:225px" for="password" class="col-lg-4 control-label">Pin Code</label>
                                                    
                                                        <input name="pincode" style="position:absolute;left:850px;height:30px;top:220px;width:300px" maxlength="6"  id="PageContent_txtpincode" tabindex="13" class="form-control" type="text" />
                                                        <span id="PageContent_RegularExpressionValidator4" title="Required" class="FieldValidator" style="color:Red;display:none;">Pincode must be 6 digits</span>
                                                        
                                                    
                                                    <span class="flderror fld12-error"></span>
            
                                                </div>
                                                
                                                <div id="PageContent_divdrparea">
                                                    <div class="form-group">
                                                        <label style="position:absolute;top:285px" class="col-lg-4 control-label">Area</label>
                                                        
                                                            
                                                            <input name="area" style="position:absolute;left:850px;height:30px;top:275px;width:300px" maxlength="6"  id="PageContent_txtpincode" tabindex="13" class="form-control" type="text" />
            
                
            
                                                        
                                                        <span class="flderror fld13-error"></span>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label style="position:absolute;top:345px" for="password" class="col-lg-4 control-label">Locality</label>
                                                        
                                                        <input name="locality" style="position:absolute;left:850px;height:30px;top:340px;width:300px" maxlength="6"  id="PageContent_txtpincode" tabindex="13" class="form-control" type="text" />

            
                </select>
            
                                                        
                                                        <span class="flderror fld14-error"></span>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label style="position:absolute;top:405px" for="password" class="col-lg-4 control-label">Street</label>
                                                        
                                                        <input name="street" style="position:absolute;left:850px;height:30px;top:400px;width:300px" maxlength="6"  id="PageContent_txtpincode" tabindex="13" class="form-control" type="text" />

            
                </select>
            
                                                        
                                                        <span class="flderror fld15-error"></span>
                                                    </div>
                                                </div>
            
            
                                                
            
                                                <div class="form-group">
                                                    <label style="position:absolute;top:465px" for="email" class="col-lg-4 control-label">Building/Apartment/Landmark Name</label>
                                                    
                                                        <input style="position:absolute;left:850px;height:30px;top:460px;width:300px" name="buildingname" maxlength="40" id="PageContent_txtbuldingname" tabindex="20" class="form-control"type="text" />
                                                        
                                                    
            
                                                </div>
                                             
                                                <div class="form-group">
                                                    <label style="position:absolute;top:525px" for="email" class="col-lg-4 control-label">Door No</label>
                                                
                                                        <input style="position:absolute;left:850px;height:30px;top:520px;width:300px" name="doorno" maxlength="40" id="PageContent_txtaprtdoorno" tabindex="21" class="form-control"type="text" />
                                                        
                                                    
                                                    <span class="flderror fld16-error"></span>
                                                </div>
            
                                                
                                            </div>
            
                                        </div>
            
                                    
                                    <div style="text-align: center;">
                                        <span id="PageContent_lblResult" style="color:Red;"></span>
            
                                    </div>
            
                                    <div style="text-align: center;">
            
                                        <input type="submit" style="border:0;color:white;background-color:green;position:absolute;left:850px;height:28px;top:580px"name="ctl00$PageContent$btnSubmit" value="Submit" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$PageContent$btnSubmit&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="PageContent_btnSubmit" tabindex="23" class="btn btn-primary" />
                                        <input type="submit" style="border:0;color:white;background-color:green;position:absolute;left:910px;height:28px;top:580px" name="ctl00$PageContent$btnReset" value="Reset" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$PageContent$btnReset&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="PageContent_btnReset" tabindex="24" class="btn btn-primary" />
            
                                    </div>
                                    
                                    <div class="form-group">
            
            
                                        <span class="glyphicon glyphicon-hand-right"></span>&nbsp;<a style="position:absolute;left:850px;top:620px;text-decoration:none;color:black" href="LoginPage.aspx">Go to Home Page</a>
            
                                    </div>
            
                                    </div>
                                </div>
                            
            </div>
                    </div>
                </div>
                <div id="dialog" style="display: none">
                </div>
                <div id="CPRegNo">
                    <div id="PageContent_Panel3">
                
            
                        <span id="PageContent_lblRegNo"></span>
            
                        <br />
                        <br />
            
                        
            </div>
            </div>
                
            </form>
        </div>
        <footer style="background-color: black;position: relative;top: 880px;width: 1350px;left: 80px">
            <br>
            <br>
            <div class="row 1" style="position: relative;right:80px">
                <a href="https://www.facebook.com/Cristiano" target="_blank"><img src="fb.png" style="position: relative;;left: 600px" height="25" width="25"></a>
                <a href="https://www.instagram.com/jeffbezos/?hl=en" target="_blank"><img src="insta.png" style="position: relative;;left: 650px" height="25" width="25"></a>
                <a href="" target="_blank"><img src="twitch.png" style="position: relative;left:700px" height="25" width="25"></a>
                <a href="https://twitter.com/elonmusk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><img src="twitter.png" style="position: relative;;left: 750px" height="25" width="25"></a>
                <a href="https://youtu.be/dQw4w9WgXcQ" target="_blank"><img src="youtube.png" style="position: relative;;left: 800px;bottom: 2px"></a>
        
            </div>
            <br>
            <br>
            <div class="row 2" style="position: relative;right:60px">
                <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 350px;text-decoration:none;">Get the Aquaria app
                        <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                    </a>
                <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 370px;text-decoration:none;">Help
                        <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                    </a>
                <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 390px;text-decoration:none;">Site Index
                        <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                    </a>
                <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 410px;text-decoration:none;">AquariaPro
                        <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                    </a>
                <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 430px;text-decoration:none;">About us
                        <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                    </a>
                <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 450px;text-decoration:none;">Aquaria Developers
                        <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                    </a>
        
            </div>
            <br>
            <div class="row 3" style="position: relative;right:60px">
                <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 350px;text-decoration:none;">Press Room
                        <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                    </a>
                <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 370px;text-decoration:none;">Advertising
                        <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                    </a>
                <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 390px;text-decoration:none;">Jobs
                        <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                    </a>
                <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 410px;text-decoration:none;">Condtions of Use
                        <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                    </a>
                <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 430px;text-decoration:none;">Privacy Policy
                        <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                    </a>
                <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 450px;text-decoration:none;">Internet-Based Ads
                        <img src="arrow.png" height="20" width="20" style="position:relative;top:5px;right: 5px">
                    </a>
            </div>
            <br>
        
            <center>
                <div class="row 4">
                    <p style="color: white;font-weight: bold">an&nbsp;<img src="amrita.png" width="70" height="30" style="position: relative;top:13px">&nbsp;Company</p>
                </div>
            </center>
            <br>
            <center>
                <p style="color: grey;font-size:small">© 2021-2022 by Aquaria.com, Inc.</p>
            </center>
            <br>
        
        </footer>
        
    </body>
    
</html>