
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        svg {
            width: 100px;
            display: block;
            margin: 40px auto 0;
          }
          
          .path {
            stroke-dasharray: 1000;
            stroke-dashoffset: 0;
            &.circle {
              -webkit-animation: dash .9s ease-in-out;
              animation: dash .9s ease-in-out;
            }
            &.line {
              stroke-dashoffset: 1000;
              -webkit-animation: dash .9s .35s ease-in-out forwards;
              animation: dash .9s .35s ease-in-out forwards;
            }
            &.check {
              stroke-dashoffset: -100;
              -webkit-animation: dash-check .9s .35s ease-in-out forwards;
              animation: dash-check .9s .35s ease-in-out forwards;
            }
          }
          
          p {
            text-align: center;
            margin: 20px 0 60px;
            font-size: 1.25em;
            &.success {
              color: #73AF55;
            }
            
          }
          
          
          @-webkit-keyframes dash {
            0% {
              stroke-dashoffset: 1000;
            }
            100% {
              stroke-dashoffset: 0;
            }
          }
          
          @keyframes dash {
            0% {
              stroke-dashoffset: 1000;
            }
            100% {
              stroke-dashoffset: 0;
            }
          }
          
          @-webkit-keyframes dash-check {
            0% {
              stroke-dashoffset: -100;
            }
            100% {
              stroke-dashoffset: 900;
            }
          }
          
          @keyframes dash-check {
            0% {
              stroke-dashoffset: -100;
            }
            100% {
              stroke-dashoffset: 900;
            }
          }
          
    </style>
</head>
<body>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
        <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
        <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
      </svg>
      <p class="success">Payment done successfully</p>
      <div class="d-grid col-2 mx-auto">
        <button onclick="redirectToAnotherPage()" class="btn btn-success" type="button" id="done">Go to home page</button>
      </div>
      <script>
        function redirectToAnotherPage() {
            // Redirect to another page
            window.location.href = "index.php";
        }
    </script>
      
</body>

</html>