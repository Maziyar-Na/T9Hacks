<html>
<head>
    <title>Farm-to-Table</title>
    <link rel="stylesheet" href="../static/loginPage.css">
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
    <script src="../static/login page.js"></script>
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
        <form class="register-form">
          <input type="text" placeholder="name"/>
          <input type="password" placeholder="password"/>
          <input type="text" placeholder="email address"/>
          <button>create</button>
          <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form" action="do_login.php" method="post">
          <input type="text" placeholder="email" name="email"/>
          <input type="password" placeholder="password" name="password"/>
          <button>login</button>
          <p class="message">Not registered? <a href="signup.html">Create an account here.</a>

          </p>
        </form>
      </div>
    </div>

  </body>
</html>
