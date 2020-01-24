<!doctype>
<html>
    <head>
        </title>Lab 04 Act 02 Registration</title>
        <style>
            .textBoxes{
                width:80%;
                padding: 12px 20px;
                margin: 8px 0px;
                background-color: #FFFFFF;
                border-style: double;
                border-color:lightgrey;
                border-radius: 10px;
            }
            
            .btn{
                width:80%;
                padding: 12px 20px;
                margin: 8px 0px;
                background-color:#008080;
                color: white;
                border-radius: 10px;
            }
          div{
              width: 30%;
              padding: 12px 0px;
              font-family:cursive;
              background-color: white;
          }
          h1{
            color: #000050

          }
          body{
            background-color: darkcyan;
          }
        </style>
    </head>
    <body>
    <form method="POST" action="Registered.php" enctype="multipart/form-data" >
      <center> <div>
        <h1> Registeration Form </h1>
        <input class="textBoxes" type="text" name="uname" placeholder="Username" required /><br />
        <input class="textBoxes" type="email" name="em" placeholder="Email" required/><br />
        <input class="textBoxes" type="password" name="pass" placeholder="Password" required/><br />
        Date of Birth<input type="date" name="dob" /><br/>
        Gender
        <input type="radio" name="gender" value="male" style="width:20"/>Male
        <input type="radio" name="gender" value="female" style="width:20"/>Female <br/>
        Image: <input type="file" name="pic">
        <input class="btn" type="submit" value="Signup" name="signup">    
        </div></form>
        </center>
</body>
</html>