<?php include("header.php") ?>
<html>
    <head>
        <title>Global kitchen</title>
        <script>
           //select states
           var states = new Array();
             
           states['India'] = new Array('Gujarat','Maharastra','West Bengal');
           states['Canada'] = new Array('Ontario','Manitoba','Nova Scotia');
           states['Australia'] = new Array('Victoria','Tasmania','New south wales');
           states['USA'] = new Array('California','Texas','Washington');

           //select city
           var cities = new Array();

           cities['India'] = new Array();
           cities['India']['Gujarat'] = new Array('Ahmedabad','Rajkot','Junagadh');
           cities['India']['Maharastra'] = new Array('Mumbai','Pune','Nashik');
           cities['India']['West Bengal'] = new Array('Kolkata','Kalyani','Asansol');

           cities['Australia'] = new Array();
           cities['Australia']['Victoria'] = new Array('Melbourne','Sunbury','Wallan');
           cities['Australia']['Tasmania'] = new Array('Brandon','Morden','Altona');
           cities['Australia']['New south wales'] = new Array('Albury',' Broken hill');
 
           cities['Canada'] = new Array();
           cities['Canada']['Ontario'] = new Array('Toronto','London','Ottawa');
           cities['Canada']['Manitoba'] = new Array('Victoria','Vancouver');
           cities['Canada']['Nova Scotia'] = new Array('Truro','Liverpool','Digby');

           cities['USA'] = new Array();
           cities['USA']['California'] = new Array('Los Angeles','San Jose','Stockton');
           cities['USA']['Texas'] = new Array('Austin','Houston','Lubbock');
           cities['USA']['Washington'] = new Array('Seattle','Olympia','Tacoma');

           function setstate(){
             cntrysel=document.getElementById('country');
             statelist=states[cntrysel.value];
             changeSelect('state',statelist,statelist);
             setcities();
           }

           function setcities() {
             cntrySel = document.getElementById('country');
             stateSel = document.getElementById('state');
             cityList = cities[cntrySel.value][stateSel.value];
             changeSelect('city', cityList, cityList);
           }

           function changeSelect(fieldID, newOptions, newValues) {
               selectField = document.getElementById(fieldID);
               selectField.options.length = 0;
               for (i=0; i<newOptions.length; i++) {
                     selectField.options[selectField.length] = new Option(newOptions[i], newValues[i]);
               }
            }
 
            function addLoadEvent(func) {
              var oldonload = window.onload;
              if (typeof window.onload != 'function') {
                window.onload = func;
              } else {
                window.onload = function() {
                if (oldonload) {
                   oldonload();
                }
              func();
              }
            }
           }
 
           addLoadEvent(function() {
           setstate();
          });
           </script>
    </head>
    <body><br><br>
        <form action="registrationcon.php" method="post">
            <table border="3" align="center" width="50%">
               <tr>
                  <th colspan="3"><h3>********Create Your Account**********</h3><th>
               </tr>
               <tr>
                  <td>First Name</td>
                  <td colspan="2"><input type="text" id='fnm' name="fnm"></td>
               </tr>
               <tr>
                  <td>Last Name</td>
                  <td><input type="text" name="lnm"></td>
               </tr>
               <tr>
                  <td>Address</td>
                  <td><textarea name="address"></textarea></td>
               </tr>
               <tr>
                  <td>Country</td>
                  <td><select name="country" id="country" onchange="setstate();">
                     <option>India</option>
                     <option>Canada</option>
                     <option>USA</option>
                     <option>Australia</option>
                  </select></td>
               </tr>
               <tr>
                  <td>State</td>
                  <td><select name="state" id="state" onchange="setcities();">
                     <option>select state</option>
                  </select></td>
               </tr>
               <tr>
                  <td>City</td>
                  <td><select name="city" id="city">
                     <option value="">select city</option>
                  </select></td>
               </tr>
               <tr>
                  <td>Date of Birth</td>
                  <td><input type="text" name="dob"></td>
               </tr>
               <tr>
                  <td>Gender</td>
                  <td><input type="radio" name="gender">Male
                  <input type="radio" name="gender">Female
                  </td>
               </tr>
               <tr>
                  <td>Mobile no.</td>
                  <td><select>
                     <option>+91</option>
                     <option>+78</option>
                     <option>+61</option>
                  </select>
                  <input type="text" name="mno"></td>
               </tr>
               <tr>
                  <td>Email</td>
                  <td><input type="text" name="email"></td>
               </tr>
               <tr>
                  <td>Username</td>
                  <td><input type="text" name="unm"></td>
               </tr>
               <tr>
                  <td>Password</td>
                  <td><input type="Password" name="password"></td>
               </tr>
               <tr colspan="2">
                <td><input type="submit" name="submit" value="submit" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill"></td>
               </tr>
            </table>
        </form>
    </body>
</html>
<?php include("footer.php") ?>