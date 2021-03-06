<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    * {
      box-sizing: border-box
    }


    /* Style the tab */
    .tab {
      float: left;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
      width: 15%;
      height: 570px;
    }

    /* Style the buttons inside the tab */
    .tab button {
      display: block;
      background-color: inherit;
      color: black;
      padding: 20px 15px;
      width: 100%;
      border: none;
      outline: none;
      text-align: left;
      cursor: pointer;
      transition: 0.3s;
      font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      float: left;
      padding: 0px 12px;
      border: 1px solid #ccc;
      width: 85%;
      border-left: none;
      height: 570px;
    }

    h3 {
      position: absolute;
      left: 700px;
      top: 300px;
    }

    td {
      padding-right: 15px;
      padding-bottom: 5px;
      text-align: right;
    }

    form {
      position: absolute;
      left: 380px;
    }

    .btns {
      text-align: right;
    }

    #search {
      background-color: gray;
      border-radius: 4px;
    }
    #table1 {
            border-collapse: collapse;
            border-spacing: 0;
            width: 50%;
            border: 1px solid gray;
        }

        #table1 th{
            border: 1px solid gray;
            text-align: left;
            padding: 8px;
        }
        #table1 td{
            border: 1px solid gray;
            text-align: left;
            padding: 8px;
        }
        #table-scroll {
            height: 200px;
            width: 527px;
            overflow: auto;
            margin-top: 20px;
            position: relative;
        }

        #table1 tr:nth-child(even) {
            background-color: lightgray;
        }
  </style>
</head>

<body>

  <h1>PHOTOGRAPHER MANAGEMENT</h1>
  <a id="logout" href="login.php">Logout</a>

  <div class="tab">
    <button class="tablinks" onclick="openTab(event, 'welcome')" id="defaultOpen">Welcome</button>
    <button class="tablinks" onclick="openTab(event, 'myprofile')">My Profile</button>
    <button class="tablinks" onclick="openTab(event, 'users')">Users</button>

  </div>

  <div id="welcome" class="tabcontent">
    <h3>Welcome Elevated Access User</h3>
  </div>

  <div id="myprofile" class="tabcontent">
    <h2>Edit User</h2>
    <form>
      <table>
        <tr>
          <td>Email Address</td>
          <td><input type="email" name="email"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr>
          <td>First name</td>
          <td> <input type="text" name="firstname"></td>
        </tr>
        <tr>
          <td>Last name</td>
          <td> <input type="text" name="lastname"></td>
        </tr>
        <tr>
          <td>Date of birth</td>
          <td><input type="date" name="DateofBirth" style="width:172px;"></td>
        </tr>
        <tr>
          <td>Access Type</td>
          <td><select name="" style="width:172px;">
              <option value="Administrator">Administrator</option>
              <option value="Management">Management</option>
              <option value="Photographer">Photographer</option>
            </select></td>
        </tr>
        <tr>
          <td>Phone number</td>
          <td> <input type="tel" name="phoneno"></td>
        </tr>
        <tr>
          <td>Department</td>
          <td><select name="" style="width:172px;">
              <option value="Portrait Photography">Portrait Photography</option>
              <option value="Technology">Technology</option>
              <option value="Fashion Photography">Fashion Photography</option>
              <option value="Sports Photography">Sports Photography</option>
              <option value="Wildlife Photography">Wildlife Photography</option>
            </select></td>
        </tr>
        <tr>
          <td>Address</td>
          <td> <input type="text" name="lastname"></td>
        </tr>
        <tr>
          <td>Postal Code</td>
          <td> <input type="text" name="lastname"></td>
        </tr>
        <tr>
          <td><input id="button" type="button" value="Edit"></td>
        </tr>
      </table>
    </form>
  </div>

  <div id="users" class="tabcontent">
    <h2>Users</h2>
    <div class="btns">
      <button class="btn"><i class="fa fa-eye"></i> View</button>&nbsp;&nbsp;&nbsp;
      <button class="btn"><i class="fa fa-pencil"></i> Edit</button>&nbsp;&nbsp;&nbsp;
    </div>
    <div>
      <table>
        <tr>
          <td>
          <td>Department</td>
          <td><select name="">
              <option value="Technology">All</option>
              <option value="Portrait Photography">Portrait Photography</option>
              <option value="Technology">Technology</option>
              <option value="Fashion Photography">Fashion Photography</option>
              <option value="Sports Photography">Sports Photography</option>
              <option value="Wildlife Photography">Wildlife Photography</option>
            </select></td>
          </td>
          <td>
            <div class="searchbox">
              <div class="search-container">

                <input type="text" name="search">
                <button id="search">Search</button>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <div id="table-scroll">
      <table id="table1">

        <tr>
          <th><input type="checkbox"></th>
          <th>User_ID</th>
          <th>First_Name</th>
          <th>Last_Name</th>
          <th>Access_Type</th>
          <th>Department</th>

        </tr>
        <tbody>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <script>
    function openTab(evt, eventName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(eventName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>

</body>

</html>