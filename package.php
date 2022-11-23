<HTML>
<HEAD><TITLE>PACKAGE DETAILS Entry/Edit</TITLE>
	<STYLE TYPE="text/css">
	.header1
	{
	  background-color:acileblue;
	  border: none;
	  color:white;
	  padding: 10px 16px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 20px;
	  width:100%;
	  font-family:Castellar;
	}
	#bg{
	    background-image: url("image/KBSP_IMG_2.png");
		background-position:center;
		background-repeat:no-repeat;
		
		background-size:1210px 870px;
	}
	.details{ 
		
		 background-color:rgb(216,191,216);
		 width:750px;
		 margin:auto;
		 border-radius:12px;
		 
		 }
	
	#para1 
	{
	  color:black;
	  margin-left:20px;	
	  text-align: center;
	  font-size:16px;
	  font-family:arial;
	  background-color: none;
	  border-style: dotted dashed;
	  width: 10%;
	  border: none;
	  border-radius: 5px;
	  
	}
	input[type=text] 
	{
	  border-radius:5px;
	  width: 25%;
	  height:30px;
	  
	}
    textarea
	{
	  border-radius:5px;
	  width: 50%;
	 }
	 input[type=date] 
	{
	  border-radius:5px;
	  width: 20%;
	  height:30px;
	  
	}
	number
	{
	  border-radius:5px;
	  width:40%;
	  height:30px;
	}
	 select {
      border-radius:5px;
	  width: 25%;
	  padding: 8px 10px;
	  border: none;
	  background-color: #f1f1f1;
	  }
	  
	 .button1
	{
	  background-color:lightyellow;
	  border: solid;
	  color:purple;
	  padding: 10px 25px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 14px;
	  border-radius: 4px;
	  
	}
	
	</STYLE>
</HEAD>
<BODY id="bg">
<?php include "admin_header.php" ?>
	<div class="header1"><b>PACKAGE DETAILS</b></div>
	 <div class="details">
	 
	   <form action="insert_data.php" method="POST">
		<!--p><label id="para1"> Package ID </label><br>
		<input type=text name=Package_ID id=Package_ID disabled >
		</p-->
		<p>
		<div align=center><label id="para1">Name of package</label><br>
		<input type=text name=Package_Name id=package_name placeholder="Enter name of Package" REQUIRED="REQUIRED" style="width:40%">
		</div>
		</p>
		<p>
		<div><label id="para1"  style="margin-left:170px">Place </label>
		<label id="para1" style="margin-left:140px">Source</label>
		<label id="para1" style="margin-left:120px">Destination</label></div>
		<div align=center><input type=text name=place id=Place placeholder="Enter tour place">
		<input type="text" name="Source" id="source" placeholder="Enter Source place" REQUIRED="REQUIRED">
		<input type="text" name="Destination" id="Destination" placeholder="Enter Destination place" REQUIRED="REQUIRED">
		</div>
		</p>
		
		<p>
		<div align=center> <label id="para1">Description</label><br>
		<textarea rows=4 cols=30 name=Package_Desc id=packdesc placeholder="Enter package description"></textarea>
		</div>
		</p>
		<p>
		<div><label id="para1" style="margin-left:200px">Start Date </label>
		<label id="para1" style="margin-left:90px">End Date </label>
		<label id="para1" style="margin-left:80px">Total Days </label>
		</div>
		<input type="date" name="Startdate" id="Startdate" placeholder="Enter start date" style="margin-left:170px;">
		<input type="date" name="Enddate" id="Enddate" placeholder="Enter end date" >
		<input type="number" name="Totaldays" id="totalday" placeholder="Enter total number of days">
		</p>
		<p>
		<div><label id="para1"  style="margin-left:170px">Tour Type </label>
		<label id="para1" style="margin-left:70px">Full Package Rate </label>
		<label id="para1"  style="margin-left:30px">Max Head Allowed</label></div>
		<select name="Tour_type" id="tourtype" REQUIRED="REQUIRED" placeholder="---SELECT---" style="margin-left:110px">
            <option value=""></option>
			<option value="Best Selling Holidays">Best Selling Holidays</option>
			<option value="Experimental Holidays">Experimental Holidays</option>
			<option value="Spiritual Tours">Spiritual Tours</option>
			<option value="Short Breaks">Short Breaks</option>
			<option value="Honeymoon Special">Honeymoon Special</option>
		</select>
		<input type="number" name="Full_pkg_rate" id="pkgrate" placeholder="Enter package rate per head">
		<input type="number" name="Max_Head_Allowed" id="maxhead" placeholder="Enter total heads allowed">
		</p>
		<p>
		<div align=center><button class=button1>insert</button>
		<a href="upnew1.php" class="button1">Update</a> 
		<a href="del12.php" class="button1">Delete</a>
		</div>
		</p>
		</form>	
		<div align=center><img src="image/tour_package.jpg" width=750 height=200></div>
      </div>
	  
	  
	</body>
</html>	
	
	

	