<!DOCTYPE html>

<html
 
lang="en">

<head>

  
<meta
 
charset="UTF-8">

  
<meta
 
name="viewport"
 
content="width=device-width, initial-scale=1.0">

  
<title>Call PHP Function</title>
  <script>
    function callPHPFunction() {
      const name = "Bard"; // Data to send
      const xhr = new XMLHttpRequest();

      xhr.open("POST", "functions.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.onload = function() {
        if (this.status === 200) {
          const response = this.responseText;
          document.getElementById("result").innerHTML = response;
        } else {
          document.getElementById("result").innerHTML = "Error: " + this.statusText;
        }
      };

      xhr.send("name=" + name);
    }
  </script>
</head>
<body>
  <h1>Call PHP Function</h1>
   <button onclick="callPHPFunction()">Greet me!</button> 
  <p id="result"></p>
</body>
</html>
