<!DOCTYPE html>
<html lang=ja>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/surface.css">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
    <script type="text/javascript" src="js/erase.js"></script>
    <title>hajime</title>
</head>

<body>
    <div id="surface">
        <div id="card">
            <img src="img/me.jpg" alt="" title="学生証">
            <div class="arrow">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <p class="click">click me</p>
        </div>
    </div>
    <div id="main" class="erase">
        <h1 class="title">Thanks for visiting my page!</h1>
        <p class="explain">please mouse over the content...</p>
        <div id="picture">
            <img src="img/yeah.jpg" alt="" title="学生証">
        </div>
        <div class="skills contents">
            <ul>
                <lh>skills</lh>
                @foreach($data_skill as $item)
                <li class="fukidashi_trigger">{{$item->skill_name}}
                    <span class="fukidashi"><?= $item->skill_detail ?></span>
                </li>
                @endforeach

            </ul>
        </div>
        <div class="portfolio contents">
            <ul>
                <lh>portfolios</lh>
                @foreach($data_portfolio as $item)
                <li class="fukidashi_trigger">{{$item->portfolio_name}}
                    <span class="fukidashi"><?= $item->portfolio_detail ?></span>
                </li>
                @endforeach
                <a href="https://github.com/stars/tagaya-hajime/lists/portfolio" target="_blank" rel="noopener noreferrer">
                    <p>github→</p>
                </a>
            </ul>
        </div>
        <div class="about contents">
            <ul>
                <lh>about me</lh>
                @foreach($data_about as $item)
                <li class="fukidashi_trigger">{{$item->about_name}}
                    <span class="fukidashi"><?= $item->about_detail ?></span>
                </li>
                @endforeach
                <a href="/detail" target="_blank" rel="noopener noreferrer">
                    <p class ="fukidashi_trigger">details→<span class="fukidashi">クリックしてもっと多賀谷のことを知ってください！</span></p>
                </a>
            </ul>
        </div>




        <div class="background"></div>
    </div>
</body>

</html>