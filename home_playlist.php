<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">	
<title>2022九合一大選</title>
<meta name="Keywords" content="">
<meta name="description" content="">
<link rel="icon" href="" type="image/icon">

<!--共用CSS-->
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/base.css" media="screen">
<!--共用CSSed-->

<link rel="stylesheet" href="https://cc.tvbs.com.tw/events/st/events/election2022/css/election2022_v01.css">
<script type="text/javascript" src="https://cc.tvbs.com.tw/events/st/events/election2022/js/election2022_v01.js"></script>
<!--js Link ed-->

<!--本頁樣式-->
<style>
    
</style>
<!--本頁樣式ed-->
<!--本頁js-->	
<script type="text/javascript">
$(document).ready(function(){

// 輪播-頭條
    $('.vision ul').owlCarousel({
        center: true,
        items:3,
        loop:true,
        nav:true,
        margin:30,smartSpeed:800,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        navText:['',''],
        video:true,
        responsive: { 
            320: { items: 1, center: false, nav:false, margin:0}, 
            767: { items: 3, center: true , nav:true, margin:30} 
        }
    });

    // 輪播-影音
    var video_len=$('.video li').length;
    console.log(video_len);
    if(video_len>1){
        $('.video ul').owlCarousel({
            center: true,
            items:1,
            loop:true,
            nav:true,
            margin:30,smartSpeed:800,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            navText:['',''],
            video:true,
        });
    }
    //倒數計時
    /* Simple Timer. The countdown to 20:30 2100.05.09
    --------------------------------------------------------- */
    $('.countdown .day').syotimer({
            year: 2022,
            month:11,
            day: 26,
            hour:0,
            minute:0,
        });

    /* Timer with Head and Foot. Countdown is over 
    --------------------------------------------------------- */
});

</script>

<!--本頁js ed-->		
</head>
<body>
<!--container主架構-->
<!--GO~Top-->
<div id="back"> 
<div id="back-img1"><img src="images/navigate_top.svg" alt="top"></div>
</div>
<!--GO~Top end-->
<div class="container">
    <h1 style="display: none;">2022九合一大選</h1>
<!--header -->
<header>
    <div class="head">
        <div class="logo">
            <a href="https://news.tvbs.com.tw/" target="_blank" ><img src="images/tvbs_logo.png" alt="logo"/></a>
        </div>
        <div class="community">
            <ul class="flex">
                <li><a href="##"><img src="images/fb.svg" alt="fb"/></a></li>
                <li><a href="##"><img src="images/line.svg" alt="line"/></a></li>
            </ul>
        </div>
    </div>
    <div class="countdown">
        <div class="box">
            <span>倒數</span><span class="day">100</span>
        </div>
    </div>
    <div class="head_bg pc"><img src="images/election_pc.jpg" alt="view"/></div>
    <div class="head_bg mo"><img src="images/election_m.jpg" alt="view"/></div>
</header>
<nav>
    <ul>
        <li class="act"><a href="index.html">選戰新聞</a></li>
        <li><a href="playlist.html">影音專區</a></li>
        <li><a href="https://news.tvbs.com.tw/pack/packdetail/598" target="_blank">TVBS民調</a></li>
        <li><a href="https://play.google.com/store/apps/details?id=com.tvbs.news" target="_blank">APP下載</a></li>
    </ul>
</nav>
<!--header ed-->
<!--main-->
<main>
    <!-- 主視覺 -->
    <div class="vision">
        <ul>
            <li>
                <a href="##">
                    <div class="overlay-color"></div>
                    <div class="shadow"></div>
                    <div class="img"><img src="images/p01.jpg" alt='img'/></div>
                    <h3 class="txt"><p>誰來幫陳時中操盤？他曝最佳人選：可複製2014白色旋風</p></h3> 
                </a>		
            </li>
            <li>
                <a href="##">
                    <div class="overlay-color"></div>
                    <div class="shadow"></div>
                    <div class="img"><img src="images/p02.jpg" alt='img'/></div>
                    <h3 class="txt"><p>誰來幫陳時中操盤？他曝最佳人選：可複製2014白色旋風</p></h3> 
                </a>		
            </li>
            <li>
                <a href="##">
                    <div class="overlay-color"></div>
                    <div class="shadow"></div>
                    <div class="img"><img src="images/p03.jpg" alt='img'/></div>
                    <h3 class="txt"><p>誰來幫陳時中操盤？他曝最佳人選：可複製2014白色旋風</p></h3> 
                </a>		
            </li>
            <li>
                <a href="##">
                    <div class="overlay-color"></div>
                    <div class="shadow"></div>
                    <div class="img"><img src="images/p04.jpg" alt='img'/></div>
                    <h3 class="txt"><p>誰來幫陳時中操盤？他曝最佳人選：可複製2014白色旋風</p></h3> 
                </a>		
            </li>
        </ul>
    </div>
    <!-- 主視覺 ed-->
    <!-- 錨點 -->
    <div class="anchor_point_box">
        <div class="anchor_point">
            <ul>
                <li class="act"><a href="##">六都選情</a></li>
                <li><a href="##">議題包名稱</a></li>
                <li><a href="##">選情焦點</a></li>
                <li><a href="##">影音專區</a></li>
                <li><a href="##">評論專區</a></li>
            </ul>
        </div>
    </div>
    <!-- 錨點 ed-->

    <!-- 標題 -->
    <div class="title_box scroll1">
       <h2>六都選情</h2>
    </div>
    <!-- 標題 ed-->

    <!-- 六都選情 -->
    <div class="six_city">
        <div class="tag">
            <ul>
                <li class="act"><a href="##">總覽</a></li>
                <li><a href="##">台北市</a></li>
                <li><a href="##">新北市</a></li>
                <li><a href="##">桃園市</a></li>
                <li><a href="##">台中市</a></li>
                <li><a href="##">台南市</a></li>
                <li><a href="##">高雄市</a></li>
            </ul>
        </div>
        <div class="frame_box">
            <div class="article_box">
                <ul>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="list_play"></div>
                                <div class="overlay-color"></div>
                                <img src="images/p01.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>                                       
                                <div class="time">1分鐘前</div>
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">  
                                <div class="list_play"></div>                              
                                <div class="overlay-color"></div>
                                <img src="images/p02.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">1分鐘前</div> 
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p03.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">1分鐘前</div>
                            </div>  
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p04.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">1分鐘前</div>
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p01.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>                                       
                                <div class="time">1分鐘前</div>
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p02.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">1分鐘前</div> 
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p03.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">2021/12/15 11:31</div>
                            </div>  
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p04.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">2021/12/15 11:31</div>
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="list_play"></div>
                                <div class="overlay-color"></div>
                                <img src="images/p01.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>                                       
                                <div class="time">1分鐘前</div>
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">  
                                <div class="list_play"></div>                              
                                <div class="overlay-color"></div>
                                <img src="images/p02.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">1分鐘前</div> 
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p03.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">1分鐘前</div>
                            </div>  
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p04.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">1分鐘前</div>
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p01.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>                                       
                                <div class="time">1分鐘前</div>
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p02.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">1分鐘前</div> 
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p03.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">2021/12/15 11:31</div>
                            </div>  
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p04.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">2021/12/15 11:31</div>
                            </div> 
                        </a>             
                    </li>
                </ul> 
                <div class="more_box"><a href="##">看更多</a></div>
            </div>
        </div>
    </div>
    <!-- 六都選情 ed-->

    <!-- 標題 -->
    <div class="title_box scroll1">
        <h2>議題包名稱</h2>
    </div>
    <!-- 標題 ed-->

    <!-- 議題包 -->
    <div class="issue_pack">
        <div class="frame_box">
            <div class="pack">
                <a href="##">
                    <div class="img">
                        <div class="overlay-color"></div>
                        <img src="images/p02.jpg" alt='img'/>
                    </div>
                    <div class="txt_box">
                        <p class="title">陳時中進退兩難！她分析「雙北提名雙陳」：蔡英文梭哈了陳時中進退兩難！她分析「雙北提名雙陳」：蔡英文梭哈了陳時中進退兩難！她分析「雙北提名雙陳」：蔡英文梭哈了陳時中進退兩難！她分析「雙北提名雙陳」：蔡英文梭哈了陳時中進退兩難！她分析「雙北提名雙陳」：蔡英文梭哈了</p>
                        <p class="txt">2022九合一大選即將在年底登場，但民進黨雙北市長布局仍未定，引發外界議論。國民黨台北市議員徐巧芯認為，現在綠營面對的提名難題，可以稱為「時中矛盾 Clock paradox 」，若民進黨最終提名「雙陳」出戰雙北，就是「高風險、高報酬」的選擇，代表總統蔡英文「All in梭哈2024佈局」。</p>
                    </div> 
                </a>
            </div>
        </div>
    </div>
    <!-- 議題包 ed-->

    <!-- 標題 -->
    <div class="title_box scroll1">
        <h2>選情焦點</h2>
    </div>
    <!-- 標題 ed-->

    <!-- 選情焦點 -->
    <div class="focus_box">
        <div class="frame_box">
            <div class="article_box">
                <ul>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p01.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>                                       
                                <div class="time">1分鐘前</div>
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p02.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">1分鐘前</div> 
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p03.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">1分鐘前</div>
                            </div>  
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p04.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">1分鐘前</div>
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p01.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>                                       
                                <div class="time">1分鐘前</div>
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p02.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">1分鐘前</div> 
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p03.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">2021/12/15 11:31</div>
                            </div>  
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p04.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>
                                <div class="time">2021/12/15 11:31</div>
                            </div> 
                        </a>             
                    </li>
                </ul> 
                <div class="more_box"><a href="##">看更多</a></div>
            </div>
        </div>
    </div>
    <!-- 選情焦點 ed-->

    <!-- 標題 -->
    <div class="title_box scroll1">
        <h2>影音專區</h2>
    </div>
    <!-- 標題 ed-->

    <!-- 影音專區 -->    
        <div class="frame_box">
            <div class="video_box">
                <div class="video">
                    <ul>
                        <li>
                            <a href="##">
                                <div class="img">
                                    <div class="list_play"></div>
                                    <div class="overlay-color"></div>
                                    <img src="images/p01.jpg" alt='img'/>
                                </div>
                                <h3 class="txt">誰來幫陳時中操盤？他曝最佳人選：可複製2014白色旋風</h3>
                                <div class="time">2021/12/15 11:31</div>
                            </a>
                            <div class="more_box"><a href="##">看更多</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <!-- 影音專區 ed-->

    <!-- 標題 -->
    <div class="title_box scroll1">
        <h2>評論專區</h2>
    </div>
    <!-- 標題 ed-->
    <!-- 評論專區 -->
    <div class="comment_box">
        <div class="frame_box">
            <div class="comment">
                <ul>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p01.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>                                       
                                <div class="time">1分鐘前</div>
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p02.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>                                       
                                <div class="time">1分鐘前</div>
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p03.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>                                       
                                <div class="time">1分鐘前</div>
                            </div> 
                        </a>             
                    </li>
                    <li>  
                        <a href="##">
                            <div class="img">
                                <div class="overlay-color"></div>
                                <img src="images/p04.jpg" alt='img'/>
                            </div>
                            <div class="txt_box">
                                <h3 class="txt">日本停辦「東京奧運」連署３天 超過30萬人響應日本停辦「東京奧運」連署３天 超過30萬人響應</h3>                                       
                                <div class="time">1分鐘前</div>
                            </div> 
                        </a>             
                    </li>
                </ul>
            </div>
            <div class="more_box"><a href="##">看更多</a></div>
        </div>
    </div>
    <!-- 評論專區 ed-->
</main>
<!--main ed-->
<!--footer-->
<footer>
    <div class="frame_box">
        <small> © TVBS Media Inc. All Rights Reserved.<br>台北市內湖區瑞光路451號 | 聯利媒體股份有限公司 </small>
    </div>    
</footer>
<!--footer ed-->
</div>
<!--container主架構ed-->
</div>
<script type="text/javascript">
 $(document).ready(function(){
    function scroll(){
    // 錨點位置
    var $anchor_point_top=$('.anchor_point').offset().top;
    var lastScrollTop = 0;
    var bottom_h='';
        $(window).scroll(function(){

            if ($(window).scrollTop()>$anchor_point_top){
                $('.anchor_point_box').css({
                    position:'fixed',              
                    'box-shadow':'rgba(0,0,0,.1) 0px 2px 3px',
                    
                });
                $('.anchor_point').css({padding:'20px 15px'});
            }else{
                $('.anchor_point_box').css({
                    position:'relative',
                    'box-shadow':'rgba(0,0,0,0) 0px 2px 3px',
                });
                $('.anchor_point').css({padding:'20px 15px'});
            }
        });

    //錨點滑動//
    var $el = $(scrollableElement('html', 'body'));
        var speed = 550;
        var anchor_point_h=$('.anchor_point').outerHeight(true);
        $('.scroll1').each(function(i) {
            var $scroll_top=$(this).offset().top;
            $('.anchor_point ul li').eq(i).click(function() {
                event.preventDefault();
                $el.stop().animate({ scrollTop: $scroll_top -anchor_point_h -80 }, speed); 
            });
        });
    
            function scrollableElement() {
            var i, len, el, $el, scrollable;
            for (i = 0, len = arguments.length; i < len; i++) {
                el = arguments[i];
                $el = $(el);
                if ($el.scrollTop() > 0) {
    
                    return el;
                } else {
                    $el.scrollTop(1);
                    scrollable = $el.scrollTop() > 0;
                    $el.scrollTop(0);
                    if (scrollable) {
                        return el;
                    }
                }
            }
            return []; 
        }
    //錨點滑動//
     }
     setTimeout(function(){
        scroll()
        },500);
    });    
    </script>
</body>
</html>