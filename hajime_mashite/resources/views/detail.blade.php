<!DOCTYPE html>
<html lang=ja>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/detail.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/fadein.js"></script>
    <title>hajime-detail</title>
</head>

<body>
    <div id="main">
        <nav id="navbar" class="navbar navbar-dark bg-dark">
            <ul class="nav nav-pills">
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" style="color:white" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <i style="color:white;font-size: 2rem" class="bi bi-list-ul"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#item-1" style="font-weight: bold">これまでの私</a></li>
                        <li><a class="dropdown-item" href="#item-1-1">中学生</a></li>
                        <li><a class="dropdown-item" href="#item-1-2">高校生</a></li>
                        <li><a class="dropdown-item" href="#item-1-3">大学生</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="#item-2" style="font-weight: bold">これからの私</a></li>
                        <li><a class="dropdown-item" href="#item-2-1">目標</a></li>
                        <li><a class="dropdown-item" href="#item-2-2">キャリアプラン</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <a id="return" class="bg-dark" href="/">
        <i class="bi bi-arrow-return-left" style="color:white;font-size:2rem"></i>
        </a>
        <h1 class="title">About me</h1>
        <div class="container">
            <h2 id="item-1">これまでの私</h2>

            <div id="item-1-1" class="row p-3 slideConts">
                <div class="col-md-4   text-center"><img src="img/jhigh.jpg" class="w-50 h-auto"></div>
                <div class="col-md-8">
                    <h3>中学生</h3>
                    <p >
                        当時から身長が低く体も細かった私ですが、誰よりも根性はありました。
                        仲の良かった先輩に憧れてバスケ部に入部しますがプレーはあまり上達しませんでした。
                        ですが、スタミナだけは他の部員と比べてもかなり高かったのはちょっとした自慢です。<br>
                        ゲームが好きだったこともあり漠然とゲームプログラマーに憧れを持つようになった結果、情報処理科がある高校への入学を決意しました。<br>
                        <span>#周りを見る力</span>
                        <span>#スタミナ</span>
                        <span>#根性</span>
                        <span>#意外と体育会系？</span>
                    </p>
                </div>
            </div>

            <div class="row border-bottom"></div>

            <div id="item-1-2" class="row p-3 slideConts">
                <div class="col-md-4   text-center"><img src="img/high.jpg" class="w-75 h-auto" loading=”lazy”></div>
                <div class="col-md-8">
                    <h3>高校生</h3>
                    <p>
                        高校部活動ではワープロ部と応援団に掛け持ちで所属しました。
                        ワープロ部では取得できる資格と必要なスキルをすべて吸収した後1年で退部し、応援団に専念できるようにしました。
                        応援団ではどうすれば選手に声援を届けれるかを考えた結果、自分一人で声を出すのではなく観客を使うべきだと考え観客の盛り上げを極めました。
                        学習面では、友人に勉強を教える機会が多くあったことから情報の高校教員になることを決め、現在の大学への入学を決意しました。
                        ですが、進学先決定後に見た理想と現実の乖離から高校教員への道を考え直すようになりました。<br>
                        <span>#副団長</span>
                        <span>#相変わらずの根性</span>
                        <span>#胆力とコミュ力</span>
                        <span>#ワープロ結構早い</span>
                        <span>#かつての夢</span>
                    </p>
                </div>
            </div>

            <div class="row border-bottom"></div>

            <div id="item-1-3" class="row p-3 slideConts">
                <div class="col-md-4   text-center"><img src="img/univ.jpg" class="w-75 h-auto" loading=”lazy”></div>
                <div class="col-md-8">
                    <h3>大学生</h3>
                    <p>
                        1年次はすべての授業を全力で受け、もっと学力の高い大学への編入するために勉強をしていました。
                        ですが、良い成績を取り続けていた事から特別講義へ参加することができ、その講義を履修したくなったので編入をやめました。
                        特別講義「実践ベンチャービジネス」では地元企業の協力の下、学生向け情報サイトの開発運営をチームで行い、
                        全体の管理、タスクの振り分けを行いつつフロントエンドの開発を進め、新機能「就活」の機関となるシステムを開発しました。
                        ほかにも研究室主導の子供向けインタラクション作品を制作するプロジェクトにも参加し、そこでもチーム開発の経験を積みました。<br>
                        <span>#チーム開発楽しい</span>
                        <span>#正直その場の勢いもある進路プラン</span>
                        <span>#時々バスケサークルに乱入する</span>
                        <span>#毎日が楽しい</span>
                    </p>
                </div>
            </div>
            <br><br><br>
            <div class="row border-bottom border-3"></div>

            <h2 id="item-2">これからの私</h2>
            <div id="item-2-1" class="row p-3 slideConts">
                <div class="col-md-4   text-center"><img src="img/goal.jpg" class="w-50 h-auto"></div>
                <div class="col-md-8">
                    <h3>目標</h3>
                    <p>
                        企業と現場を助けたい！<br>
                        アルバイトで使用していたツール,システムが使いにくかったことから、自分がそういったシステムを作りたいと考えるようになりました。
                        誰よりも実際に使う人のことを考えて仕事に向き合って行きます。<br>
                        <span>#多くの人にDX化の恩恵を</span>
                        <span>#日々是精進</span>
                    </p>
                </div>
            </div>

            <div class="row border-bottom"></div>

            <div id="item-2-2" class="row p-3 slideConts">
                <div class="col-md-4   text-center"><img src="img/career.jpg" class="w-50 h-auto"></div>
                <div class="col-md-8">
                    <h3>キャリアプラン</h3>
                    <p>
                        チーム開発をもっとしたい！<br>
                        最終的な目標はPMです。より多くの人と繋がりながらチームで楽しく仕事ができるようになれればいいな、と思っています。
                        ですが、スキルもなく管理職になるというのは絶対に嫌です。メンバーを助け、開発でも全体を引っ張れるような人物になりたいです。<br>
                        <span>#みんな楽しく</span>
                        <span>#フルスタックプロジェクトマネージャー（？）</span>
                    </p>
                </div>
            </div>
            <div class="background"></div>
        </div>
</body>

</html>