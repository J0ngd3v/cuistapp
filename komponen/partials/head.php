<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="komponen/style.css">
  <style>
    .sticky-bottom {
      position: fixed;
      bottom: 0;
      width: 100%;
      z-index: 999;
    }
    .bg-custome{
      /* From https://css.glass */
      /* background: rgba(255, 255, 255, 0.1);
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(9px);
      -webkit-backdrop-filter: blur(9px);
      border: 1px solid rgba(255, 255, 255, 0.3); */
      /* border-top:1px white solid; */
      background-color:#009c86;
    }
    .modal {
      background: rgba(255, 255, 255, 0.1);
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(9px);
      -webkit-backdrop-filter: blur(9px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .modal-content {
      background-color:#191825;
      border: none;
      color:white;
    }
    .modal-dialog {
      margin: auto;
      top: 20%;
      transform: translateY(-50%);
    }

    textarea:focus,
    textarea:active {
      outline: none;
      box-shadow: none;
      border-color: transparent;
    }
  </style>
</head>
<body>