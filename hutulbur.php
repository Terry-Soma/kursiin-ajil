<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./css/main.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Fonts and icons -->
  <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./css/css/fresh-bootstrap-table.css" rel="stylesheet" />
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
  <link href="./css/css/demo.css" rel="stylesheet" />
  <!-- Fonts and icons -->

   <title>Сургуулиудын хөтөлбөрүүд</title>
   <style>
       body{
        font-family: 'Poppins', sans-serif;
        line-height:1.8;
        background:#f2f2f2;
       }
       body::-webkit-scrollbar {
          width: 0.5rem;
    }
      body::-webkit-scrollbar-track {
      background-color: #1e1e24;
      }
      body::-webkit-scrollbar-thumb {
       background: #6649b8;
    }
   </style>
</head>

<body>
<header id="nav">
        <nav id="main-nav">
            <div class="container">
                <div class="logo">
                    <img src="./logos/logo.png" alt="logo" />
                </div>
                <ul>
                    <li><a href="index.html" >Эхлэл</a></li>
                    <li><a href="burtgel.php">Бүртгүүлэх</a></li>
                    <li><a href="hutulbur.php" class="current">Хөтөлбөрүүд</a></li>
                    <li><a href="#">Холбогдох</a></li>
                    <li><a href="login.php">Нэвтрэх</a></li>
                </ul>
            </div>
        </nav>
    </header>
   
   <!-- husnegtuud design
    -->
    <section style="overflow:hidden;">
    <?php
        include "./php/config.php";
    if(isset($_GET['id'])){

     $rs = mysqli_query($con,"SELECT * FROM mergejil as m, salbar_surguuli as s, hutulbur as h WHERE h.Hutulbur_Id = m.Hutulbur_Id AND h.School_Id = {$_GET['id']} AND s.School_Id = h.School_Id");
    if(mysqli_num_rows($rs) >0){

          $row = mysqli_fetch_assoc($rs);
$r=1;
        include('./php/ugugdul.php');
        echo $header;
        echo $output; 
        echo $footer;
    
}else{
    echo '<script type="text/javascript">window.location="hutulbur.php"; </script>';
}


       }else{
              // surguuli id gone away;
        $sql = mysqli_query($con,"SELECT * from salbar_surguuli");

        if(mysqli_num_rows($sql) >0){

          while($row1 =mysqli_fetch_assoc($sql))
{

  $rs = mysqli_query($con,"SELECT * FROM mergejil as m, salbar_surguuli as s, hutulbur as h WHERE h.Hutulbur_Id = m.Hutulbur_Id AND h.School_Id = {$row1['School_Id']} AND s.School_Id = h.School_Id");

  if(mysqli_num_rows($rs)>0){

        $row = mysqli_fetch_assoc($rs);
$r=1;
        include('./php/ugugdul.php');
        echo $header;
        echo $output;

        echo $footer;
       


  }else{
    echo "surguuliin id taarahgui bainashude";
  }










}echo "";
        }else{
          echo 'oldohgui baina shde';
        }





       }
                        ?>
     <div class="fixed-plugin" style="top: 300px">
  <div class="dropdown open">
    <a href="#" data-toggle="dropdown">
    <i class="fa fa-cog fa-2x"> </i>
    </a>
    <ul class="dropdown-menu">
      <li class="header-title">Adjustments</li>
      <li class="adjustments-line">
        <a href="javascript:void(0)" class="switch-trigger">
          <p>Full Background</p>
          <div class="switch"
            data-on-label="ON"
            data-off-label="OFF">
            <input type="checkbox" checked data-target="section-header" data-type="parallax"/>
          </div>
          <div class="clearfix"></div>
        </a>
      </li>
      <li class="adjustments-line">
        <a href="javascript:void(0)" class="switch-trigger">
          <p>Colors</p>
          <div class="pull-right">
            <span class="badge filter badge-blue" data-color="blue"></span>
            <span class="badge filter badge-azure active" data-color="azure"></span>
            <span class="badge filter badge-green" data-color="green"></span>
            <span class="badge filter badge-orange" data-color="orange"></span>
            <span class="badge filter badge-red" data-color="red"></span>
          </div>
          <div class="clearfix"></div>
        </a>
    </ul>
  </div>
</div>
    
</section>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.js"></script>

  <!--  Just for demo purpose, do not include in your project   -->
  <script src="./css/js/demo/gsdk-switch.js"></script>
  <script src="./css/js/demo/jquery.sharrre.js"></script>
  <script src="./css/js/demo/demo.js"></script>

    <script>

  var $table = $('.f-2');

  window.operateEvents = {
    'click .like': function (e, value, row, index) {
      alert('You click like icon, row: ' + JSON.stringify(row))
      console.log(value, row, index);
    },
    'click .edit': function (e, value, row, index) {
      alert('You click edit icon, row: ' + JSON.stringify(row))
      console.log(value, row, index);
    },
    
  
}
  function operateFormatter(value, row, index) {
    return [
      '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
        '<i class="fa fa-heart"></i>',
      '</a>',
       '<input type="checkbox" title="edit" id="vehicle3" class="table-action edit" href="javascript:void(0) name="vehicle3" value="Boat">'
    ].join('')
  }

  $(function () {
    $table.bootstrapTable({
      classes: 'table table-hover table-striped',
      toolbar: '.toolbar',

      search: true,
      showRefresh: true,
      showToggle: true,
      showColumns: true,
      pagination: true,
      striped: true,
      sortable: true,
      height: $(window).height(),
      pageSize: 5,
      pageList: [25, 50, 100],

      formatShowingRows: function (pageFrom, pageTo, totalRows) {
        return ''
      },
      formatRecordsPerPage: function (pageNumber) {
        return pageNumber + ' rows visible'
      }
    })


    $(window).resize(function () {
      $table.bootstrapTable('resetView', {
        height: $(window).height()
      })
    })
  })

  // $('#sharrreTitle').sharrre({
  //   share: {
  //     twitter: true,
  //     facebook: true
  //   },
  //   template: '',
  //   enableHover: false,
  //   enableTracking: true,
  //   render: function (api, options) {
  //     $("#sharrreTitle").html('Thank you for ' + options.total + ' shares!')
  //   },
  //   enableTracking: true,
  //   url: location.href
  // })

  // $('#twitter').sharrre({
  //   share: {
  //     twitter: true
  //   },
  //   enableHover: false,
  //   enableTracking: true,
  //   buttons: { twitter: {via: 'CreativeTim'}},
  //   click: function (api, options) {
  //     api.simulateClick()
  //     api.openPopup('twitter')
  //   },
  //   template: '<i class="fa fa-twitter"></i> {total}',
  //   url: location.href
  // })

  // $('#facebook').sharrre({
  //   share: {
  //     facebook: true
  //   },
  //   enableHover: false,
  //   enableTracking: true,
  //   click: function (api, options) {
  //     api.simulateClick()
  //     api.openPopup('facebook')
  //   },
  //   template: '<i class="fa fa-facebook-square"></i> {total}',
  //   url: location.href
  // })
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga')

  ga('create', 'UA-46172202-1', 'auto')
  ga('send', 'pageview')

</script>
      
</body>

</html>