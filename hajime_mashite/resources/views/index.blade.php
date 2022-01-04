<!DOCTYPE html>
<html lang=ja>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
    <script type="text/javascript" src="js/index.js"></script>
    <title>多賀谷源</title>
</head>

<body>
    <div id="surface">
        <div id="card">
            <img src="img/test.png" alt="" title="学生証">
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
        <p class="title">Thanks for visiting my page!</p>
        <div id="picture">
            <img src="img/test.png" alt="" title="学生証">
        </div>
        <div class="about contents">
            <ul>
                <lh>about me</lh>
                <li>ヒトノオト</li>
                <li>なりきれ，標識さん！</li>
                <li>しずのす</li>
                <p>detail→</p>
            </ul>
        </div>
        <div class="portfolio contents">
            <ul>
                <lh>portfolio</lh>
                @foreach($data_portfolio as $item)
                <li class="fukidashi_trigger">{{$item->portfolio_name}}
                    <span class="fukidashi"><?=$item->portfolio_detail?></span>
                </li>
                @endforeach
                <p>github→</p>
            </ul>
        </div>

        <div class="skills contents">
            <ul>
                <lh>skills</lh>
                @foreach($data_skill as $item)
                <li class="fukidashi_trigger">{{$item->skill_name}}
                    <span class="fukidashi"><?=$item->skill_detail?></span>
                </li>
                @endforeach

            </ul>
        </div>

        <div class="background"></div>
    </div>
</body>

</html>