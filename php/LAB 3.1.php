 

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Resgistertion Form</title>
    <style>
      header {
        background-color: #333;
        height: 21px;
        padding: 20px;
        border: 2px solid #333;
      }
      nav a {
        padding: 23px;
        display: inline=block;
        color: antiquewhite;

        text-decoration: none;
      }

      nav a:hover {
        background-color: brown;
      }
      .image {
        position: absolute;
        height: 61px;
        width: 200px;
        right: 0;
        top: 0;
        padding: 10px;
      }
      .container {
        margin: auto;
        padding: 10px;
        width: 600px;
        border: 5px solid #d0ebff;
        background-color: #e7f5ff;
      }
      .box {
        display: block;
        border: 2px dotted black;
      }
      .container div {
        margin: auto;
      }

      .x {
        background-color: #d0ebff;
        text-align: right;
        margin-bottom: 5px;
        padding: 7px;
      }
      .xy {
        width: auto;
        padding: 5px;
      }
      #country {
        width: 300px;
      }
    </style>
  </head>
  <body>
    <header>
      <nav>
        <a href="./index.html">Home</a>

        <a href="./roadmap.html">Road Map</a>
        <a href="#">Registration Form</a>

        <a href="https://www.iti.gov.eg/iti/home/contacts">Conacts</a>
      </nav>

    </header>

    <section class="container">
      <form action="<?php $_PHP_SELF ?>" method="POST">
        <br />
        <div>
          <h2>Application Name : AAST_BIS class registeration </h2>
          <p class="box">fields marked with <span style="color: red;">*</span> are compulsory filds</p>
        </div>
        <table>
          <tr>
            <td class="x">Your Name</td>
            <td><input size="30px" type="text" name="name" /> <span style="color: red;">* <?php if (isset($_POST['submit'])&&(empty($_POST['name']))) echo '<p style="color: red;"> Name is required</p>'  ?></span> </td> 
          </tr>

          <tr>
            <td class="x"> E-Mail ID</td>
            <td>
              <input
                size="50px
              "
                name="email"
  
              />
              <span style="color: red;">* <?php if (isset($_POST['submit'])&&(empty($_POST['email']))) echo '<p style="color: red;"> Email is required</p>'  ?></span>
            </td>
          </tr>
          <tr>
            <td class="x">Croup # </td>
            <td><input size="50px"  name="group" /></td>
          </tr>

          <tr>
            <td class="x">Mobile Phone</td>
            <td><input type="text" name="phone number" /></td>
          </tr>
          <tr>
            <td class="x">Class details</td>
            <td><textarea rows="5" cols="40" name="class"></textarea></td>
          </tr>
          <tr>
            <td class="x">Gender </td>
            <td>
              <input type="radio" id="male" name="gender" value="male"/>Male
              <input type="radio" id="female" name="gender" value="female"/>Female
              <span style="color: red;">* <?php if (isset($_POST['submit'])&&(empty($_POST['gender']))) echo '<p style="color: red;"> Gender is required</p>'  ?></span>
            </td>
          </tr>
          <tr>
            <td class="x">Select courses</td>
            <td>
              <select name="course" id="course" multiple >
                <option value="php">PHP</option>
                <option value="database">DataBase</option>
                <option value="javascript">Javascript</option>
                <option value="mysql">Mysql</option>
                <option value="HTML">HTML</option>
              </select>
            </td>
          </tr>

          <tr>
            <td></td>
            <td>
              <input type="checkbox" name ="agree" /> i agree <span style="color: red;">* <?php if (isset($_POST['submit'])&&(empty($_POST['agree']))) echo '<p style="color: red;"> Agree is required</p>'  ?></span>
              <a href="#"> the terms of APP  </a>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <input type="submit" name="submit" />
              <input type="reset" value="reset" />
            </td>
          </tr>
        </table>  
      </form>
    </section>
    <footer>
      <hr />
      <p style="text-align: center">
        Copyright 2021 by Noha Salah&reg;.All Rights Reserved.
      </p>
    </footer>
    <?php

    if(isset($_POST['submit'])&& isset($_POST['agree'])){

      echo '<P style ="font-size: 30px"> Your Given Values are :</P> ' . '<br />';
      if(!empty($_POST["name"])) echo "Name : ". $_POST['name']. "<br />";
      if(!empty($_POST["email"])) echo "Email : ". $_POST['email']. "<br />";
      if(!empty($_POST["group"])) echo "Group : ". $_POST['group']. "<br />";
      if(!empty($_POST["class"])) echo "Class-details : ". $_POST['class']. "<br />";
      if(!empty($_POST["gender"])) echo "Gender: ". $_POST['gender']. "<br />";
      if(!empty($_POST["course"])) echo "Your Courses are: ". $_POST['course']. "<br />";
  
    } else exit();

    ?>


  </body>
</html>





