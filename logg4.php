 <style>
      
      body{margin: 0; padding: 0;
        font-family: sans-serif; background:url("images/logbg.jpg") 0 0 no-repeat; background-size:cover;}
        .login1-box{
            width: 300px;
            margin:0 auto;
            color: white;
			    padding: 120px 0;
        }
        .login1-box h1{
            float: left;
            font-size: 40px;
            border-bottom: 6px solid red;
            margin-bottom: 50px;
            padding: 13px 0;
        }
        .textbox{width: 100%;
                overflow: hidden;
            font-size: 20px;
            padding: 8px 0;
            margin: 8px 0;
            border-bottom: 1px solid red;
        
        }
        .textbox i{width: 30px;
            float: left;
              								
            color: rebeccapurple;;
			margin-right: 15px;
			line-height:normal;
			font-size: 25px;
        }
        .textbox input{border: none;
            outline: none;
            background: none;
            color:white;
            font-size: 18px;
            width: 80px;
            float: left;
            margin: 3px -9px;
        }
        .sub{width: 26%;
            background:red;
            border: 2px solid red;
        color: white; padding: 7px;
        font-size: 18px;
        cursor: pointer;
			float: right;
			margin: 11px;
        
        }
        .sub:hover{background-color: green;}
	 .textbox a{font-family: bold; font-size: 30px; text-decoration: none;color: aliceblue;}
	 .textbox a:hover{color: #FF0000;}
	 .textbox p{font-family: bold; font-size: 30px;margin: 0px;}
	 .textbox1 p{font-family: bold; font-size: 30px;margin: 0px;}
	 .textbox1 input{margin-right: 10px;}
	 .textbox1 h3{margin: 4px;}
    </style>
    <body>
      <form action="ihav.php" method="">
    <div class="login1-box">
        
        <div class="textbox">
			<p> User Id</p></br>
			<i class="fa fa-user" aria-hidden="true"></i> <input type="text" name="email" placeholder="Email">
       
        </div>
        <div class="textbox">
			<p> Password</p></br>
			<i class="fa fa-lock" aria-hidden="true"></i><input type="text" name="pass" placeholder="Password">
			
        </div>
		 <div class="textbox1">
			 <p> Gender</p></br>
             <h3><input type="radio" name="gender" male>male
<input type="radio" name="gender" female>female</h3>	
        </div>
<input class="sub" type="submit" name="forget" value="forgot">
<input class="sub" type="reset" name="cancel" value="cancel">
<input class="sub" type="submit" name="login" value="Login">



      </div>
</form>
    