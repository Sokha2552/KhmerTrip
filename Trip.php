<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Dangrek&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="trip.css">
    <!--date picker-->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <style>
        .carousel-inner img {
            width: 100%;
           height: calc(100vh - 0px);
            object-fit: cover;
        }
        .search-box-wrapper{
            background-color: #fff;
            position: relative;
        }
        .container{
            max-width: 1150px;
        }
        section#content {
        min-height: 400px;
        padding-top: 40px;
        text-align: left;
        background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <?php include('navigation.php') ?>
    <?php include('slideshow.php') ?>
    <div class="section content">
        <div class="search-box-wrapper">
                <div class="search-box container" style=" background-color:#fff;">
                    <div class="clearfix row p-2">
                        <div class="text-info active col-sm-2" style="text-align:left;">
                            <a href="#" data-toggle="tab" aria-expanded="true">????????????????????????????????????</a>
                        </div>
                        <div class="col-sm-1" style="text-align:left;">
                            <a class="text-warning " href="#" data-toggle="tab" aria-expanded="true">????????????????????????????????????</a>
                        </div>
                    </div>
                    <div class="search-tab-content">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="form-group col-sm-6 col-md-3">
                                    <h4 class="title" style="margin-left:-15px;">????????????????????????</h4>
                                    <div class="input-group row book-text">
                                        <label>???????????????????????????????????????</label>
                                        <select class="full-width">
                                            <option value="0">?????????????????????</option>
                                            <option value="1">?????????????????????</option>
                                            <option value="2">????????????????????????</option>
                                            <option value="3">?????????????????????????????????</option>
                                            <option value="4">???????????????????????????</option>
                                            <option value="5">????????????</option>
                                        </select>                                       
                                        <!--<div>
                                        <button class="btn btn-outline-primary" type="button" style="height: 48px;"><i class="fas fa-angle-down"></i></button>
                                        </div>-->
                                    </div>

                                </div>
                                <div class="form-group col-sm-6 col-md-5">
                                    <h4 class="title">?????????????????????????????????</h4>
                                    <div class="row book-text">
                                        <div class="col-md-6 date-icon">
                                            <label>????????????????????????</label>
                                            <div>
                                                <input style="width:50px;" id="datepicker" width="276" placeholder="??????/????????????/???????????????"/>
                                            </div>                                 
                                        </div>
                                        <div class="col-md-6">
                                            <label>??????????????????</label>
                                            <div>
                                            <input type="number" name="date-form" class="input-text" placeholder="???????????????????????????">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6 col-md-2">
                                    <h4 class="title" style="margin-left:-14px">???????????????????????????</h4>
                                    <div class="row book-text">
                                        <div class="col-xs-6">
                                            <label>?????????????????????????????????</label>
                                            <div class="catepicker-wrap">
                                            <input type="number" id="" name="date-form" class="input-text " placeholder="?????????????????????????????????">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6 col-md-2">
                                  <div class="btn-group btn-search">
                                      <button type="button" class="btn btn-success search-btn"><a class="text-white" href="#">??????????????????????????????????????????</a></button>
                                      <button type="button" class="btn btn-success px-2">
                                      <i class="fas fa-check"></i>
                                      </button>
                                  </div>                                  
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
    <div class="section content" style="background-color:#f5f5f5;">
        <div class="blog section parallax" style="min-height: 300px; background-position: 50% 63.5px;" data-stellar-background-ratio="0.5">
            <div class="container" style="background-color:#f5f5f5;">
                <div class="text-center pt-5">
                    <h3>???????????????????????????????????????????????????</h3>
                </div>
                <div class="row pt-3 animated fadeInDown">
                    <div class="col-md-4">
                        <div class="card" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 4px 12px 0px;">
                            <div class="image">
                            <img class="hover-zoonin card-img-top" src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/cms-announcement/xhVoPoZC8GEf5mJZ5HIFWMfqbaz62LpF.png" alt="Card image">
                            </div>
                            <div class="card-body">
                            <p class="card-text"><a href="#"> ??????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????? ????????????????????????????????????????????????????????? ??????????????????????????????????????????</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 4px 12px 0px;">
                            <div class="image">
                            <img class="hover-zoonin card-img-top" src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/cms-announcement/8oWleAN2xlbCKx34abAuu-dj5g9pMNnb.png" alt="Card image">
                            </div>
                            <div class="card-body">
                            <p class="card-text"><a href="#"> ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 4px 12px 0px;">
                            <div class="image">
                            <img class="hover-zoonin card-img-top" src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/cms-announcement/qmrgraFsCznRYEk_ZMBJPh2A-KVTS0aS.png" alt="Card image">
                            </div>
                            <div class="card-body">
                            <p class="card-text"><a href="#"> ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? Payway</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container web-path">
                <div class="row">
                    <div class="icon-box text-center mx-3 mt-1">
                    <i class="fas fa-map-signs"></i>
                    </div>
                    <div>
                    <h3>???????????????????????????????????????????????????</h3>
                    <p>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                    </div>   
                </div>
                <div class="row pup-city">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="image pup-city-pic">
                                <img class="hover-zoonin card-img-top animated fadeInDown" src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/destination/SodBXw7A1H9MDlb6cuwKaeoUC9X6hyO4.png" alt="Card image" style="height:200px;">
                            </div>
                            <div class="card-body">
                                <div class="row">                               
                                    <div class="col-sm-6 col-md-6">
                                        <h6>???????????????????????????</h6>
                                        <p style="font-size:10px">(???+ ????????????????????????????????????)</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <button class="btn b-bg"><a href="#" class="text-white">????????????????????????????????????</a></button>
                                    </div>                       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="image ">
                                <img class="hover-zoonin card-img-top animated fadeInDown" src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/destination/lOtuTTnwRs1L9lsp7iVydNeVUIkLy70s.png" alt="Card image" style="height:200px;">
                            </div>
                            <div class="card-body">
                                <div class="row">                               
                                    <div class="col-sm-6 col-md-6">
                                        <h6>??????????????????</h6>
                                        <p style="font-size:10px">(???+ ????????????????????????????????????)</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 text-right">
                                        <button class="btn b-bg t-3"><a href="#" class="text-white" style="font-size: 1em;">????????????????????????????????????</a></button>
                                    </div>                       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="image ">
                                <img class="hover-zoonin card-img-top animated fadeInDown" src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/destination/gQSm1qIfVSFPdHXyNznnIrRUrhxduybk.png" alt="Card image" style="height:200px;">
                            </div>
                            <div class="card-body">
                                <div class="row">                               
                                    <div class="col-sm-6 col-md-6">
                                        <h6>??????????????????</h6>
                                        <p style="font-size:10px">(???+ ????????????????????????????????????)</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 text-right">
                                        <button class="btn b-bg t-3"><a href="#" class="text-white" style="font-size: 1em;">????????????????????????????????????</a></button>
                                    </div>                       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="image ">
                                <img class="hover-zoonin card-img-top animated fadeInDown" src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/destination/nBdXhUEQStj1EflyhyrvS1mpIhOoJ9B0.png" alt="Card image" style="height:200px;">
                            </div>
                            <div class="card-body">
                                <div class="row">                               
                                    <div class="col-sm-6 col-md-6">
                                        <h6>????????????</h6>
                                        <p style="font-size:10px">(???+ ????????????????????????????????????)</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 text-right">
                                        <button class="btn b-bg t-3"><a href="#" class="text-white" style="font-size: 1em;">????????????????????????????????????</a></button>
                                    </div>                       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="image ">
                                <img class="hover-zoonin card-img-top animated fadeInDown" src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/destination/jJNLC7VC1Z8tovcK7q42etXsk2wEXOmW.png" alt="Card image" style="height:200px;">
                            </div>
                            <div class="card-body">
                                <div class="row">                               
                                    <div class="col-sm-6 col-md-6">
                                        <h6>?????????</h6>
                                        <p style="font-size:10px">(???+ ????????????????????????????????????)</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 text-right">
                                        <button class="btn b-bg t-3"><a href="#" class="text-white" style="font-size: 1em;">????????????????????????????????????</a></button>
                                    </div>                       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="image ">
                                <img class="hover-zoonin card-img-top animated fadeInDown" src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/destination/ofo7SyLgOHEIFIeSe_EFNfgGZaXU9fH5.png" alt="Card image" style="height:200px;">
                            </div>
                            <div class="card-body">
                                <div class="row">                               
                                    <div class="col-sm-6 col-md-6">
                                        <h6>???????????????????????????</h6>
                                        <p style="font-size:10px">(???+ ????????????????????????????????????)</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 text-right">
                                        <button class="btn b-bg t-3"><a href="#" class="text-white" style="font-size: 1em;">????????????????????????????????????</a></button>
                                    </div>                       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="image ">
                                <img class="hover-zoonin card-img-top animated fadeInDown" src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/destination/DoznZHbPDifsXQXzkuPZk8LIMaEHwLVq.png" alt="Card image" style="height:200px;">
                            </div>
                            <div class="card-body">
                                <div class="row">                               
                                    <div class="col-sm-6 col-md-6">
                                        <h6>???????????????????????????</h6>
                                        <p style="font-size:10px">(???+ ????????????????????????????????????)</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 text-right">
                                        <button class="btn b-bg t-3"><a href="#" class="text-white" style="font-size: 1em;">????????????????????????????????????</a></button>
                                    </div>                       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="image ">
                                <img class="hover-zoonin card-img-top animated fadeInDown" src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/destination/6Nq8RTXI68q3y3xkwVOOdTdfXE4zO0PK.png" alt="Card image"  style="height:200px;">
                            </div>
                            <div class="card-body">
                                <div class="row">                               
                                    <div class="col-sm-6 col-md-6">
                                        <h6>???????????????</h6>
                                        <p style="font-size:10px">(???+ ????????????????????????????????????)</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 text-right">
                                        <button class="btn b-bg t-3"><a href="#" class="text-white" style="font-size: 1em;">????????????????????????????????????</a></button>
                                    </div>                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button??? class="btn px-4 py-2"style="background-color:#01b7f2;"><a href="#" class="text-white" style="font-size:0.8em;text-decoration:none;">??????????????????????????????????????????????????????????????????????????????????????????</a></button>
                </div>
            </div>
            <div class="section content web-path">
                <div class="container????????? pup-trip">
                    <div class="container">
                        <div class="row">
                            <div class="icon-box text-center mx-3 mt-1">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div>
                                <h3>?????????????????????????????????????????????????????????</h3>
                                <p>?????????????????? ???????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                            </div>  
                            <div class="col-md-3 text-right" style="padding-top: 40px;">
                                <a href="#"??? class="text-primary" style="font-size: 1em;">??????????????????????????????</a>
                            </div> 
                        </div>
                        <div class="row image-box">
                            <div class="col-md-4">
                                <div class="box">
                                    <div class="animated" data-toggle="tooltip" title="???????????????????????????????????????">
                                        <img src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/cms-popular-product/MluhFgLMWfYdr5ufJNvVxA4WfVSAvcOm.jpg" alt="Card image" style="width:100%;">
                                    </div>
                                    <div class="details">
                                        <div class="detail pup-trip-menu">
                                            <div class="row text-right">               
                                                <div class="col-sm-8">
                                                    <p class="box-title text-lg text-overflow">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="??????????????????????????????????????? ?????????????????????????????? ????????????????????????????????? ????????????????????????????????? ??????????????? ????????????">
                                                            ?????????????????????????????????????????? ?????????????????????????????? ????????????????????????????????? ????????????????????????????????? ??????????????? ????????????
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="col-sm-4">
                                                    <small class="kh-content">??????????????????</small>
                                                    <h4 class="price">US$ 63</h4>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <div class="detail pup-trip-menu">
                                            <div class="row text-right">               
                                                <div class="col-sm-8">
                                                    <p class="box-title text-lg text-overflow">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="????????????????????? ?????????????????? ????????????????????????????????????????????? ??????????????????????????????????????? ??????????????? ????????????">
                                                            ????????????????????? ?????????????????? ????????????????????????????????????????????? ??????????????????????????????????????? ??????????????? ????????????
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="col-sm-4">
                                                    <small class="kh-content">??????????????????</small>
                                                    <h4 class="price">US$ 144</h4>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <div class="detail pup-trip-menu">
                                            <div class="row text-right">               
                                                <div class="col-sm-9">
                                                    <p class="box-title text-lg text-overflow">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="????????????????????? ?????????????????? ????????????????????????????????????????????? ???????????????????????????????????? ??????????????? ????????????">
                                                            ????????????????????? ?????????????????? ????????????????????????????????????????????? ???????????????????????????????????? ??????????????? ????????????
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <small class="kh-content">??????????????????</small>
                                                    <h4 class="price">US$ 68</h4>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <div class="detail pup-trip-menu">
                                            <div class="row text-right">               
                                                <div class="col-sm-9">
                                                    <p class="box-title text-lg text-overflow">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="?????????????????????????????????????????????????????????????????? ??????????????????????????? ????????????????????????????????????????????????????????? ??????????????? ????????????">
                                                           ?????????????????????????????????????????????????????????????????? ??????????????????????????? ????????????????????????????????????????????????????????? ??????????????? ????????????
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <small class="kh-content">??????????????????</small>
                                                    <h4 class="price">US$ 106</h4>
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box">
                                    <div class="animated" data-toggle="tooltip" title="???????????????????????????????????????">
                                        <img src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/cms-popular-product/Xp_0Q5vJoDJKZBcst4cWLI_PdXA018oo.jpg" alt="Card image" style="width:100%;">
                                    </div>
                                    <div class="details">
                                        <div class="detail pup-trip-menu">
                                            <div class="row text-right">               
                                                <div class="col-sm-9 text-left">
                                                    <p class="box-title text-lg text-overflow">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="????????????????????????-??????????????????">
                                                        ????????????????????????-??????????????????
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <small class="kh-content">??????????????????</small>
                                                    <h4 class="price">US$ 143</h4>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <div class="detail pup-trip-menu">
                                            <div class="row text-right">               
                                                <div class="col-sm-9 text-left">
                                                    <p class="box-title text-lg text-overflow">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="????????????????????????-??????????????????">
                                                        ????????????????????????-??????????????????
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <small class="kh-content">??????????????????</small>
                                                    <h4 class="price">US$ 98</h4>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <div class="detail pup-trip-menu">
                                            <div class="row text-right">               
                                                <div class="col-sm-9">
                                                    <p class="box-title text-lg text-overflow">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="???????????????????????????-?????????????????????????????????????????????-????????????????????????-??????????????????????????????(????????????????????????)">
                                                            ???????????????????????????-?????????????????????????????????????????????-????????????????????????-??????????????????????????????(????????????????????????)
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <small class="kh-content">??????????????????</small>
                                                    <h4 class="price">US$ 198</h4>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <div class="detail pup-trip-menu">
                                            <div class="row text-right">               
                                                <div class="col-sm-9 text-left">
                                                    <p class="box-title text-lg text-overflow">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="???????????????????????????-?????????????????????????????????????????????-????????????????????????????????????">
                                                        ???????????????????????????-?????????????????????????????????????????????-????????????????????????????????????
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <small class="kh-content">??????????????????</small>
                                                    <h4 class="price">US$ 119</h4>
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box">
                                    <div class="animated" data-toggle="tooltip" title="???????????????????????????????????????">
                                        <img src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/cms-popular-product/00SPGfSsFUQc4xjOUCwvl3SOzuG9gMTw.jpg" alt="Card image" style="width:100%;">
                                    </div>
                                    <div class="details">
                                        <div class="detail pup-trip-menu">
                                            <div class="row text-right">               
                                                <div class="col-sm-9">
                                                    <p class="box-title text-lg text-overflow">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="??????????????????-??????????????????????????????-???????????????????????????????????????-??????????????????????????????">
                                                            ??????????????????-??????????????????????????????-???????????????????????????????????????-??????????????????????????????
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <small class="kh-content">??????????????????</small>
                                                    <h4 class="price">US$ 139</h4>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <div class="detail pup-trip-menu">
                                            <div class="row text-right">               
                                                <div class="col-sm-9 text-left">
                                                    <p class="box-title text-lg text-overflow">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="??????????????????????????????">
                                                            ??????????????????????????????
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <small class="kh-content">??????????????????</small>
                                                    <h4 class="price">US$ 129</h4>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <div class="detail pup-trip-menu">
                                            <div class="row text-right">               
                                                <div class="col-sm-9 text-left">
                                                    <p class="box-title text-lg text-overflow">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="??????????????????-???????????????????????????">
                                                            ??????????????????-???????????????????????????
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <small class="kh-content">??????????????????</small>
                                                    <h4 class="price">US$ 118</h4>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <div class="detail pup-trip-menu">
                                            <div class="row text-right">               
                                                <div class="col-sm-9 text-left">
                                                    <p class="box-title text-lg text-overflow">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="????????????-?????????????????????????????????????????????-???????????????-?????????">
                                                           ????????????-?????????????????????????????????????????????-???????????????-?????????
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <small class="kh-content">??????????????????</small>
                                                    <h4 class="price">US$ 189</h4>
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
    <div class="global-map-area promo-box parallax" data-stellar-background-ratio="0.5"
            style="background-position: 100% 100%;">
            <div class="container">
                <div class="content-section description pull-right col-sm-9" style="height: 250px;">
                    <div class="table-wrapper hidden-table-sm text-white">
                        <div class="table-cell">
                            
                            <h2>???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ??? ?????????????????????????????????</h2> 
                            <br><br>
                            <h1>?????????????????????????????????????????????????????????????????????????????????????????? <i>???????????????????????????????????????????????????!</i></h1>
                        </div>
                        <div class="action-section table-cell"  style="bottom: -30px;">
                            <button class="btn btn-lg btn-success kh-header px-5 py-3" style="position: absolute; bottom: 150px;right:0px;"><a href="#">??????????????????????????????????????????????????????</a></button>
                        </div>
                    </div>
                </div>
                <div class="image-container col-sm-4" style="height: 221px; margin-left: -5%; position: relative;">
                    <img src="promo-image2.png" alt="" width="450px"
                        style="position: absolute; bottom: -30px; left: 20px; visibility: visible;">
                </div>
            </div>
    </div>
    <div class="section content pb-5" style="background-color:#f5f5f5;padding-top:30px;">
        <div class="container?????????" style="background-color:#f5f5f5;margin-top:4em;">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                        <div class="icon-box text-center" style="background-color: #98ce44;">
                        <i class="fas fa-hiking" style=" color: #fff; padding: 25px; font-size: 3em;"></i>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h1>?????????????????? ????????????????????? ????????????????????????????????????</h1>
                        <p style="font-size: 1.5em;">??????????????????????????????????????? ??????????????????????????? ???????????????????????????????????? ????????????????????????????????????????????????????????? ?????????????????????????????????????????????</p>
                    </div>  
                </div>
                <br>
                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
                    <!--Controls-->
                    <div class="controls-top text-right">
                        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                            class="fas fa-chevron-right"></i></a>
                    </div>
                    <!--/.Controls-->

                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                        <li data-target="#multi-item-example" data-slide-to="1"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner v-2" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active"> 
                            <div class="row">                   
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/z7f-1jJnvy_bpFsHA4bdDBjcWTu5CngK.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">???????????????????????? ?????????????????? ????????????????????????????????????????????? ???????????????????????????????????? ??????????????? ????????????</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>3 ????????????, 2 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 139</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>  
                        
                                            
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/F3rmO47S_d-bpfMsAnJGWrsfuGXmsNul.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">????????????????????? ????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????? ?????????????????? ????????????</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>3 ????????????, 2 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$???96</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/sJSj6GqxOOKVu1LAQ_8KhQcd_gY8B_bx.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">?????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????? ??????????????? ????????????</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>3 ????????????, 2 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 125</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/jVQLF2xUwJLcQIvwB-XoCdev2Ncs3EB-.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">??????????????????????????????????????? ?????????????????????????????? ????????????????????????????????? ??????????????????????????? ?????????????????? ????????????</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>2 ????????????, 1 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 55</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                            <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/jUyYvaoIFxDQ0BtHPV7JFkDXQQwyKAMi.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">???????????????????????? ?????????????????? ????????????????????????????????????????????? ???????????????????????????????????? </a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>2 ????????????, 1 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 65</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section content pb-5" style="background-color:#f5f5f5;padding-top:30px;">
        <div class="container?????????" style="background-color:#f5f5f5;margin-top:4em;">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                        <div class="icon-box text-center" style="background-color: #01b7f2;">
                        <i class="fas fa-umbrella-beach" style=" color: #fff; padding: 25px 10px; font-size: 3em;"></i>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h1>???????????????????????? ????????????????????????????????? ????????? ??????????????????</h1>
                        <p style="font-size: 1.5em;">???????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????? ????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????</p>
                    </div>  
                </div>
                <br>
                <!--Carousel Wrapper-->
                <div id="multi-item-example2" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
                    <!--Controls-->
                    <div class="controls-top text-right">
                        <a class="btn-floating" href="#multi-item-example2" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                        <a class="btn-floating" href="#multi-item-example2" data-slide="next"><i
                            class="fas fa-chevron-right"></i></a>
                    </div>
                    <!--/.Controls-->

                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#multi-item-example2" data-slide-to="0" class="active"></li>
                        <li data-target="#multi-item-example2" data-slide-to="1"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner v-2" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active"> 
                            <div class="row">                   
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/OQGNkR6OrR435HY9Hwt8abs2fqBhyzSl.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">???????????????????????? ?????????????????? ????????????????????????????????????????????? ???????????????????????????????????? ??????????????? ????????????</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>3 ????????????, 2 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 139</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>  
                        
                                            
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/HcQPUE7bnGixjF8QpJKReuGHP_6BEbh9.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">????????????????????? ????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????? ?????????????????? ????????????</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>3 ????????????, 2 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$???96</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/jvW0HCg9hKsOoyRtd8nExdoRGu02LOus.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">?????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????? ??????????????? ????????????</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>3 ????????????, 2 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 125</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/YVrnquZTxpE77lNhcg1xfap2egGWBwzi.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">??????????????????????????????????????? ?????????????????????????????? ????????????????????????????????? ??????????????????????????? ?????????????????? ????????????</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>2 ????????????, 1 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 55</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/XkU-yoBi3LhPLX8ky86hufyLSplMLNug.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">???????????????????????? ?????????????????? ????????????????????????????????????????????? ???????????????????????????????????? </a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>2 ????????????, 1 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 65</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/9dA0sMPbrlvWjmTFBzimSB149FqsUU3Z.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">???????????????????????? ?????????????????? ????????????????????????????????????????????? ???????????????????????????????????? </a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>2 ????????????, 1 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 65</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section content pb-5" style="background-color:#f5f5f5;padding-top:30px;">
        <div class="container?????????" style="background-color:#f5f5f5;margin-top:4em;">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                        <div class="icon-box text-center" style="background-color: #98ce44;">
                        <i class="fas fa-tree" style=" color: #fff; padding: 25px 10px; font-size: 3em;"></i>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h1>???????????????????????????????????????????????? ????????????????????????</h1>
                        <p style="font-size: 1.5em;">??????????????????????????????????????? ???????????????????????? ????????????????????????????????? ???????????????????????????????????? BBQ??? ?????????????????????????????????????????????????????? ?????????????????????????????????????????????????????? ??????????????????????????????</p>
                    </div>  
                </div>
                <br>
                <!--Carousel Wrapper-->
                <div id="multi-item-example3" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
                    <!--Controls-->
                    <div class="controls-top text-right">
                        <a class="btn-floating" href="#multi-item-example2" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                        <a class="btn-floating" href="#multi-item-example2" data-slide="next"><i
                            class="fas fa-chevron-right"></i></a>
                    </div>
                    <!--/.Controls-->

                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#multi-item-example3" data-slide-to="0" class="active"></li>
                        <!--<li data-target="#multi-item-example3" data-slide-to="1"></li>-->
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner v-2" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active"> 
                            <div class="row">                   
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/ea8OpZtiYXxzKNvokeNsC39PS0CknD9d.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;line-height: 60px;">
                                                        <td colspan="2"><a href="#">????????????????????????-??????????????????</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>3 ????????????, 2 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 128</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>  
                        
                                            
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/SZV_G3Ni4RDh-OBSd397RHLF_2PSuw-g.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;line-height: 60px;">
                                                        <td colspan="2"><a href="#">????????????????????????-??????????????????</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>2 ????????????, 1 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$???78</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/LtLxGIambpbsYWQWkaYGDfLA3ScgCB9j.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;line-height: 60px;">
                                                        <td colspan="2"><a href="#">???????????????????????????-?????????????????????????????????????????????-???????????????????????????????????????</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>3 ????????????, 2 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 98</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/zY8JmfX7aee9x2pRClq65XUbj8h3ZC5_.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">???????????????????????????-????????????????????????????????????????????????-???????????????????????????-????????????????????????????????????(????????????????????????)</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>4 ????????????, 3 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 178</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section content pb-5" style="background-color:#f5f5f5;padding-top:30px;">
        <div class="container?????????" style="background-color:#f5f5f5;margin-top:4em;">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                        <div class="icon-box text-center" style="background-color: #000;">
                        <i class="fas fa-landmark" style=" color: #fff; padding: 25px 10px; font-size: 3em;"></i>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h1>?????????????????????????????????????????? ?????????????????????????????????????????????????????????</h1>
                        <p style="font-size: 1.5em;">????????????????????? ???????????????????????????????????????????????????????????? ??????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                    </div>  
                </div>
                <br>
                <!--Carousel Wrapper-->
                <div id="multi-item-example4" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
                    <!--Controls-->
                    <div class="controls-top text-right">
                        <a class="btn-floating" href="#multi-item-example4" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                        <a class="btn-floating" href="#multi-item-example4" data-slide="next"><i
                            class="fas fa-chevron-right"></i></a>
                    </div>
                    <!--/.Controls-->

                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#multi-item-example3" data-slide-to="0" class="active"></li>
                        <!--<li data-target="#multi-item-example3" data-slide-to="1"></li>-->
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner v-2" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active"> 
                            <div class="row">                   
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/apbb6-Dwp483kdgvlJ47_WUV7JAox3HL.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">??????????????????????????????????????????????????? ??????????????????????????????????????????????????? ?????????????????????????????? ??????????????????????????????????????????</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>3 ????????????, 2 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 119</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>  
                        
                                            
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/zlvnzQb0Ilpz3UmnyWB5RaRVmI9fPyP3.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">?????????????????????????????????-????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>3 ????????????, 2 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$???119</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/vIViLQAg8VNrtPutNxPBtvjQUpuYs1pi.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">?????????????????????????????????????????????????????????????????????????????????????????????????????????</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>2 ????????????, 1 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 79</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section content pb-5" style="background-color:#f5f5f5;padding-top:30px;">
        <div class="container?????????" style="background-color:#f5f5f5;margin-top:4em;">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                        <div class="icon-box text-center" style="background-color: #fdb714;">
                        <i class="fas fa-bed" style=" color: #fff; padding: 25px; font-size: 3em;"></i>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h1>??????????????????????????????????????????</h1>
                        <p style="font-size: 1.5em;">?????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????? ??????????????????????????????????????? ???????????????????????????????????? ???????????????????????????????????????</p>
                    </div>  
                </div>
                <br>
                <!--Carousel Wrapper-->
                <div id="multi-item-example5" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
                    <!--Controls-->
                    <div class="controls-top text-right">
                        <a class="btn-floating" href="#multi-item-example5" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                        <a class="btn-floating" href="#multi-item-example5" data-slide="next"><i
                            class="fas fa-chevron-right"></i></a>
                    </div>
                    <!--/.Controls-->

                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#multi-item-example4" data-slide-to="0" class="active"></li>
                        <li data-target="#multi-item-example4" data-slide-to="1"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner v-2" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active"> 
                            <div class="row">                   
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/_Zb3JZitD8vaAGa34cGuUJN1Er561lgh.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">????????????????????????????????????????????? ???????????????????????? ???????????????????????? ??????????????? ????????????</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>3 ????????????, 2 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 35</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>  
                        
                                            
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/C0DIM7eZuA-CvlSdBRLVvezmKW37Iiy0.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">?????????????????????????????????????????? ??????????????????????????? ?????????????????? ??????????????? ???????????????????????????????????? ???????????? ???????????????</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>3 ????????????, 2 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$???30</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/5CEAs9n5JumdaRp0ChbFgz8ySPjqeqUJ.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">?????????????????????????????????????????? ??????????????? ???????????? ???????????????????????????????????? ???????????????</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>3 ????????????, 2 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 77</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/XCrlPPrShvIjBK5mf5S9c8eeT1xpio37.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#"></a>?????????????????????????????????????????? ??????????????? ???????????? ?????????????????? ?????????????????? ???????????? ???????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>3 ????????????, 2 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 78</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                            <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/azxYaXcy6_Eu-j-MhsFFVDa2HzczlFih.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">????????????????????????????????????????????? ??????????????? ???????????? ?????????????????? ??????????????? ??????????????? </a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>3 ????????????, 2 ?????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 60</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section content pb-5" style="background-color:#f5f5f5;padding-top:30px;">
        <div class="container?????????" style="background-color:#f5f5f5;margin-top:4em;">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                        <div class="icon-box text-center" style="background-color: #000;">
                        <i class="fas fa-city" style=" color: #fff; padding: 25px 10px; font-size: 3em;"></i>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h1>???????????????????????? ????????? ????????????????????????????????????</h1>
                        <p style="font-size: 1.5em;">???????????????????????????????????????????????????????????? ???????????????????????????????????????????????? ?????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????</p>
                    </div>  
                </div>
                <br>
                <!--Carousel Wrapper-->
                <div id="multi-item-example3" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
                    <!--Controls-->
                    <div class="controls-top text-right">
                        <a class="btn-floating" href="#multi-item-example2" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                        <a class="btn-floating" href="#multi-item-example2" data-slide="next"><i
                            class="fas fa-chevron-right"></i></a>
                    </div>
                    <!--/.Controls-->

                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#multi-item-example3" data-slide-to="0" class="active"></li>
                        <!--<li data-target="#multi-item-example3" data-slide-to="1"></li>-->
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner v-2" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active"> 
                            <div class="row">                   
                                <div class="col-md-3">
                                    <div class="card mb-2">
                                        <div class="image animated fadeInDown">                                          
                                            <img class="card-img-top"
                                            src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/product-tour/dbf4N8HgIRHkHCv3cgTCq265LoJHuzMO.jpg"
                                            alt="Card image cap" style="height:250px">
                                            <span class="favorite-icon"><i class="fas fa-heart"></i></span>
                                        </div>
                                        <div class="card-body">
                                            <table style="width:100%">
                                                <tbody  class="detail trip-list">
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td colspan="2"><a href="#">??????????????? ????????????????????????????????? (???????????????????????? +??????????????????????????????????????? + ???????????????????????????????????????)</a></td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="width:55%; text-align:left"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></td>
                                                        <td style="width:55%; text-align:right">0 ?????????????????????????????????</td>
                                                    </tr>
                                                    <tr style="border-bottom:1px solid #B1B1B1;">
                                                        <td style="text-align:left">
                                                            <span class="skin-color text-primary">??????????????????</span><br>
                                                            <span>3 ????????????,??? 00 ????????????</span>
                                                        </td>
                                                        <td style="text-align:right">
                                                        <img style="width: 40px; height: 30px;" alt="" 
                                                        src="https://khmertrips-resource.s3-ap-southeast-1.amazonaws.com/transportation/ground/bus.png" draggable="false">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <span class="skin-color">??????????????????</span><br>
                                                            <span class="text-uppercase" style="color:red; font-size: 2.2em;">us$ 73</span>
                                                        </td>
                                                        <td class="" style="text-align:right">
                                                        <button class=" btn-clickIn btn px-4">
                                                        <a class=" text-white" href="#">??????????????????</a>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
                                                $('#datepicker').datepicker({
                                                    uiLibrary: 'bootstrap4'
                                                 });
                                            </script>
</body>
<footer id="footer">
   <div class="footer-wraper??? bg-white" style="padding:80px 0px">
       <div class="container">
           <div class="row kh-cintent">
               <div class="col-sm-6 col-md-6">
                   <h2>???????????????????????? ???????????????????????????????????????</h2>
                   <ul class="discover triangle hover">
                   <li class="col-xs-12">
                           <a href="">????????????????????????</a>
                       </li>
                       <li class="col-xs-12">
                           <a href="">?????????????????????</a>
                       </li>
                   </ul>
                   <div class="skin-color pt-3">
                       <div class="text-left kh-content">
                           ??????????????????????????????
                           <i class="fas fa-heart" style="font-size:1.3em"></i>
                           ?????????
                        </div>
                       <div>
                          <p>?????????????????????????????? ????????????????????????????????? ???????????????????????????</p></div>
                   </div>
               </div>
               <div class="col-sm-6 col-md-3">
                   <h2>???????????????????????????????????????</h2>
                   <ul>
                       <li class="col-xs-12">
                            <a href="">????????????????????????????????????</a>
                       </li>
                       <li class="col-xs-12">
                           <a href="">?????????????????????????????????????????????????????????</a>
                       </li>
                   </ul>
                   <h5 class="pt-3">??????????????????????????????????????????????????????????????????</h5>
                   <ul>
                      <li class="col-xs-12">
                        <a href="">??????????????????????????????????????????</a>
                      </li> 
                      <li class="col-xs-12">
                        <a href="">?????????????????????????????????????????????????????????????????????????????????????????????</a>
                      </li> 
                      <li class="col-xs-12">
                        <a href="">?????????????????????????????????????????????????????????????????????????????????????????????????????????</a>
                      </li> 
                   </ul>
               </div>
               <div class="col-sm-6 col-md-3">
                    <hr class="bord-no">
                    <address class="contact-details">
                    <a href="tel::+855 69 955 545" class="contact-phone"> +855 69 955 545</a>
                    <br>
                    <a href="mailto::service@khmertrips.com" class="skin-color">service@khmertrips.com</a>
                    </address>
                    <p>?????????&ZeroWidthSpace;?????????&ZeroWidthSpace;?????????: </p>
                    <a class="social-box facebook" href="https://web.facebook.com/khmertrip" target="_blank" data-toggle="tooltip" title="" data-original-title="facebook">
                    <img style="width:30px;" src="https://khmertrips.com/img/facebook.svg"???>
                    </a>
                    <a class="social-box youtube" href="https://www.youtube.com/user/KhmertripsChannel" target="_blank" data-toggle="tooltip" title="" data-original-title="youtube">
                    <img style="width:30px;" src="https://khmertrips.com/img/youtube.svg">
                    </a>
                    <a class="social-box telegram" href="https://t.me/khmertrips" target="_blank" data-toggle="tooltip" title="" data-original-title="telegram">
                    <img style="width:30px;" src="https://khmertrips.com/img/telegram.svg">
                    </a>
                    <a class="social-box instagram" href="https://www.instagram.com/khmertrips" target="_blank" data-toggle="tooltip" title="" data-original-title="instagram">
                    <img style="width:30px;" src="https://khmertrips.com/img/instagram.svg">
                    </a>
                    <hr class="bord-no new-section-xs">
                    <p>?????????&ZeroWidthSpace;??????????????????: </p>
                    <img src="https://khmertrips.com/img/a-3-card.png" style="height: 24px;" alt="">
                </div>
            </div>
            <div class="row">
<div class="col-sm-6 col-md-6 kh-content text-left">
???????????????&ZeroWidthSpace;??????????????????&ZeroWidthSpace;???????????????&ZeroWidthSpace;????????????&ZeroWidthSpace; ??2021<span> ???????????????????????????????????? ?????????????????? ??????????????? ???????????????????????????</span>
</div>
<div class="col-sm-6 col-md-3 col-md-offset-3">
</div>
</div>
<div class="pull-right">
<a id="back-to-top" href="#" class="animated bounce" data-animation-type="bounce" style="animation-duration: 1s; visibility: visible;"><i class="soap-icon-longarrow-up circle"></i></a>
</div>
       </div>
   </div> 
</footer>
</html>