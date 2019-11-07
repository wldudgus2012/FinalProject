    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width", initial-scale="1">
        <title>ZingSoft Demo</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/codingBooster.css">
        <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    </head>
     <style>
            html,
            body {
                height: 100%;
                width: 100%;
                margin: 0;
                padding: 0;
            }
     
            #myChart {
                height: 100%;
                width: 100%;
                min-height: 150px;
            }
     
            .zc-ref {
                display: none;
            }
     
            zing-grid[loading] {
                height: 800px;
            }

            div.cloud {

            }

            div.gtrend {
                padding-top: 400px;
            }

            div.gtrendquery {

            }

            div.news {
                padding-bottom: 200px;
            }
        </style>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">코딩 부스터</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">소개<span class="sr-=only"></span></a></li>
                        <li><a href="instructor.html">강사진</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">강의<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="lecture.html?lectureName=C">C언어</a></li>
                                <li><a href="lecture.html?lectureName=Java">자바</a></li>
                                <li><a href="lecture.html?lectureName=Android">안드로이드</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="내용을 입력하세요.">
                        </div>
                        <button type="submit" class="btn btn-default">검색</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">접속하기<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="loginForm.html">로그인</a></li>
                                <li><a href="registerForm.html">회원가입</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?
            $current_member = '2017년 날강두 축구 남자';
        ?>
        <div class="cloud">
            <div class="col-xs-7">
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;워드 클라우드 #축구                        
                <div id="myChart"></div>
                    <script>
                        ZC.LICENSE = ["b55b025e438fa8a98e32482b5f768ff5"];
                       var myConfig = {
            "graphset": [{
                "type": "wordcloud",
                "options": {
                    "style": {
                        "tooltip": {
                            visible: true,
                            text: '%text: %hits'
                        }
                    },
                    "words": [{
                            "text": "<? echo($current_member);?>",
                            "count": "6000"
                        },
                        {
                            "text": "바레인",
                            "count": "6000"
                        },
                        {
                            "text": "자카르타",
                            "count": "6000"
                        },
                        {
                            "text": "조현우",
                            "count": "6000"
                        },
                        {
                            "text": "황의조",
                            "count": "6000"
                        },
                        {
                            "text": "아시안 게임 야구",
                            "count": "6000"
                        },
                        {
                            "text": "말레이시아 축구 국가대표팀",
                            "count": "6000"
                        },
                        {
                            "text": "키르기스스탄",
                            "count": "6000"
                        },
                        {
                            "text": "2019년 AFC 아시안컵",
                            "count": "6000"
                        },
                        
                        {
                            "text": "킹스컵",
                            "count": "6000"
                        },
                        {
                            "text": "아시안 게임 축구",
                            "count": "3100"
                        },
                        {
                            "text": "AFC 아시안컵",
                            "count": "2700"
                        },
                        {
                            "text": "FIFA U-20 월드컵",
                            "count": "2350"
                        },
                        {
                            "text": "아시안 게임",
                            "count": "1650"
                        },
                        {
                            "text": "결승전",
                            "count": "1200"
                        },
                        {
                            "text": "2018년 자카르타 팔렘방 아시안 게임",
                            "count": "750"
                        },
                        {
                            "text": "이강인",
                            "count": "750"
                        },
                        {
                            "text": "칠레",
                            "count": "750"
                        },
                        {
                            "text": "2014년 FIFA 월드컵 결승전",
                            "count": "700"
                        },
                        {
                            "text": "베트남 전쟁",
                            "count": "650"
                        },
                        {
                            "text": "에콰도르",
                            "count": "600"
                        },
                        {
                            "text": "아랍에미리트",
                            "count": "450"
                        },
                        {
                            "text": "카타르",
                            "count": "400"
                        },
                        {
                            "text": "아르헨티나",
                            "count": "400"
                        },
                        {
                            "text": "베트남 축구 국가대표팀",
                            "count": "350"
                        }
                    ]
                }
            }]
        };
 
        zingchart.render({
            id: 'myChart',
            data: myConfig,
            height: 400,
            width: '100%'
        });
    </script>
                        </div>
                    </div>
                </div>
            </div>

        <div class="gtrendquery">
            <div class="col-xs-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1845_RC03/embed_loader.js"></script>
                    <script type="text/javascript">
                        var foo = "야구";
                        trends.embed.renderExploreWidget("RELATED_QUERIES", {"comparisonItem":[{"keyword":foo,"geo":"KR","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"q=%EC%B6%95%EA%B5%AC&geo=KR&date=today 12-m","guestPath":"https://trends.google.co.kr:443/trends/embed/"});
                    </script> 
                </div> 
            </div> 
        </div> 

        <hr>

    <div class="gtrend">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                       <div class="panel-body">
                             <div class="embed-responsive embed-responsive-16by9">
                                 <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1845_RC03/embed_loader.js">
                                 </script>
                                 <script type="text/javascript">
                                  trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"축구","geo":"KR","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"q=%EB%A7%B9%EA%B5%AC&geo=KR&date=today 12-m","guestPath":"https://trends.google.co.kr:443/trends/embed/"});
                                  </script>
                             </div>
                        </div>
                </div>
            </div> 
        </div>
    </div>

        <footer style="background-color: #000000; color: #ffffff">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col-sm-2" style="text-align: center;"><h5>Copyright &copy; 2019</h5><h5>지영현(YoungHyun Ji)<br>고경수(Gyungsoo Ko)</h5></div>
                    <div class="col-sm-4"><h4>대표자 소개</h4><p>2012151040 지영현<br>2013000000 고경수</p></div>
                    <div class="col-sm-2"><h4 style="text-align: center;">내비게이션</h4>
                        <div class="list-group">
                            <a href="index.html" class="list-group-item">소개</a>
                            <a href="insturctor.html" class="list-group-item">강사진</a>
                            <a href="lecture.html" class="list-group-item">강의</a>
                        </div>
                    </div>
                    <div class="col-sm-2"><h4 style="text-align: center;">SNS</h4>
                        <div class="list-group">
                            <a href="https://www.facebook.com/dongbin.na" class="list-group-item">페이스북</a>
                            <a href="https://www.youtube.com" class="list-group-item">유튜브</a>
                            <a href="https://www.naver.com" class="list-group-item">네이버</a>
                        </div>
                    </div>
                    <div class="col-sm-2"><h4 style="text-align: center;"><span class="glyphicon glyphicon-ok"></span>&nbsp;by 지영현</h4></div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
    </html>

