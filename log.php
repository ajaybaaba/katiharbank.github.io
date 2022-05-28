 <style>
      
       body{margin: 0; padding: 0;
        font-family: sans-serif; background:url(images/logbg.jpg) 0 0 no-repeat; background-size:cover;}
        .login-box{
            width: 280px;
            margin:0 auto;
            color: white;
			    padding: 200px 0;
        }
        .login-box h1{
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
        .textbox i{width: 26px;
            float: left;
            text-align: center;
            
        }
        .textbox input{border: none;
            outline: none;
            background: none;
            color:white;
            font-size: 18px;
            width: 80px;
            float: left;
            margin: 0 10px;
        }
        .sub{width: 100%;
            background:red;
            border: 2px solid red;
        color: white; padding: 5px;
        font-size: 18px;
        cursor: pointer;
        
        }
        .sub:hover{background-color: green;}
    
    </style>
    <body>
      <form action="ragister.php" method="post">
    <div class="login-box">
        <h1>Portal Login</h1>
        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder  ="Username" name="n" value="">
        </div>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder ="password" name="p" value="">
        </div>
        <input class="sub" type="submit" name="" value="Sign Up">
        </div>
		  </form>
    