<!DOCTYPE html>
<html>


<?php

obj = { table: "Registration", limit: 20 };
dbParam = JSON.stringify(obj);
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    myObj = JSON.parse(this.responseText);
    txt += "<table border='1'>"
    for (x in myObj) {
      txt += "<tr><td>" + myObj[x].name + "</td></tr>";
    }
    txt += "</table>"
    document.getElementById("demo").innerHTML = txt;
  }
}
xmlhttp.open("POST", "json_demo_db_post.php", true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("x=" + dbParam);
<select id="myselect" onchange="change_myselect(this.value)">
  <option value="Name">Name:</option>
  <option value="Email">Email:</option>
  <option value="User Name">User Name:</option>
  <option value="Password">Password:</option>
  <option value="Confirm password">Confirm Password:</option>
   <option value="Gender">Gender:</option>
  <option value="male/female/other">male/female/other:</option>
  <option value="Confirm password">Confirm Password:</option>
  <option value="Date of Birth">Date of Birth:</option>
  <option value="Submit/Reset">Submit/Reset:</option>
  
</select>

<script>
function change_myselect(Registration) {
  var obj, dbParam, xmlhttp, myObj, x, txt = "";
  obj = { table: Registration, limit: 20 };
  dbParam = JSON.stringify(obj);
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myObj = JSON.parse(this.responseText);
      txt += "<table border='1'>"
      for (x in myObj) {
        txt += "<tr><td>" + myObj[x].name + "</td></tr>";
      }
      txt += "</table>"
      document.getElementById("demo").innerHTML = txt;
    }
  };
  xmlhttp.open("POST", "json_demo_html_table.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("x=" + dbParam);
}
</script>
