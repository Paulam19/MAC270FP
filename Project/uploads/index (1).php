<?php
$conn = mysqli_connect("localhost","root","","project270");
        if($conn === false)
        { 
            die("Connection failed".mysqli_connect_error($conn));     
        }
?>
<html>
<head>
    <title>Ex credit</title>
    <link rel = "stylesheet" type = "text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
    </head>
    
    <body>
        <div id  = "naviBar">
            <h1>LaGuardia Community College</h1>
            <form>
            Project ID#
            <select formaction="retrieve.php">
                <option value=""></option>
                <?php
                $sql = mysqli_query($conn, "SELECT proj_id FROM tblproject GROUP BY proj_id");
                while ($row = $sql->fetch_assoc()){
                    echo "<option value=\"user1\">" . $row['proj_id'] . "</option>";
                }
                ?>
            </select>
            Project Name: 
            <select formaction="retrieve.php">
                <option value=""></option>
                <?php
                $sql = mysqli_query($conn, "SELECT proj_name FROM tblproject GROUP BY proj_name");
                while ($row = $sql->fetch_assoc()){
                    echo "<option value=\"user1\">" . $row['proj_name'] . "</option>";
                }
                ?>
                </select>
            Project building: 
            <select>
                <option value=""></option>
                <?php
                $sql = mysqli_query($conn, "SELECT proj_building FROM tblproject GROUP BY proj_building");
                while ($row = $sql->fetch_assoc()){
                    echo "<option value=\"user1\">" . $row['proj_building'] . "</option>";
                }
                ?>
            </select>
            Project Status: 
            <select>
                <option value = ""></option>
                <?php
                $sql = mysqli_query($conn, "SELECT proj_status FROM tblproject GROUP BY proj_status");
                while ($row = $sql->fetch_assoc()){
                    echo "<option value=\"user1\">" . $row['proj_status'] . "</option>";
                }
                ?>
            </select>
            </form>
        </div>
                    
        <form action="post.php" method="post"> 
        <div class = "formRight">
            <label>Priority Level: </label>
            <select name="priorityLevel">
                <option value=""></option>
                <option value="general">General</option>
                 <option value="Urgent">Urgenr</option>
                <option value="Extremely Urgent">Extremely Urgent</option>
                </select><br>
            <label>Building:</label>
            <select name="building">
                <option value=""></option>
                <option value="E">E</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select><br>
            <label>Location:</label>
            <input type="text" name="location"><br>
            <label>Service Provided:</label>  
            <select name="servicePro">
                <option value=""></option>
                <option value="window">Window</option>
                <option value="Roof">Roof</option>
                <option value="paint">Paint</option>
                <option value="maintainance">Maintainance</option>

            </select><br>
            <label>Status:</label>
            <select name="status">               
                <option value="E"></option>
                <option value="UnderProcess">Under Process</option>
                <option value="Completed">Completed</option>

            </select><br>
            </div>
        
        <div class = "formRight"> 
        <table>
            <tr>
                <th scope="row"></th>
                <th scope="row"></th>
                <th scope="row">Amount</th>
                <th scope="row">Fy Received</th>
                <th scope="row">Contact Info</th>
            </tr>
            <tr>
                <th scope="col">Boro President:</th>
                <td><input type = "checkbox" name = "boroCheck"></td>
                <td><input type = "text" name="boroAm"></td>
                <td><input type = "text" name="boroFy"></td>
                <td><input type = "text" name="boroCont"></td>
            </tr>
            
            <tr>
                <th scope="col">City Council:</th>
                <td><input type = "checkbox" name = "citycheck"></td>
                <td><input type = "text" name="cityAm"></td>
                <td><input type = "text" name="cityFy"></td>
                <td><input type = "text" name="cityCont"></td>
            </tr>
            
            <tr>
                <th scope="col">Mayor:</th>
                <td><input type = "checkbox" name="mayorCheck"></td>
                <td><input type = "text" name="mayorAm"></td>
                <td><input type = "text" name="mayorFy"></td>
                <td><input type = "text" name="mayorCont"></td>
            </tr>
            
            <tr>
                <th scope="col">In House:</th>
                <td><input type = "checkbox" name="inCheck"></td>
                <td><input type = "text" name="inAm"></td>
                <td><input type = "text" name="inFy"></td>
                <td><input type = "text" name="inCont"></td>
            </tr>
            
            <tr>
                <th scope="col">Capital Project:</th>
                <td><input type = "checkbox" name="capitalCheck"></td>
                <td><input type = "text" name="capitalAm"></td>
                <td><input type = "text" name="capitalFy"></td>
                <td><input type = "text" name="capitalcont"></td>
            </tr>
            
            <tr>
                <th scope="col">CUNY 2020:</th>
                <td><input type = "checkbox" name="cunyCheck"></td>
                <td><input type = "text" name="cunyAm"></td>
                <td><input type = "text" name="cunyFy"></td>
                <td><input type = "text" name="cunyCont"></td>
            </tr>
            
            <tr>
                <th scope="col">SAM CCAP:</th>
                <td><input type = "checkbox" name="samCheck"></td>
                <td><input type = "text" name="samAm"></td>
                <td><input type = "text" name="samFy"></td>
                <td><input type = "text" name="samCont"></td>
            </tr>
            
            <tr>
                <th scope="col">Private Grant:</th>
                <td><input type = "checkbox" name="priCheck"></td>
                <td><input type = "text" name="priAm"></td>
                <td><input type = "text" name="priFy"></td>
                <td><input type = "text" name="priCont"></td>
            </tr>
            
            <tr>
                <th scope="col">Federal State:</th>
                <td><input type = "checkbox" name="fedCheck"></td>
                <td><input type = "text" name="fedAm"></td>
                <td><input type = "text" name="fedFy"></td>
                <td><input type = "text" name="fedCont"></td>
            </tr>
            
            <tr>
                <th scope="col">DCAS/Operating:</th>
                <td><input type = "checkbox" name="doCheck"></td>
                <td><input type = "text" name="doAm"></td>
                <td><input type = "text" name="doFy"></td>
                <td><input type = "text" name="doCont"></td>
            </tr>
            
            <tr>
                <th scope="col">DCAS/CAP:</th>
                <td><input type = "checkbox" name="dcCheckbox"></td>
                <td><input type = "text" name="dcAm"></td>
                <td><input type = "text" name="dcFy"></td>
                <td><input type = "text" name="dcCont"></td>
            </tr>
            
             <tr>
                <th scope="col">Energy Conservation:</th>
                <td><input type = "checkbox" name="energyCheck"></td>
                <td><input type = "text" name="energyAm"></td>
                <td><input type = "text" name="energyFy"></td>
                <td><input type = "text" name="energyCont"></td>
            </tr>
            </table>
        </div>
        
        
        
        
            <div class="formLeft">
                <label>Project Name:</label>
                
                <input type="text" name="projectName" value="$projName"><br>
                <label>Project#:</label> 
                <input type = "text" name="projectNum"><br>
                <label>Project Type:</label> <input type="text" name="projectType"><br>
                <label>Project Start Date:</label> 
                <input type="date" name = "projectStart"><br>
                <label>Completion date: </label>
                <input type = "date" name="completionDate"><br>
                <label>Design Team Cost: </label>
                <input type="text" name="designTeam"><br>

                <label>Design Cost:</label>
                <input type="text" name="designCost"><br>            
                <label>Construction cost:</label>
                <input type="text" name="constCost"><br>
                <label>FE Cost: </label>
                <input type="text" name = "fe"><br>
                <label>Management Cost: </label>
                <input type="text" name="manageCost"><br>
                <label>Total Cost:</label>
                <input type="text" name="totalCost"><br>
            </div>
            
            <div>
                Project Overview:<br>
                <textarea rows="4" cols="50" name="projectOverview"></textarea>
            </div>
        
            <input type="submit" value ="Save">
            <input type="submit" value="Clear">
        </form>
        
        
        <p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">London</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>

<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

    </body>
</html>