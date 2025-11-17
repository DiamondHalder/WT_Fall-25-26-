<!DOCTYPE html>
<html>
    <head>
        <title>
            Registrarion</title>
    </head>
     <body>
        <h1 align="center">Participant Registration</h1>
        <div>
           Full Name: <br>
           <input type="text" id="name"> <br>
            Email: <br>
            <input type="text" id="email"><br>
            Phone Number: <br>
            <input type="number" id="number"><br>
            Password: <br>
            <input type="password" id="password"><br>
            Confirm Password: <br>
            <input type="password" id="cpassword"><br>
            <button type="submit">Register </button>

        </div>
        <div id="error"></div>
        <div id="output"></div>
        
        <div id="activity">
            Activity Name: <br>
            <input type="text" id="activity"> <br>
            <button type="submit">Add Activity</button>

            <div id="activitylist"></div>
        </div>


     </body>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            padding: 30px;
            background-color:aqua ;
        }
        
    </style>
    
</html>