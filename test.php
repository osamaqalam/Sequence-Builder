<?php
require_once 'FrontEnd/backendInterface.php';
set_time_limit(0);
genNewSched();

$userSched = $_SESSION['userSched'];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>



	<title>SOEN Course Stream</title></head>
	<style>
	        :root{
          --mainColor: #14162B;
          --background: #2cc16a;
          --fadedText: #36384D;
          --mainButtons: rgb(241, 48, 78);
        }

	  body {
          background-image: linear-gradient(to bottom, rgba(255, 255, 255,9), rgba(230, 247, 255,9)), url("concordia.jpg");
          background-image: -moz-linear-gradient(top, rgba(230, 247, 255,9), rgba(230, 247, 255,9)), url(concordia.jpg);
          background-image: -o-linear-gradient(top, rgba(230, 247, 255,9), rgba(230, 247, 255,9)), url(concordia.jpg);
          background-image: -ms-linear-gradient(top, rgba(230, 247, 255,9), rgba(230, 247, 255,9)), url(concordia.jpg);
          background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255,9)), to(rgba(230, 247, 255,9))), url(../../../../../Downloads/concordia.jpg);
          background-image: -webkit-linear-gradient(top, rgba(230, 247, 255,9), rgba(230, 247, 255,0)), url(concordia.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }




	        .container {
          font-family: 'Montserrat', sans-serif;
          position: fixed;
          background: var(--mainColor);
          height: 490px;
          width: 800px;
        /*   overflow: scroll; */
          border-radius: 6px;
          box-shadow: 0px 0px 47px -1px rgba(0,0,0,0.75);
          /*   centering a fixed element in the middle of screen */
          margin: -245px -400px;
          top: 50%;
          left: 50%;
        }
	 .topHeader {
          color: white;
          background: var(--mainColor);
          height: 80px;
          width: 100%;
          padding: 15px 0px 15px 0px;
          text-align: center;
          z-index: 30;
          box-shadow: 0px 10px 28px -11px rgba(0,0,0,0.35);
        }
        h1 {
          font-size: 30px;
          margin-top: 0px;
          margin-bottom: 30px;
          display: inline-block;
          font-weight: 100;
        }
        .topHeader, th {
          font-size: 15px;
        }
        .tableHeader th {
          color: black;
		  font-weight:500;

        }
        table {
          width: 100%;
          border-spacing: 0px;
        }
        td, th {
          width: 100px;
        }
        td {
          height: 12px;
          border-left: 1px solid rgba(120,120,255,0.5);
        }

		tr{

		}
        .time {
          color: black;
          font-size: 20px;
          text-align: center;
          font-weight: 100;
					  border:1px solid black;
        }
        tr:nth-child(2n) {
          background: rgba(120,120,255,0.06);
        }
	.dropdown-menu{
	background-color: #80ffbf;
	opacity:0.86;
	}



	</style>
	 <body>
	 	 	<?php echo '<pre>';
print_r($userSched->getListOfSemesters()[0]->getTuts());
echo '</pre>';?>

 <div class="topHeader">
        <button class="btn btn-warning" style="float:left; margin-left:20px;"><strong>Save Schedule</strong></button>

        <h1 class="text-center">Weekly Schedule</h1>
		<div class="dropdown" style="float:right;margin-right:10px;">
			<button class="btn btn-primary dropdown-toggle" name="btndropdown"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add Time Constrain</button>
				<div class="dropdown-menu dropdown-menu-right">
					<div class="form-group">
						<form name="add_name" id="add_name">
							<table class="table table-bordered" id="dynamic_field">
								<tr>
									<th class="text-center">Days</th>
									<th class="text-center">Start Time</th>
									<th class="text-center">End Time</th>
									<th class="text-center">Status</th>
								</tr>
								<tr>
									<td><select name="Days" style="text-align:center;">
										<option value="Monday">Monday</option>
										<option value="Tuesday">Tuesday</option>
										<option value="Wednesday">Wednesday</option>
										<option value="Thursday">Thursday</option>
										<option value="Friday">Friday</option>
										<option value="Saturday">Saturday</option>
										<option value="Sunday">Sunday</option>
									</td>

									<td></select><input type="time" id="starting1" name="starting1" placeholder="Starting Time"></td>
									<td><input type="time" id="ending1" name="ending1" placeholder="Ending Time"></td>
									<td><button type="button" name="add" id="add" class="btn btn-secondary">Next</button></td>
								</tr>
								<input type="button" class="btn btn-success btn-sm"style="float:right; margin-right:20px;" value="submit"/>
							</table>
						</form>
					</div>
				</div>
	</div>
	  <div class="scheduleArea">


      <table class="tableTimes" style=" text-align:center" >
	          <tr >
          <th style="margin-left:20px">Time</th>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
          <th>Saturday</th>
          <th>Sunday</th>
        </tr>

        <tr style="border-top: 2px solid black; ">
          <td class="time" rowspan="4" scope="row"><span class>8:00</span></td>

          <td class="M" name="M080000" id="M080000">&nbsp;</td>
          <td class="T" name="T080000" id="T080000">&nbsp;</td>

          <td class="W" name="W080000" id="W080000">&nbsp;</td>
          <td class="J" name="J080000" id="J080000">&nbsp;</td>
          <td class="F" name="F080000" id="F080000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
		      <td class="sunday">&nbsp;</td>



        </tr>
        <tr >

          <td class="M" name="M081500" id="M081500">&nbsp;</td>
          <td class="T" name="T081500" id="T081500">&nbsp;</td>
          <td class="W" name="W081500" id="W081500">&nbsp;</td>
          <td class="J" name="J081500" id="J081500">&nbsp;</td>
          <td class="F" name="F081500" id="F081500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr >
          <td class="M" name="M083000" id="M083000">&nbsp;</td>
          <td class="T" name="T083000" id="T083000">&nbsp;</td>
          <td class="W" name="W083000" id="W083000">&nbsp;</td>
          <td class="J" name="J083000" id="J083000">&nbsp;</td>
          <td class="F" name="F083000" id="F083000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr >
          <td class="M" name="M084500" id="M084500">&nbsp;</td>
          <td class="T" name="T084500" id="T084500">&nbsp;</td>
          <td class="W" name="W084500" id="W084500">&nbsp;</td>
          <td class="J" name="J084500" id="J084500">&nbsp;</td>
          <td class="F" name="F084500" id="F084500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>



        <tr>
          <td class="time" rowspan="4" scope="row"><span class>9:00</span>&nbsp;</td>
          <td class="M" name="M090000" id="M090000">&nbsp;</td>
          <td class="T" name="T090000" id="T090000" >&nbsp;</td>
          <td class="W" name="W090000" id="W090000">&nbsp;</td>
          <td class="J" name="J090000" id="J090000">&nbsp;</td>
          <td class="F" name="F090000" id="F090000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
		      <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M091500" id="M091500">&nbsp;</td>
          <td class="T" name="T091500" id="T091500">&nbsp;</td>
          <td class="W" name="W091500" id="W091500">&nbsp;</td>
          <td class="J" name="J091500" id="J091500">&nbsp;</td>
          <td class="F" name="F091500" id="F091500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M093000" id="M093000">&nbsp;</td>
          <td class="T" name="T093000" id="T093000">&nbsp;</td>
          <td class="W" name="W093000" id="W093000">&nbsp;</td>
          <td class="J" name="J093000" id="J093000">&nbsp;</td>
          <td class="F" name="F093000" id="F093000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M094500" id="M094500">&nbsp;</td>
          <td class="T" name="T094500" id="T094500">&nbsp;</td>
          <td class="W" name="W094500" id="W094500">&nbsp;</td>
          <td class="J" name="J094500" id="J094500">&nbsp;</td>
          <td class="F" name="F094500" id="F094500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>



        <tr>
          <td class="time" rowspan="4" scope="row"><span class>10:00</span>&nbsp;</td>
          <td class="M" name="M100000" id="M100000">&nbsp;</td>
          <td class="T" name="T100000" id="T100000">&nbsp;</td>
          <td class="W" name="W100000" id="W100000">&nbsp;</td>
          <td class="J" name="J100000" id="J100000">&nbsp;</td>
          <td class="F" name="F100000" id="F100000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
		       <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M101500" id="M101500">&nbsp;</td>
          <td class="T" name="T101500" id="T101500">&nbsp;</td>
          <td class="W" name="W101500" id="W101500">&nbsp;</td>
          <td class="J" name="J101500" id="J101500">&nbsp;</td>
          <td class="F" name="F101500" id="F101500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
           <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M103000" id="M103000">&nbsp;</td>
          <td class="T" name="T103000" id="T103000">&nbsp;</td>
          <td class="W" name="W103000" id="W103000">&nbsp;</td>
          <td class="J" name="J103000" id="J103000">&nbsp;</td>
          <td class="F" name="F103000" id="F103000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
           <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M104500" id="M104500">&nbsp;</td>
          <td class="T" name="T104500" id="T104500">&nbsp;</td>
          <td class="W" name="W104500" id="W104500">&nbsp;</td>
          <td class="J" name="J104500" id="J104500">&nbsp;</td>
          <td class="F" name="F104500" id="F104500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
           <td class="sunday">&nbsp;</td>
        </tr>





        <tr>
          <td class="time" rowspan="4" scope="row"><span class>11:00</span>&nbsp;</td>
          <td class="M" name="M110000" id="M110000">&nbsp;</td>
          <td class="T" name="T110000" id="T110000">&nbsp;</td>
          <td class="W" name="W110000" id="W110000">&nbsp;</td>
          <td class="J" name="J110000" id="J110000">&nbsp;</td>
          <td class="F" name="F110000" id="F110000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
		      <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M111500" id="M111500">&nbsp;</td>
          <td class="T" name="T111500" id="T111500">&nbsp;</td>
          <td class="W" name="W111500" id="W111500">&nbsp;</td>
          <td class="J" name="J111500" id="J111500">&nbsp;</td>
          <td class="F" name="F111500" id="F111500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M113000" id="M113000">&nbsp;</td>
          <td class="T" name="T113000" id="T113000">&nbsp;</td>
          <td class="W" name="W113000" id="W113000">&nbsp;</td>
          <td class="J" name="J113000" id="J113000">&nbsp;</td>
          <td class="F" name="F113000" id="F113000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M114500" id="M114500">&nbsp;</td>
          <td class="T" name="T114500" id="T114500">&nbsp;</td>
          <td class="W" name="W114500" id="W114500">&nbsp;</td>
          <td class="J" name="J114500" id="J114500">&nbsp;</td>
          <td class="F" name="F114500" id="F114500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>




        <tr>
          <td class="time" rowspan="4" scope="row"><span class>12:00</span>&nbsp;</td>
          <td class="M" name="M120000" id="M120000">&nbsp;</td>
          <td class="T" name="T120000" id="T120000">&nbsp;</td>
          <td class="W" name="W120000" id="W120000">&nbsp;</td>
          <td class="J" name="J120000" id="J120000">&nbsp;</td>
          <td class="F" name="F120000" id="F120000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
		      <td class="sunday">&nbsp;</td>
        </tr>
         <tr>
          <td class="M" name="M121500" id="M121500">&nbsp;</td>
          <td class="T" name="T121500" id="T121500">&nbsp;</td>
          <td class="W" name="W121500" id="W121500">&nbsp;</td>
          <td class="J" name="J121500" id="J121500">&nbsp;</td>
          <td class="F" name="F121500" id="F121500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
         <tr>
          <td class="M" name="M123000" id="M123000">&nbsp;</td>
          <td class="T" name="T123000" id="T123000">&nbsp;</td>
          <td class="W" name="W123000" id="W123000">&nbsp;</td>
          <td class="J" name="J123000" id="J123000">&nbsp;</td>
          <td class="F" name="F123000" id="F123000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
         <tr>
          <td class="M" name="M124500" id="M124500">&nbsp;</td>
          <td class="T" name="T124500" id="T124500">&nbsp;</td>
          <td class="W" name="W124500" id="W124500">&nbsp;</td>
          <td class="J" name="J124500" id="J124500">&nbsp;</td>
          <td class="F" name="F124500" id="F124500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>




        <tr>
          <td class="time" rowspan="4" scope="row"><span class>13:00</span>&nbsp;</td>
          <td class="M" name="M130000" id="M130000">&nbsp;</td>
          <td class="T" name="T130000" id="T130000">&nbsp;</td>
          <td class="W" name="W130000" id="W130000">&nbsp;</td>
          <td class="J" name="J130000" id="J130000">&nbsp;</td>
          <td class="F" name="F130000" id="F130000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
		      <td class="sunday">&nbsp;</td>
        </tr>
          <tr>
          <td class="M" name="M131500" id="M131500">&nbsp;</td>
          <td class="T" name="T131500" id="T131500">&nbsp;</td>
          <td class="W" name="W131500" id="W131500">&nbsp;</td>
          <td class="J" name="J131500" id="J131500">&nbsp;</td>
          <td class="F" name="F131500" id="F131500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
          <tr>
          <td class="M" name="M133000" id="M133000">&nbsp;</td>
          <td class="T" name="T133000" id="T133000">&nbsp;</td>
          <td class="W" name="W133000" id="W133000">&nbsp;</td>
          <td class="J" name="J133000" id="J133000">&nbsp;</td>
          <td class="F" name="F133000" id="F133000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
          <tr>
          <td class="M" name="M134500" id="M134500">&nbsp;</td>
          <td class="T" name="T134500" id="T134500">&nbsp;</td>
          <td class="W" name="W134500" id="W134500">&nbsp;</td>
          <td class="J" name="J134500" id="J134500">&nbsp;</td>
          <td class="F" name="F134500" id="F134500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>




        <tr>
          <td class="time" rowspan="4" scope="row"><span class>14:00</span>&nbsp;</td>
          <td class="M" name="M140000" id="M140000">&nbsp;</td>
          <td class="T" name="T140000" id="T140000">&nbsp;</td>
          <td class="W" name="W140000" id="W140000">&nbsp;</td>
          <td class="J" name="J140000" id="J140000">&nbsp;</td>
          <td class="F" name="F140000" id="F140000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
         <tr>
          <td class="M" name="M141500" id="M141500">&nbsp;</td>
          <td class="T" name="T141500" id="T141500">&nbsp;</td>
          <td class="W" name="W141500" id="W141500">&nbsp;</td>
          <td class="J" name="J141500" id="J141500">&nbsp;</td>
          <td class="F" name="F141500" id="F141500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
         <tr>
          <td class="M" name="M143000" id="M143000">&nbsp;</td>
          <td class="T" name="T143000" id="T143000">&nbsp;</td>
          <td class="W" name="W143000" id="W143000">&nbsp;</td>
          <td class="J" name="J143000" id="J143000">&nbsp;</td>
          <td class="F" name="F143000" id="F143000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
         <tr>
          <td class="M" name="M144500" id="M144500">&nbsp;</td>
          <td class="T" name="T144500" id="T144500">&nbsp;</td>
          <td class="W" name="W144500" id="W144500">&nbsp;</td>
          <td class="J" name="J144500" id="J144500">&nbsp;</td>
          <td class="F" name="F144500" id="F144500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>




        <tr>
          <td class="time" rowspan="4" scope="row"><span class>15:00</span>&nbsp;</td>
          <td class="M" name="M150000" id="M150000">&nbsp;</td>
          <td class="T" name="T150000" id="T150000">&nbsp;</td>
          <td class="W" name="W150000" id="W150000">&nbsp;</td>
          <td class="J" name="J150000" id="J150000">&nbsp;</td>
          <td class="F" name="F150000" id="F150000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
         <tr>
          <td class="M" name="M151500" id="M151500">&nbsp;</td>
          <td class="T" name="T151500" id="T151500">&nbsp;</td>
          <td class="W" name="W151500" id="W151500">&nbsp;</td>
          <td class="J" name="J151500" id="J151500">&nbsp;</td>
          <td class="F" name="F151500" id="F151500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
         <tr>
          <td class="M" name="M153000" id="M153000">&nbsp;</td>
          <td class="T" name="T153000" id="T153000">&nbsp;</td>
          <td class="W" name="W153000" id="W153000">&nbsp;</td>
          <td class="J" name="J153000" id="J153000">&nbsp;</td>
          <td class="F" name="F153000" id="F153000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
         <tr>
          <td class="M" name="M154500" id="M154500">&nbsp;</td>
          <td class="T" name="T154500" id="T154500">&nbsp;</td>
          <td class="W" name="W154500" id="W154500">&nbsp;</td>
          <td class="J" name="J154500" id="J154500">&nbsp;</td>
          <td class="F" name="F154500" id="F154500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>





        <tr>
          <td class="time" rowspan="4" scope="row"><span class>16:00</span>&nbsp;</td>
          <td class="M" name="M160000" id="M160000">&nbsp;</td>
          <td class="T" name="T160000" id="T160000">&nbsp;</td>
          <td class="W" name="W160000" id="W160000">&nbsp;</td>
          <td class="J" name="J160000" id="J160000">&nbsp;</td>
          <td class="F" name="F160000" id="F160000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M161500" id="M161500">&nbsp;</td>
          <td class="T" name="T161500" id="T161500">&nbsp;</td>
          <td class="W" name="W161500" id="W161500">&nbsp;</td>
          <td class="J" name="J161500" id="J161500">&nbsp;</td>
          <td class="F" name="F161500" id="F161500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M163000" id="M163000">&nbsp;</td>
          <td class="T" name="T163000" id="T163000">&nbsp;</td>
          <td class="W" name="W163000" id="W163000">&nbsp;</td>
          <td class="J" name="J163000" id="J163000">&nbsp;</td>
          <td class="F" name="F163000" id="F163000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M164500" id="M164500">&nbsp;</td>
          <td class="T" name="T164500" id="T164500">&nbsp;</td>
          <td class="W" name="W164500" id="W164500">&nbsp;</td>
          <td class="J" name="J164500" id="J164500">&nbsp;</td>
          <td class="F" name="F164500" id="F164500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>




        <tr>
          <td class="time" rowspan="4" scope="row"><span class>17:00</span>&nbsp;</td>
          <td class="M" name="M170000" id="M170000">&nbsp;</td>
          <td class="T" name="T170000" id="T170000">&nbsp;</td>
          <td class="W" name="W170000" id="W170000">&nbsp;</td>
          <td class="J" name="J170000" id="J170000">&nbsp;</td>
          <td class="F" name="F170000" id="F170000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M171500" id="M171500">&nbsp;</td>
          <td class="T" name="T171500" id="T171500">&nbsp;</td>
          <td class="W" name="W171500" id="W171500">&nbsp;</td>
          <td class="J" name="J171500" id="J171500">&nbsp;</td>
          <td class="F" name="F171500" id="F171500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M173000" id="M173000">&nbsp;</td>
          <td class="T" name="T173000" id="T173000">&nbsp;</td>
          <td class="W" name="W173000" id="W173000">&nbsp;</td>
          <td class="J" name="J173000" id="J173000">&nbsp;</td>
          <td class="F" name="F173000" id="F173000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M174500" id="M174500">&nbsp;</td>
          <td class="T" name="T174500" id="T174500">&nbsp;</td>
          <td class="W" name="W174500" id="W174500">&nbsp;</td>
          <td class="J" name="J174500" id="J174500">&nbsp;</td>
          <td class="F" name="F174500" id="F174500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>




        <tr>
          <td class="time" rowspan="4" scope="row"><span class>18:00</span>&nbsp;</td>
          <td class="M" name="M180000" id="M180000">&nbsp;</td>
          <td class="T" name="T180000" id="T180000">&nbsp;</td>
          <td class="W" name="W180000" id="W180000">&nbsp;</td>
          <td class="J" name="J180000" id="J180000">&nbsp;</td>
          <td class="F" name="F180000" id="F180000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M181500" id="M181500">&nbsp;</td>
          <td class="T" name="T181500" id="T181500">&nbsp;</td>
          <td class="W" name="W181500" id="W181500">&nbsp;</td>
          <td class="J" name="J181500" id="J181500">&nbsp;</td>
          <td class="F" name="F181500" id="F181500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M183000" id="M183000">&nbsp;</td>
          <td class="T" name="T183000" id="T183000">&nbsp;</td>
          <td class="W" name="W183000" id="W183000">&nbsp;</td>
          <td class="J" name="J183000" id="J183000">&nbsp;</td>
          <td class="F" name="F183000" id="F183000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M184500" id="M184500">&nbsp;</td>
          <td class="T" name="T184500" id="T184500">&nbsp;</td>
          <td class="W" name="W184500" id="W184500">&nbsp;</td>
          <td class="J" name="J184500" id="J184500">&nbsp;</td>
          <td class="F" name="F184500" id="F184500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>




        <tr>
          <td class="time" rowspan="4" scope="row"><span class>19:00</span>&nbsp;</td>
          <td class="M" name="M190000" id="M190000">&nbsp;</td>
          <td class="T" name="T190000" id="T190000">&nbsp;</td>
          <td class="W" name="W190000" id="W190000">&nbsp;</td>
          <td class="J" name="J190000" id="J190000">&nbsp;</td>
          <td class="F" name="F190000" id="F190000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M191500" id="M191500">&nbsp;</td>
          <td class="T" name="T191500" id="T191500">&nbsp;</td>
          <td class="W" name="W191500" id="W191500">&nbsp;</td>
          <td class="J" name="J191500" id="J191500">&nbsp;</td>
          <td class="F" name="F191500" id="F191500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M193000" id="M193000">&nbsp;</td>
          <td class="T" name="T193000" id="T193000">&nbsp;</td>
          <td class="W" name="W193000" id="W193000">&nbsp;</td>
          <td class="J" name="J193000" id="J193000">&nbsp;</td>
          <td class="F" name="F193000" id="F193000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M194500" id="M194500">&nbsp;</td>
          <td class="T" name="T194500" id="T194500">&nbsp;</td>
          <td class="W" name="W194500" id="W194500">&nbsp;</td>
          <td class="J" name="J194500" id="J194500">&nbsp;</td>
          <td class="F" name="F194500" id="F194500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>





        <tr>
          <td class="time" rowspan="4" scope="row"><span class>20:00</span>&nbsp;</td>
          <td class="M" name="M200000" id="M200000">&nbsp;</td>
          <td class="T" name="T200000" id="T200000">&nbsp;</td>
          <td class="W" name="W200000" id="W200000">&nbsp;</td>
          <td class="J" name="J200000" id="J200000">&nbsp;</td>
          <td class="F" name="F200000" id="F200000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M201500" id="M201500">&nbsp;</td>
          <td class="T" name="T201500" id="T201500">&nbsp;</td>
          <td class="W" name="W201500" id="W201500">&nbsp;</td>
          <td class="J" name="J201500" id="J201500">&nbsp;</td>
          <td class="F" name="F201500" id="F201500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M203000" id="M203000">&nbsp;</td>
          <td class="T" name="T203000" id="T203000">&nbsp;</td>
          <td class="W" name="W203000" id="W203000">&nbsp;</td>
          <td class="J" name="J203000" id="J203000">&nbsp;</td>
          <td class="F" name="F203000" id="F203000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M204500" id="M204500">&nbsp;</td>
          <td class="T" name="T204500" id="T204500">&nbsp;</td>
          <td class="W" name="W204500" id="W204500">&nbsp;</td>
          <td class="J" name="J204500" id="J204500">&nbsp;</td>
          <td class="F" name="F204500" id="F204500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>






        <tr>
          <td class="time" rowspan="4" scope="row"><span class>21:00</span>&nbsp;</td>
          <td class="M" name="M210000" id="M210000">


	&nbsp;</td>
          <td class="T" name="T210000" id="T210000">&nbsp;</td>
          <td class="W" name="W210000" id="W210000">&nbsp;</td>
          <td class="J" name="J210000" id="J210000">&nbsp;</td>
          <td class="F" name="F210000" id="F210000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M211500" id="M211500">&nbsp;</td>
          <td class="T" name="T211500" id="T211500">&nbsp;</td>
          <td class="W" name="W211500" id="W211500">&nbsp;</td>
          <td class="J" name="J211500" id="J211500">&nbsp;</td>
          <td class="F" name="F211500" id="F211500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M213000" id="M213000">&nbsp;</td>
          <td class="T" name="T213000" id="T213000">&nbsp;</td>
          <td class="W" name="W213000" id="W213000">&nbsp;</td>
          <td class="J" name="J213000" id="J213000">&nbsp;</td>
          <td class="F" name="F213000" id="F213000">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>
        <tr>
          <td class="M" name="M214500" id="M214500">&nbsp;</td>
          <td class="T" name="T214500" id="T214500">&nbsp;</td>
          <td class="W" name="W214500" id="W214500">&nbsp;</td>
          <td class="J" name="J214500" id="J214500">&nbsp;</td>
          <td class="F" name="F214500" id="F214500">&nbsp;</td>
          <td class="saturday">&nbsp;</td>
          <td class="sunday">&nbsp;</td>
        </tr>


      </table>

	</div>
      </div>
	    </div>
	</div>
	</div>

 <script>


//var test = 	<?php echo json_encode($userSched->getListOfSemesters()); ?>

//alert(test[4][0][0]);


	$(document).ready(function(){
	var i = 1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><select name="Days"><option value="Monday">Monday</option><option value="Tuesday">Tuesday</option><option value="Wednesday">Wednesday</option><option value="Thursday">Thursday</option><option value="Friday">Friday</option><option value="Saturday">Saturday</option><option value="Sunday">Sunday</option></select>&nbsp;</td><td><input type="time" id="starting'+i+'" name="starting'+i+'">&nbsp;</td><td><input type="time" id="ending'+i+'" name="ending'+i+'">&nbsp;</td><td><button name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button>&nbsp;</td></tr>');
	});
	$(document).on('click','.btn_remove',function(){
		var button_id = $(this).attr("id");
		$("#row"+button_id+'').remove();
	});

});
//var test = 	<?php echo json_encode($userSched->getListOfSemesters()); ?>


function getTime(time){
var Tempa=parseInt(time/10000);
var Tempb=parseInt((time-Tempa*10000)/100);
if (Tempa<10)
  Tempa ='0'+String(Tempa);
if (Tempb==0)
    Tempb='00';
return Tempa + ":" + Tempb;
}

function modTime(time){
var Temp = parseInt((time%10000)/100);

if (0<=Temp && Temp<15)
    Temp='00';
else if(15<=Temp && Temp<30)
	Temp='15';
else if(30<=Temp && Temp<45)
	Temp='30';
else if(45<=Temp && Temp<60)
	Temp='45';
else if(60<=Temp)
	Temp='00';

return Temp;

}
 createLecNew();

function createLecNew() {
  var jsLec=JSON.parse('<?php echo json_encode($userSched->getListOfSemesters()[0]->getMyLecs())?>');
  for (x in jsLec){

        var title = jsLec[x]['day'][0];
        var fromTimeHour = jsLec[x]['startTime'];
        var toTimeHour= jsLec[x]['endTime'];
        var courseName= jsLec[x]['courseName'];
        var courseSection= jsLec[x]['section'];
        var courseSubSection=jsLec[x]['subsection'];
        var StartHour = parseInt(fromTimeHour/10000);
        var StartMinute = parseInt((fromTimeHour%10000)/100);
        var EndHour = parseInt(toTimeHour/10000);
        var EndMinute = parseInt((toTimeHour%10000)/100);
        var a=getTime(fromTimeHour);
        var b=getTime(toTimeHour);
		var c=modTime(StartMinute);
        document.getElementById(title + fromTimeHour).innerHTML=(courseSection + '<br>' + "Lecture" + '<br>' + a + '&nbsp;' + "~" + '&nbsp;' + b);
        document.getElementById(title + fromTimeHour).rowSpan =(EndHour-StartHour)*4+(EndMinute-StartMinute)/15;
        document.getElementById(title + fromTimeHour).style = " color:rgb(0,0,0);background-color:rgb(102, 255, 153);text-align: center;opacity: 0.8;";
var tempTime=parseInt(fromTimeHour);
for (var i=1;i<document.getElementById(title + fromTimeHour).rowSpan;i++)
{
tempTime=tempTime+1500;
if((tempTime%10000)%6000==0)
tempTime=tempTime+4000;
if(tempTime<100000)
	document.getElementById(title+'0'+tempTime).style.display="none";
else
	document.getElementById(title+tempTime).style.display="none";
}
}
}
 createTutNew();

function createTutNew() {
    var jsTut=JSON.parse('<?php echo json_encode($userSched->getListOfSemesters()[0]->getMyTuts())?>')
    for (x in jsTut)
    {            var title = jsTut[x]['day'][0];
                var fromTimeHour = jsTut[x]['startTime'];
                var toTimeHour= jsTut[x]['endTime'];
                var courseName= jsTut[x]['courseName'];
                var courseSection= jsTut[x]['section'];
                var courseSubSection=jsTut[x]['subsection'];
                var StartHour = parseInt(fromTimeHour/10000);
                var StartMinute = parseInt((fromTimeHour%10000)/100);
                var EndHour = parseInt(toTimeHour/10000);
                var EndMinute = parseInt((toTimeHour%10000)/100);
        var a=getTime(fromTimeHour);
        var b=getTime(toTimeHour);       
		var c=modTime(StartMinute);
   
   document.getElementById(title + fromTimeHour).innerHTML=(courseName + "-" + courseSubSection + '<br>' + "Tutorial" + '<br>' + a + '&nbsp;' + "~" + '&nbsp;' + b);
    document.getElementById(title + fromTimeHour).rowSpan =(EndHour-StartHour)*4+(EndMinute-StartMinute)/15;
    document.getElementById(title + fromTimeHour).style = " color:rgb(0,0,0);background-color:rgb(153, 204, 255);text-align: center;opacity: 0.8;";
   /* alert(fromTimeHour);
      alert(StartMinute);
    alert(EndHour);
    alert(EndMinute);*/

  var tempTime=parseInt(fromTimeHour);
    for (var i=1;i<document.getElementById(title + fromTimeHour).rowSpan;i++)
    {
    tempTime=tempTime+1500;
    if((tempTime%10000)%6000==0)
    tempTime=tempTime+4000;
    if(tempTime<100000)
    	document.getElementById(title+'0'+tempTime).style.display="none";
    else
    	document.getElementById(title+tempTime).style.display="none";
    }
  }
}

createLabNew();
function createLabNew() {
    var jsLab=JSON.parse('<?php echo json_encode($userSched->getListOfSemesters()[0]->getMyLabs())?>')
    for (x in jsLab)
    {            var title = jsLab[x]['day'][0];
                var fromTimeHour = jsLab[x]['startTime'];
                var toTimeHour= jsLab[x]['endTime'];
                var courseName= jsLab[x]['courseName'];
                var courseSection= jsLab[x]['section'];
                var courseSubSection=jsLab[x]['subsection'];
                var StartHour = parseInt(fromTimeHour/10000);
                var StartMinute = parseInt((fromTimeHour%10000)/100);
                var EndHour = parseInt(toTimeHour/10000);
                var EndMinute = parseInt((toTimeHour%10000)/100);
        var a=getTime(fromTimeHour);
        var b=getTime(toTimeHour);       
    document.getElementById(title + fromTimeHour).innerHTML=(courseName + "-" + courseSubSection + '<br>' + "Laboratory" + '<br>' + a + '&nbsp;' + "~" + '&nbsp;' + b);
    document.getElementById(title + fromTimeHour).rowSpan =(EndHour-StartHour)*4+(EndMinute-StartMinute)/15;
    document.getElementById(title + fromTimeHour).style = " color:rgb(0,0,0);background-color:rgb(255, 153, 51);text-align: center;opacity: 0.8;";
    alert(title+fromTimeHour);
	var tempTime=parseInt(fromTimeHour);
    for (var i=1;i<document.getElementById(title + fromTimeHour).rowSpan;i++)
    {
    tempTime=tempTime+1500;
    if((tempTime%10000)%6000==0)
    tempTime=tempTime+4000;
    if(tempTime<100000)
    	document.getElementById(title+'0'+tempTime).style.display="none";
    else
    	document.getElementById(title+tempTime).style.display="none";
    }
  }
}
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 	</body>
</html>
