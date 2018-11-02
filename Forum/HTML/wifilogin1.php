
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<meta name='generator' content='RocketCake'>
	<title></title>
	<link rel='stylesheet' type='text/css' href='wifiform.html.css'>
		<style>
	#header{
	background-color:#3498DB;
	
	color:white;
	font-family:Times New Roman;
	font-size:medium;
	margin:0px;	
	}
.acc1{font-family:Times New Roman;
font-size:25px;
color:black;
	}
	.acc2{font-family:Times New Roman;
font-size:20px;
color:#C0392B  ;
	}
	.acc3{font-family:Times New Roman;
font-size:20px;
color:#2C3E50  ;
	}
	.acc4{font-family:Times New Roman;
font-size:20px;
color:#2C3E50  ;
	}

</style>

<body>









<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ohe';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn) {
//echo 'Success';
  //  die('Connection failed: ' . mysqli_connect_error());
}

//session_start();
//$_POST['TextEdit1']=$_SESSION['myValue'];
//echo $_SESSION['myValue'];
//$Rollno=$_SESSION['myValue'];
$Rollno="15csr178";
$sql = "SELECT * FROM register WHERE `rollno` LIKE '$Rollno'";
$result1 = mysqli_query($conn, $sql);

if($result1)
{
		$result=mysqli_fetch_assoc($result1);
		
		$rollno=$result['rollno'];
		$name=$result['name'];
		$gender=$result['gender'];
		$course=$result['course'];
		
		$branch=$result['branch'];
		$courseduration=$result['courseduration'];
		$hostel=$result['hostel'];
		$roomno=$result['roomno'];
		$gmail=$result['gmail'];
		
}
else
{
	echo 'enter valid';
}

//mysqli_close($conn);

echo "
<form action='wifilogin.php'  method='get'>
<div class='textstyle1'>
  <img src='rc_images/transfrm.jpg' id='img_7c36b3fb' alt='' title='' />
  <img src='rc_images/keclogo.jpg' id='img_2e184021' alt='' title='' />
<span class='textstyle2'><br/></span>  </div>
<div id = 'header'>
    <table border='0' width='100%'>
        <tr>
            <td width='10%' style='padding:5px;'>
            <a href='index.php'><img src='new1.png' height='125px' width='125px' alt='right_logo'></a>
            </td>
            <td width='80%'>
            <center><span class='acc1'><strong>KONGU ENGINEERING COLLEGE</strong></span></center>
			<center><span class='acc3'>(Autonomous)</span></center>
            <center><span class='acc2'>Accredited by NAAC with 'A' Grade</span></center>
            
            <center><span class='acc4'>Perundurai,Erode - 638052</span></center>
            </td>
            <td width='20%' style='padding:5px;'>
            <img style='float:right;' src='new2.png' height='125px' width='125px' alt='right_logo'>
            </td>
        </tr>
    </table>
    </div>
<div class='textstyle3'>
<span class='textstyle4'>DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING<br/>    WI-FI Connectivity - Registration Form<br/></span>  </div>
<div class='textstyle1'>
<span class='textstyle2'><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></span>  </div>
<div class='textstyle5'>
<table id='table_19a214ce' cellpadding='3' cellspacing='1' >	<tr>
		<td width='50%' height='32' colspan='2' style='vertical-align: top;'>  <div id='cell_366cb74c'>
    <div class='textstyle5'>
      <span class='textstyle6'>I. General Information:<br/></span>
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_2a63c6c8'>
    <div class='textstyle5'>
      <span class='textstyle7'>Faculty / Roll Number</span>
      </div>
    </div>
		</td>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_7bfc192b'>
    <div class='textstyle5'>
<input type='text' value= ".$rollno." title='' name='TextEdit1'  id='edit_1994e0d2' class='rollno'>
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_4466483b'>
    <div class='textstyle5'>
      <span class='textstyle7'>Name</span>
      </div>
    </div>
		</td>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_5263dfac'>
    <div class='textstyle5'>
<input type='text' value=".$name." title='' name='TextEdit2'  id='edit_7e822e07' >
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_2ba0dbc0'>
    <div class='textstyle5'>
      <span class='textstyle7'>Sex </span>
      </div>
    </div>
		</td>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_5d26a4c5'>
    <div class='textstyle5'>
<input type='text' value=".$gender." title='' name='TextEdit2'  id='edit_169edec1' >
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_22f72509'>
    <div class='textstyle5'>
      <span class='textstyle7'>Course</span>
      </div>
    </div>
		</td>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_5c9515a7'>
    <div class='textstyle5'>
<input type='text' value=".$course." title='' name='TextEdit2'  id='edit_552d7807' >
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_41e58864'>
    <div class='textstyle5'>
      <span class='textstyle7'>Branch</span>
      </div>
    </div>
		</td>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_79434e84'>
    <div class='textstyle5'>
<input type='text' value=".$branch." title='' name='TextEdit2'  id='edit_6f123cbb' >
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_1f2ec5b6'>
    <div class='textstyle5'>
      <span class='textstyle7'>Course Duration </span>
      </div>
    </div>
		</td>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_16c06f69'>
    <div class='textstyle5'>
<input type='text' value=".$courseduration." title='' name='TextEdit2'  id='edit_629e3c79' >
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_74487854'>
    <div class='textstyle5'>
      <span class='textstyle7'>Hostel</span>
      </div>
    </div>
		</td>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_23467b03'>
    <div class='textstyle5'>
<input type='text' value=".$hostel." title='' name='TextEdit2'  id='edit_325f9d76' >
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_3c1a7df6'>
    <div class='textstyle5'>
      <span class='textstyle7'>Room No</span>
      </div>
    </div>
		</td>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_23467b03'>
    <div class='textstyle5'>
<input type='text' value=".$roomno." title='' name='TextEdit2'  id='edit_325f9d76' >
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_1f43b43a'>
    <div class='textstyle5'>
      <span class='textstyle7'>e-mail ID </span>
      </div>
    </div>
		</td>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_15e95683'>
    <div class='textstyle5'>
<input type='text' value=".$gmail." title='' name='TextEdit2'  id='edit_385cb94e' >
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='32' colspan='2' style='vertical-align: top;'>  <div id='cell_65e5c569'>
    <div class='textstyle5'>
      <span class='textstyle6'>II. Technical Information:</span>
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_3c79d059'>
    <div class='textstyle5'>
      <span class='textstyle7'>Type of Device</span>
      </div>
    </div>
		</td>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_52fa8e25'>
    <div class='textstyle5'>
<input name='RadioButton1' type='radio' value='' title=''  id='radiobutton_2ccd4f1f' >
      <span class='textstyle8'>desktop           </span>
<input name='RadioButton2' type='radio' value='' title=''  id='radiobutton_e6feb80' >
      <span class='textstyle8'>laptop</span>
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_3aee8af7'>
    <div class='textstyle5'>
      <span class='textstyle7'>Make, Model &amp; Serial No</span>
      </div>
    </div>
		</td>
		<td width='50%' height='32' style='vertical-align: top;'>  <div id='cell_6568132a'>
    <div class='textstyle5'>
<input type='text' value='' title='' name='TextEdit2'  id='edit_372572cb' >
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='58' style='vertical-align: top;'>  <div id='cell_6380ab8d'>
    <div class='textstyle5'>
<span class='textstyle9'><br/><br/>Wireless Mac Address:<br/></span><table id='table_45c793e9' cellpadding='3' cellspacing='1' >	<tr>
		<td width='16%' height='30' style='vertical-align: top;'>      <div id='cell_2fd71083'>
        <div class='textstyle5'>
          <span class='textstyle7'>01</span>
          </div>
        </div>
		</td>
		<td width='16%' height='30' style='vertical-align: top;'>      <div id='cell_55665f04'>
        <div class='textstyle5'>
          <span class='textstyle7'>23</span>
          </div>
        </div>
		</td>
		<td width='16%' height='30' style='vertical-align: top;'>      <div id='cell_149e2e75'>
        <div class='textstyle5'>
          <span class='textstyle7'>98</span>
          </div>
        </div>
		</td>
		<td width='16%' height='30' style='vertical-align: top;'>      <div id='cell_4789644e'>
        <div class='textstyle5'>
          <span class='textstyle7'>AD</span>
          </div>
        </div>
		</td>
		<td width='16%' height='30' style='vertical-align: top;'>      <div id='cell_7b322585'>
        <div class='textstyle5'>
          <span class='textstyle7'>DR</span>
          </div>
        </div>
		</td>
		<td width='16%' height='30' style='vertical-align: top;'>      <div id='cell_5f88a5e0'>
        <div class='textstyle5'>
          <span class='textstyle7'>EF</span>
          </div>
        </div>
		</td>
	</tr>
</table>      </div>
    </div>
		</td>
		<td width='50%' height='58' style='vertical-align: top;'>  <div id='cell_40fcb774'>
    <div class='textstyle5'><br/><br/>
<table id='table_6a66f0ab' cellpadding='3' cellspacing='1' >	<tr>
		<td width='16%' height='54' >
		</td>
		<td width='16%' height='54' >
		</td>
		<td width='16%' height='54' >
		</td>
		<td width='16%' height='54' >
		</td>
		<td width='16%' height='54' >
		</td>
		<td width='16%' height='54' >
		</td>
	</tr>
</table>      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='68' style='vertical-align: top;'>  <div id='cell_6380ab8d'>
    <div class='textstyle5'>
      <span class='textstyle7'>Operating System installed and Version<br/> ( Ex: Windows 7 (or) 8, XP-SP3, Linux )<br/>Critical updates must be applied when available </span>
      </div>
    </div>
		</td>
		<td width='50%' height='68' style='vertical-align: top;'>  <div id='cell_6380ab8d'>
    <div class='textstyle5'>
<input type='text' value='' title='' name='TextEdit2'  id='edit_5a455ad1' >
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='76' style='vertical-align: top;'>  <div id='cell_19edd504'>
    <div class='textstyle5'>
      <span class='textstyle7'>Antivirus product installed<br/>Licensed AV Software - No trial / demo versions<br/>&#8216;required and must be kept up-to-date' <br/></span>
      </div>
    </div>
		</td>
		<td width='50%' height='76' style='vertical-align: top;'>  <div id='cell_46d16b'>
    <div class='textstyle5'>
<input type='text' value='' title='' name='TextEdit2'  id='edit_10fa1e7e' >
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='105' colspan='2' style='vertical-align: top;'>  <div id='cell_19edd504'>
    <div class='textstyle5'>
      <span class='textstyle7'><br/>I hereby declare that the above information given by me is true and correct. I understand that the Wireless access is provided to me for my academic work only. I also agree that I will not share this account with any person and will take due care in protecting the same.</span>
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='163' colspan='2' style='vertical-align: top;'>  <div id='cell_19edd504'>
    <div class='textstyle5'>
      <span class='textstyle7'>Signature: <br/>Date:          </span>
      </div>
    <div class='textstyle10'>
      <span class='textstyle7'>HOD</span>
      </div>
    <div class='textstyle3'>
      <span class='textstyle7'>Deputy Warden / </span>
      </div>
    <div class='textstyle5'>
      <span class='textstyle7'>                                                     </span>
      </div>
    <div class='textstyle3'>
      <span class='textstyle7'>Class Advisor (Day scholar only) </span>
      </div>
    <div class='textstyle5'>
      <span class='textstyle7'> <br/></span>
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='108' colspan='2' style='vertical-align: top;'>  <div id='cell_19edd504'>
    <div class='textstyle5'>
      <span class='textstyle7'>Username and Password as Same for Firewall Authentication (Netid) and Kongu_Wifi<br/><br/></span>
      <span class='textstyle11'>SSID:</span>
      <span class='textstyle7'> Kongu_Wifi           </span>
      <span class='textstyle11'>Visit website:</span>
      <span class='textstyle7'> </span>
      <span class='textstyle12'>http://www.kongu.edu/support/wifi.htm</span>
      <span class='textstyle7'> for Tutorials.<br/><br/></span>
      <span class='textstyle6'>OFFICE USE:</span>
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='107' colspan='2' style='vertical-align: top;'>  <div id='cell_19edd504'>
    <div class='textstyle5'>
<table id='table_714e5a50' cellpadding='3' cellspacing='1' >	<tr>
		<td width='50%' height='48' style='vertical-align: top;'>      <div id='cell_5af44f54'>
        <div class='textstyle5'>
          <span class='textstyle7'>User Name</span>
          </div>
        </div>
		</td>
		<td width='50%' height='48' style='vertical-align: top;'>      <div id='cell_7a3f4f72'>
        <div class='textstyle5'>
<input type='text' value='' title='' name='TextEdit2'  id='edit_94f4ad3' >
          </div>
        </div>
		</td>
	</tr>
	<tr>
		<td width='50%' height='48' style='vertical-align: top;'>      <div id='cell_17f3bcff'>
        <div class='textstyle5'>
          <span class='textstyle7'>Signature with Date</span>
          </div>
        </div>
		</td>
		<td width='50%' height='48' style='vertical-align: top;'>      <div id='cell_431272da'>
        <div class='textstyle5'>
<input type='text' value='' title='' name='TextEdit2'  id='edit_5a9fcc7a' >
          </div>
        </div>
		</td>
	</tr>
	
</table>      </div>
    </div>
		</td>
	</tr>
</table>  </div>
</form>";
?>
</body>
</html>
