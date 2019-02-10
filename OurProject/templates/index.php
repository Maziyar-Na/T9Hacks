<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../static/search.css">
  <style>
    ul.breadcrumb {
      padding: 10px 16px;
      list-style: none;
      background-color: #eee;
    }
    ul.breadcrumb li {
      display: inline;
      font-size: 18px;
    }
    ul.breadcrumb li+li:before {
      padding: 8px;
      color: black;
      content: "/\00a0";
    }
    ul.breadcrumb li a {
      color: #0275d8;
      text-decoration: none;
    }
    ul.breadcrumb li a:hover {
      color: #01447e;
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <table style="height:27%;width:100%; position: absolute; top: 0; bottom: 0; left: 0; right: 0;border:0px solid">
    <tr>
      <td>
          <strong>
            <a class="logo" href="#">
              Logo
            </a>
          </strong>
      </td>
      <td>
      </td>
      <td>
      </td>
    </tr>
  </table>

  <div align="center">
    <span>
      <b>F</b>arm <b>T</b>o <b>T</b>able
    </span>
  </div>

  <div class="login-page">
    <div class="form">
      Search for Local Farms/Products: <br><br>
      <form class="login-form" action="results.php" method="post">
        <input type="text" placeholder="Product Name" name="name"/>
        <!-- <input type="text" placeholder="Count"/> -->
        <button type="submit">Search</button>
      </form>
    </div>
  </div>

  <script src="../js/search.js"></script>
</body>
</html>
