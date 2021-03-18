<?PHP
header('Access-Control-Allow-Origin: *');
?> font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; 
    font-weight: 200 ; 
    font-size: 25px;
    text-align: center;
  }
  .outer {
    display: table;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
  }

  .middle {
    display: table-cell;
    vertical-align: middle;
  }

  .inner {
    margin-left: auto;
    margin-right: auto;
    width: 400px;
    /*whatever width you want*/
  }
</style>

<script type="text/javascript">

  window.onload = function(){
    var urlParams = new URLSearchParams(window.location.search);
    var param = {
      code: urlParams.get('code'),
      state: urlParams.get('state')
    } ;
    setTimeout(function(){ FileMaker.PerformScript ( "Miro_Auth_stage2", JSON.stringify(param) ); }, 100);
    //FileMaker.PerformScript ( "Miro_Auth_stage2", JSON.stringify(param) );
  }

</script>
</head>
<body>

<div class="outer">
  <div class="middle">
    <div class="inner">
      <p>Sending authentification...</p>
    </div>
  </div>
</div>

</body>
</html>
