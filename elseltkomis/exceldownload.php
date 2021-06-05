<?php
session_start();
include('dbconnection.php');
include("checklogin.php");
check_login();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Excel файл хуулах</title>
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="admin/assets/css/style.css" rel="stylesheet">
    <link href="admin/assets/css/style-responsive.css" rel="stylesheet">
    <meta charset="utf-8" />
    <style>
      .xport,
      .btn {
        display: inline-block;
        text-align: center;
      }
      input[type="submit"] {
    /* padding: 0.75em; */
}
      a {
        text-decoration: none;
      }
      #data-table,
      #data-table th,
      #data-table td {
          font-weight:600;
          font-size:1.5rem;
        text-align: center;
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
  <![if gt IE 9]>
    <script
      type="text/javascript"
      src="//unpkg.com/xlsx/dist/shim.min.js"
    ></script>
    <script
      type="text/javascript"
      src="//unpkg.com/xlsx/dist/xlsx.mini.min.js"
    ></script>

    <script
      type="text/javascript"
      src="//unpkg.com/blob.js@1.0.1/Blob.js"
    ></script>
    <script
      type="text/javascript"
      src="//unpkg.com/file-saver@1.3.3/FileSaver.js"
    ></script>
    <![endif]>

    <![if lte IE 9]>
      <script type="text/javascript" src="shim.min.js"></script>
      <script type="text/javascript" src="xlsx.full.min.js"></script>

      <script type="text/javascript" src="Blob.js"></script>
      <script type="text/javascript" src="FileSaver.js"></script>
    <![endif]>

    <![if lte IE 9]>
      <script type="text/javascript" src="swfobject.js"></script>
      <script type="text/javascript" src="downloadify.min.js"></script>
      <script type="text/javascript" src="base64.min.js"></script>
    <![endif]

    <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
             <a href="Welcome.php" class="logo"><b>Dashboard</b></a> 
            <div class="nav notify-row" id="top_menu">
               
                         
                   
                </ul>
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                  <li><a class="logout" href="#"> <?= $_SESSION['tomilogch_Ner'];?></a></li>
                    <li><a class="logout" href="logout.php">Гарах</a></li>
                </ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="#"><img src="admin/assets/img/logo.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?= $_SESSION['mail'];?></h5>

                  <li class="mt">
                      <a href="Welcome.php" >
                          <i class="fa fa-users"></i>
                          <span>Элсэгчид</span>
                      </a>
                   
                  </li>

                  <li class="sub-menu">
                      <a href="create.php" >
                          <i class="fa fa-user"></i>
                          <span>Элсэгч нэмэх</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="excel.php" >
                          <i class="fa fa-upload"></i>
                          <span>Excel файл оруулах</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="exceldownload.php" >
                          <i class="fa fa-download"></i>
                          <span>Excel файл татах</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="tomilgoo.php" >
                          <i class="fa fa-plus"></i>
                          <span>Элсэгчдийн мэдээлэл</span>
                      </a>
                  </li>
              </ul>
          </div>
      </aside>
      </section>
<!-- form -->
      <section id="main-content">
          <section class="wrapper">

    <div id="container"></div>
      <h2>Хэрвээ та татаж авмааргүй байвал дээрх загварын дагуу үүсгэхэд л хангалттай. </h2>
    <table id="xport">
      <tr>
        <td><pre>Файл хуулах</pre></td>
        <td>
          <p id="xportxlsx" class="xport">
            <input style="height:50px;"
              type="submit"
              value="Файл хуулж хөгжилдөцгөөе???:.₮-₮"
              onclick="doit('xlsx');"
            />
          </p>
          <p id="xlsxbtn" class="btn">
            Flash required for actually downloading the generated file.
          </p>
        </td>
      </tr>
    </table>
    </section>
          </section>

   

<script>
      function doit(type, fn, dl) {
        var elt = document.getElementById("data-table");
        var wb = XLSX.utils.table_to_book(elt, { sheet: "Sheet JS" });
        return dl
          ? XLSX.write(wb, { bookType: type, bookSST: true, type: "base64" })
          : XLSX.writeFile(wb, fn || "Burtgel." + (type || "xlsx"));
      }
    </script>
     <script type="text/javascript">
      /* initial table */
      var aoa = [
        [
          "Бүртгэлийн дугаар",
          "Элсэгч овог",
          "Элсэгч нэр",
          "Регистрийн дугаар",
          "гэрчилгээний дугаар",
          "Төгссөн сургууль",
          "Бичиг баримтаа эхээр нь өгсөн эсэх/өгсөн бол 1 үгүй бол 0",
          "Мэргэжил",
          "Утасны дугаар",
          "Э-мэйл хаяг",
          "Зураг",
          "Бүртгэлийн хураамж өгсөн эсэх/өгсөн бол 1 үгүй бол 0",
        ],
      ];
      var ws = XLSX.utils.aoa_to_sheet(aoa);
      var html_string = XLSX.utils.sheet_to_html(ws, {
        id: "data-table",
        editable: true,
      });
      document.getElementById("container").innerHTML = html_string;
    </script>

  
    <script type="text/javascript">
      function tableau(pid, iid, fmt, ofile) {
        if (typeof Downloadify !== "undefined")
          Downloadify.create(pid, {
            swf: "downloadify.swf",
            downloadImage: "download.png",
            width: 100,
            height: 30,
            filename: ofile,
            data: function () {
              return doit(fmt, ofile, true);
            },
            transparent: false,
            append: false,
            dataType: "base64",
            onComplete: function () {
              alert("Your File Has Been Saved!");
            },
            onCancel: function () {
              alert("You have cancelled the saving of this file.");
            },
            onError: function () {
              alert(
                "You must put something in the File Contents or there will be nothing to save!"
              );
            },
          });
        else document.getElementById(pid).innerHTML = "";
      }
      tableau("xlsxbtn", "xportxlsx", "xlsx", "Burtgel.xlsx");
    </script>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(["_setAccount", "UA-36810333-1"]);
      _gaq.push(["_setDomainName", "sheetjs.com"]);
      _gaq.push(["_setAllowLinker", true]);
      _gaq.push(["_trackPageview"]);

      (function () {
        var ga = document.createElement("script");
        ga.type = "text/javascript";
        ga.async = true;
        ga.src =
          ("https:" == document.location.protocol
            ? "https://ssl"
            : "http://www") + ".google-analytics.com/ga.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <script type="text/javascript" src="shim.min.js"></script>
    <!-- after the shim is referenced, add the library -->
    <script type="text/javascript" src="xlsx.full.min.js"></script>
    <script src="admin/assets/js/jquery.js"></script>   
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="admin/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="admin/assets/js/jquery.scrollTo.min.js"></script>
    <script src="admin/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="admin/assets/js/common-scripts.js"></script>

  <script>
      $(function(){
          $('select.styled').customSelect();
      });
  </script>

  </body>
  </html>