<!DOCTYPE html>
<html lang="en">
  {% load static%}
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Fasasi Hafis Profile">
    <title>Fasasi Hafis portfolio</title>
    <link rel="stylesheet" href="{% static 'port.css' %}" />
    <link rel="preconnect" href="{% static 'https://fonts.googleapis.com' %}" />
    <link rel="preconnect" href="{% static 'https://fonts.gstatic.com'%}" crossorigin />
    <link
      href="{% static 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap' %}"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="{% static 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0' %}"
    />
    <link rel="shortcut icon" href="{% static 'fasasi.png'%}" type="image/x-icon ">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  </head>
  <body onLoad="setTimeout('delayedRedirect()', 8000)" style="background-color:#9a7fc4;">
  <?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $num = $_GET['num'];
    $msg = $_GET['msg'];

    echo "Your Name: $name<br>";
    echo "Email Address: $email<br>";
    echo "Phone Number: $num<br>";
    echo "Message: $msg<br>";

  ?>  
  </body>
</html>
