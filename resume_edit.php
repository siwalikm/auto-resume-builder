<?php include('main.php') ?>
<?php
    session_start();
if(!isset($_SESSION['varname']))
{
    header("location:index.php");
}
else if(isset($_GET['id'])){
    
$log=$_GET['id'];
}
else{
$log=$_SESSION['varname'];
}
$sql = "SELECT * FROM employee WHERE ID='$log'";
$retval = mysqli_query( $con,$sql );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{
    $fname=$row['FullName'];
$lname=$row['LastName'];
$email=$row['email'];
$phone=$row['phone'];
$dob=$row['dob'];
$add1=$row['add1'];
$add2=$row['add2'];
$course1=$row['course1'];
$iname1=$row['iname1'];
$startmonth1=$row['start1'];
$endmonth1=$row['end1'];
$course2=$row['course2'];
$iname2=$row['iname2'];
$startmonth2=$row['start2'];
$endmonth2=$row['end2'];
$course3=$row['course3'];
$iname3=$row['iname3'];
$startmonth3=$row['start3'];
$endmonth3=$row['end3'];
$course4=$row['course4'];
$iname4=$row['iname4'];
$startmonth4=$row['start4'];
$endmonth4=$row['end4'];
$job1=$row['job1'];
$comp1=$row['comp1'];
$startmonth5=$row['start5'];
$endmonth5=$row['end5'];
$job2=$row['job2'];
$comp2=$row['comp2'];
$startmonth6=$row['start6'];
$endmonth6=$row['end6'];
$job3=$row['job3'];
$comp3=$row['comp3'];
$startmonth7=$row['start7'];
$endmonth7=$row['end7'];
$others=$row['addinfo'];
$country=$row['nation'];
    $dbms=$row['dbms'];
$prog=$row['prog'];
    $ms=$row['ms'];
    $html=$row['html'];
    $test=$row['test'];
    $analysis=$row['analysis'];
    $password=$row['password'];
    
}
?>
<html>
<head>
  <title>Infosys Project</title>
 <link rel="stylesheet" href="resume.css">
    <script src="//use.edgefonts.net/source-sans-pro.js"></script>
    <script type="text/javascript">
    function more(){
    	document.getElementById('new').style.display="block";
        document.getElementById('but1').style.display="none";
	}
        function more1(){
    	document.getElementById('new1').style.display="block";
        document.getElementById('but2').style.display="none";
	}
        
        function more2(){
    	document.getElementById('work2').style.display="block";
        document.getElementById('but3').style.display="none";
	}
        function more3(){
    	document.getElementById('work3').style.display="block";
        document.getElementById('but4').style.display="none";
	}
        
        function more4(){
    	document.getElementById('new2').style.display="block";
        document.getElementById('but5').style.display="none";
	}
        function disp(){
            if(document.getElementById('course2').value!="")
            {
               more();
            }
            if(document.getElementById('course3').value!="")
            {
               more1();
            }
            if(document.getElementById('course4').value!="")
            {
               more4();
            }
            if(document.getElementById('job2').value!="")
            {
               more2();
            }
            if(document.getElementById('job3').value!="")
            {
               more3();
            }
            
        }
        function checkPass()
{
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('confirm_password');
    var message = document.getElementById('confirmMessage');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if(pass1.value == pass2.value){
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
        document.getElementById('submit').style.display="block";
    }else{
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
        document.getElementById('submit').style.display="none";
    }
}  
            
    </script>
    </head>
    
<body onload="disp();">
<div id="header">
Winner Technologies Ltd.
    </div>
    
    <div id="subheader">
       Welcome to Resume Builder v1.0 |
        Kindly fill up the form below to Auto Generate your resume.
    </div></div><div id="HELP1"><button id="help">HELP</button>  
    <img id="screen" src="Screens/Untitled-2.png">
  </div>
    <br><br>
   <div id="main">
        <form id="form" action="update.php" method="post">
        <fieldset>
            <legend>Enter Your Personal Details</legend>
            
<label for="fname">First Name</label>
<label for="lname" style="padding-left:100">Last Name</label><br>
<input type="text" name="fpname" id="fname" value= <?php echo $fname?>  required>            
<input type="text" name="lpname" id="lname" value= <?php echo $lname?> required><br><br>
            
<label for="email">Enter Your Email</label><br>
<input type="email" name="email" id="email" value= <?php echo $email?> required> <br>
             <label for="text">Phone Number</label><br>
<input type="text" name="phone" id="phone" maxlength="10" value= <?php echo $phone?> required>
  <br/><br>           
<label for='country' >Choose your Nationality</label><br>
<select id="country1" name="country">
    <option value="<?php echo $country ?>"><?php echo $country ?></option>
  <option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
            </select>
<br/><br/>

<label for="dob">Enter Birthdate</label><br>
<input type="date"  name="dob" id="dob" value= <?php echo $dob?> required><br/><br/>
<label for="text">Address line 1</label><br>
<input type="text"  name="add1" id="add1" value= <?php echo $add1?> required><br/><br/>
<label for="text">Address line 2</label><br>
<input type="text"  name="add2" id="add2" value= <?php echo $add2?>><br/><br/>

         
</fieldset>    
         <br><br>     
<fieldset>
<legend>Educational Information</legend><br>
    <label for="text">Course Name</label> 
    <label for="text" style="padding-left:80">Institution Name</label><br>
<input type="text"  name="course1" id="course1" value= <?php echo $course1?> required>
   <input type="text"  name="iname1" id="iname1" value= <?php echo $iname1?> required><br/><br/>
    <label for="text">Start Date</label>
      <label for="text" style="padding-left:110">End Date</label><br>
     <input type="date" name="startmonth1" value= <?php echo $startmonth1 ?> required>
  <input type="date" name="endmonth1" value= <?php echo $endmonth1?> required>
      <br><br><hr>
    <br>
 <input id="but1" type="button" onclick="more()" value="Add More"><br>
  
    
    <div id="new">   
    <label for="text">Course Name</label> 
    <label for="text" style="padding-left:80">Institution Name</label><br>
<input type="text"  name="course2" id="course2" value= <?php echo $course2?>>
   <input type="text"  name="iname2" id="iname2" value= <?php echo $iname2?>><br/><br/>
    <label for="text">Start Date</label>
      <label for="text" style="padding-left:110">End Date</label><br>
     <input type="date" name="startmonth2" value= <?php echo $startmonth2?>>
  <input type="date" name="endmonth2" value= <?php echo $endmonth2?>>
      <br><br><hr>
        <br>
          <input id="but2" type="button" onclick="more1();" value="Add More"><br>
          </div>
    
    <div id="new1">   
    <label for="text">Course Name</label> 
    <label for="text" style="padding-left:80">Institution Name</label><br>
<input type="text"  name="course3" id="course3" value= <?php echo $course3?>>
   <input type="text"  name="iname3" id="iname3" value= <?php echo $iname3?>><br/><br/>
    <label for="text">Start Date</label>
      <label for="text" style="padding-left:110">End Date</label><br>
     <input type="date" name="startmonth3" value= <?php echo $startmonth3?>>
  <input type="date" name="endmonth3" value= <?php echo $endmonth3?>>
      <br><br><hr>
        <br>
        <input id="but5" type="button" onclick="more4();" value="Add More"><br>
    </div>
    
    <div id="new2">   
    <label for="text">Course Name</label> 
    <label for="text" style="padding-left:80">Institution Name</label><br>
<input type="text"  name="course4" id="course4" value= <?php echo $course4?>>
   <input type="text"  name="iname4" id="iname4" value= <?php echo $iname4?>><br/><br/>
    <label for="text">Start Date</label>
      <label for="text" style="padding-left:110">End Date</label><br>
     <input type="date" name="startmonth4" value= <?php echo $startmonth4?>>
  <input type="date" name="endmonth4" value= <?php echo $endmonth4?>>
      <br><br><hr>
    </fieldset> <br><br>
    
<fieldset>
<legend>Work Experience</legend><br>
    <div id="work1">   
    <label for="text">Job Title</label> 
    <label for="text" style="padding-left:115" style="padding-left:115">Company Name</label><br>
<input type="text"  name="job1" id="job1" value= <?php echo $job1?> required>
   <input type="text"  name="comp1" id="comp1" value= <?php echo $comp1?> required><br/><br/>
    <label for="text">Start Date</label>
      <label for="text" style="padding-left:110">End Date</label><br>
     <input type="date" name="startmonth5" value= <?php echo $startmonth5?> required>
  <input type="date" name="endmonth5" value= <?php echo $endmonth5 ?> required>
      <br><br><hr>
        <br>
         <input id="but3" type="button" onclick="more2();" value="Add More"><br>
          </div>
    
    <div id="work2">   
    <label for="text">Job Title</label> 
    <label for="text" style="padding-left:115px">Company Name</label><br>
<input type="text"  name="job2" id="job2"  value= <?php echo $job2 ?>>
   <input type="text"  name="comp2" id="comp2" value= <?php echo $comp2 ?>><br/><br/>
    <label for="text">Start Date</label>
      <label for="text" style="padding-left:110px">End Date</label><br>
     <input type="date" name="startmonth6"  value= <?php echo $startmonth6?>>
  <input type="date" name="endmonth6"  value= <?php echo $endmonth6?>>
      <br><br><hr>
        <br>
         <input id="but4" type="button" onclick="more3();" value="Add More"><br>
          </div>
    
    <div id="work3">   
    <label for="text">Job Title</label> 
    <label for="text" style="padding-left:115px">Company Name</label><br>
<input type="text"  name="job3" id="job3"  value= <?php echo $job3?>>
   <input type="text"  name="comp3" id="comp3" value= <?php echo $comp3?>><br/><br/>
    <label for="text">Start Date</label>
      <label for="text" style="padding-left:110px">End Date</label><br>
     <input type="date" name="startmonth7" value= <?php echo $startmonth7?>>
  <input type="date" name="endmonth7" value= <?php echo $endmonth7?>>
      <br><br><hr>
          </div>
        </fieldset>
           <br><br>
       <fieldset>
         <legend>Skill Preference</legend>
           <input type="checkbox" name="database" value="database">Database
<br>
<input type="checkbox" name="Programmming" value="Programmming">Programmming
           <br>
           <input type="checkbox" name="MS-SQL" value="MS-SQL">MS-SQL
<br>
<input type="checkbox" name="HTML" value="HTML">HTML
           <br>
           <input type="checkbox" name="Testing" value="Testing">Testing
<br>
<input type="checkbox" name="Analysis" value="Analysis">Analysis
       </fieldset>
    <br>
     <fieldset>
            <legend>Password</legend>
                <label for="text">New Password</label>
                <label for="text" style="padding-left:70px">Confirm New Password</label><br>
                
<input type="password" id="password" name="password" value="<?php echo $password?> required">
<input type="password" id="confirm_password" onkeyup="checkPass();"><span id="confirmMessage" class="confirmMessage"></span>            </fieldset>
    <br>
    <fieldset>
    <legend>Visa Details</legend>
        <textarea rows="10" cols="80" name="others" id="others"><?php echo $others?></textarea>
    </fieldset>
            <br><br>
 <center>    <input id="submit" type="submit" value="Edit" target="_blank"/> 
       </center>
   </form>
    </div>
    <br><br><br>
 
</body>
    <div id="footer" style="  background-color: rgba(29, 25, 25, 0.94);
    width:100%;
   
    height:65;">
        <center ><pre style="  font-family: source-sans-pro, sans-serif;">Copyright &copy Winner Technologies Pvt. Ltd.   |    <a href="about.html">About Us</a></pre></center>
    </div>
</html>