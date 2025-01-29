<?php
$to = "fuki150212@gmail.com";
$subject = "新しい意見・要望が届きました";
$number = $_POST['number'];
$name = $_POST['name'];
$comment = $_POST['comment'];
$body = "学籍番号: $number \n氏名: $name \nご意見:\n$message";
$headers = "From: fuki150212@gmail.com";

if (mail($to, $subject, $body, $headers)) {
    echo "意見・要望を送信しました！";
} else {
    echo "送信に失敗しました。";
}
?>


<!-- F Management System -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>F Management System</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    
    <style>
        
        body {
            padding-top: 55px;
            padding-bottom: 50px;
            background-color: #feffce;
            font-family: 'Open Sans', 'Noto Sans JP', sans-serif;
        }
        h1 {
            font-size: 42.5px;
        }
        h2 {
            padding-top: 20px;
            font-size: 25px;
        }
        h5 {
            font-size: 20px;
        }
        table {
            font-size: 15px;
        }
        .bar {
          display: flex;
          position: fixed;
          padding-left: 15%;
        }
        .custom-container {
            padding-left: 10%;
            padding-right: 10%;
        }
        .starter-template {
            padding: 25px 75px;
            background-color: white;
        }
        .background {
            margin-bottom: 20px;
            position: relative;
            background-image: url('https://pbs.twimg.com/media/GiTqUufaIAAgMex?format=jpg&name=small');
            background-size: cover;
            background-position: center;
        }
        .backgroung-box {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.85);
            z-index: 1;
        }
        .text-container {
            position: relative;
            display: inline-block;
            margin-top: 15px;
            margin-bottom: 40px;
            margin-left: 15px;
            margin-right: 40px;
        }
        .text {
            padding-top: 10px;
            padding-left: 30px;
            padding-right: 100px;
            position: relative;
            z-index: 2;
        }
        .picture {
            width: 100%;
            max-width: 135px;
            display: block;
            margin-left: auto;
            margin-right: 0;
        }
        .lms {
            padding-left: 30px;
            font-size: 25px;
            position: relative;
            z-index: 2;
        }
        .ver {
            padding-bottom: 10px;
            font-size: 17px
        }
        .enter-form {
            padding-bottom: 10px;
        }
        .top-space {
            padding-top: 13px;
        }
        .bottom-space {
            padding-bottom: 6px;
        }
        
        /* タブレット */
        @media (min-width: 813px) and (max-width: 1024px) {
            h1 {
                font-size: 32.5px;
            }
            h2 {
                font-size: 20px;
            }
            table {
                font-size: 12.5px;
            }
            label {
                font-size: 12.5px;
            }
            input::placeholder {
                font-size: 0.8rem;
            }
            textarea::placeholder {
                font-size: 0.8rem;
            }
            .bar {
                padding-left: 7.5%;
            }
            .custom-container {
                padding-left: 7.5%;
                padding-right: 7.5%;
            }
            .starter-template {
                padding: 25px 28px;
                background-color: white;
            }
            .lms {
                font-size: 20px;
            }
            .ver {
                padding-bottom: 10px;
                font-size: 15px
            }
            .enter-form {
                padding-bottom: 15px;
            }
            .small-text {
                font-size: 0.8rem;
            }
            .btn-xs {
                font-size: 0.7rem;
                padding: 0.2rem 0.4rem;
            }
        }
        
        /* スマホとタブレットの間 */
        @media (min-width: 601px) and (max-width: 812px) {
            h1 {
                font-size: 32.5px;
            }
            h2 {
                font-size: 20px;
            }
            h5 {
                font-size: 17px;
            }
            p {
                font-size: 14px;
            }
            table {
                font-size: 12.5px;
            }
            label {
                font-size: 12.5px;
            }
            input::placeholder {
                font-size: 0.8rem;
            }
            textarea::placeholder {
                font-size: 0.8rem;
            }
            .bar {
                padding-left: 5%;
            }
            .custom-container {
                padding-left: 5%;
                padding-right: 5%;
            }
            .starter-template {
                padding: 25px 28px;
                background-color: white;
            }
            .lms {
                font-size: 20px;
            }
            .ver {
                padding-bottom: 10px;
                font-size: 13px
            }
            .enter-form {
                padding-bottom: 15px;
            }
            .small-text {
                font-size: 0.8rem;
            }
            .btn-xs {
                font-size: 0.7rem;
                padding: 0.2rem 0.4rem;
            }
        }
        
        /* スマホ */
        @media (max-width: 600px) {
            h1 {
                font-size: 25px;
            }
            h2 {
                font-size: 15px;
            }
            h5 {
                font-size: 14px;
            }
            p {
                font-size: 12px;
            }
            table {
                font-size: 10px;
            }
            label {
                font-size: 10px;
            }
            input::placeholder {
                font-size: 0.7rem;
            }
            textarea::placeholder {
                font-size: 0.7rem;
            }
            .bar {
                padding-left: 0;
            }
            .text-container {
                position: relative;
                display: inline-block;
                margin-top: 10px;
                margin-right: 20px;
                margin-left: 10px;
                margin-bottom: 20px;
            }
            .custom-container {
                padding-left: 0;
                padding-right: 0;
            }
            .starter-template {
                padding: 10px 15px;
            }
            .text {
                padding-left: 25px;
                padding-right: 100px;
            }
            .picture {
                width: 100%;
                max-width: 80px;
                display: block;
                margin-left: auto;
                margin-right: 0;
            }
            .lms {
                font-size: 15px;
                padding-left: 25px;
            }
            .ver {
                font-size: 11px;
            }
            .enter-form {
                padding-bottom: 0px;
            }
            .small-text {
                font-size: 0.7rem;
            }
            .btn-xs {
                font-size: 0.6rem;
                padding: 0.1rem 0.3rem;
            }
        }
    </style>
</head>
    
<body>
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top bar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FMS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#attendance">Attendance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#assignment">Assignment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#makeup">MakeUp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#test">Test</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#form">Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- main part -->
    <div class="container custom-container">
        <div class="starter-template">
            
            <div class="ver">
                Ver. 2025.01.29. 伊東 颯紀
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="background">
                        <div class="text-container">
                            <div class="backgroung-box"></div>
                            <h1 class="text">F Management System</h1>
                            <a class="lms" href="https://lms-tokyo.iput.ac.jp/" target="_blank">to LMS</a>
                            <a class="lms" href="https://portal.nkz.ac.jp/campusweb/top.do" target="_blank">to Portal</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 出席システム -->
            <h2 id="attendance" class="bottom-space">出席</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3">
                        <img id="url-container0" src="https://t3.ftcdn.net/jpg/05/46/58/04/360_F_546580471_iaj1eDatvGudb9hkL1wYeAaRutNEBXOS.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 id="url-container1" class="card-title">Study yourself</h5>
                            <p id="url-container2" class="card-text">現在開講されている授業はありません</p>
                            <p id="url-container3" class="card-text"><small class="text-body-secondary">...</small></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 課題掲示板 -->
            <h2 id="assignment">課題</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>日時</th>
                        <th>科目</th>
                        <th>内容</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td>1/27 (月)</td>
                        <td>回路・プリ</td>
                        <td>
                            <a href="https://lms-tokyo.iput.ac.jp/mod/assign/view.php?id=76427" target="_blank">
                                課題 5
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>力学</td>
                        <td>課題 B</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>プロマネ</td>
                        <td>キックオフ会議発表</td>
                    </tr>
                    <tr>
                        <td>1/29 (水)</td>
                        <td>コミュツ</td>
                        <td>最終課題 プレゼン</td>
                    </tr>
                    <tr> -->
                        <td>1/30 (木)</td>
                        <td>Python</td>
                        <td>
                            <a href="https://lms-tokyo.iput.ac.jp/mod/assign/view.php?id=76906" target="_blank">
                                第14回 class課題
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2/1 (土)</td>
                        <td>コミュツ</td>
                        <td>
                            <a href="https://lms-tokyo.iput.ac.jp/mod/assign/view.php?id=76921" target="_blank">
                                最終課題「私の取説」提出
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2/2 (日)</td>
                        <td>Python</td>
                        <td>
                            期末課題
                            <a href="https://lms-tokyo.iput.ac.jp/mod/assign/view.php?id=76864" target="_blank">
                                ①レポート
                            </a>
                            <a href="https://lms-tokyo.iput.ac.jp/mod/assign/view.php?id=76865" target="_blank">
                                ②プログラム
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>C++</td>
                        <td>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLScM9TFrhOZW_sc1FdjiYuwUIdS7mdXzmTOQ0iI7gJkKTAb3Qw/viewform" target="_blank">
                                第12回 提出ワーク
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2/3 (月)</td>
                        <td>力学</td>
                        <td>課題 C</td>
                    </tr>
                    <tr>
                        <td>2/4 (火)</td>
                        <td>力学</td>
                        <td>課題 D</td>
                    </tr>
                    <tr>
                        <td>2/4 (火)</td>
                        <td>C++</td>
                        <td>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeC-Yi-jm6K3IC3m0aeKSNIKKu8OH-l4CJalobrxLWv6qOXFg/viewform" target="_blank">
                                第13回 提出ワーク
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <!-- 補講掲示板 -->
            <h2 id="makeup">補講</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>日時</th>
                        <th>時限</th>
                        <th>教室</th>
                        <th>科目</th>
                        <th>時限</th>
                        <th>教室</th>
                        <th>科目</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td>1/28 (火)</td>
                        <td>1, 2限</td>
                        <td>371, 3</td>
                        <td>情報数学</td>
                        <td>3限</td>
                        <td>374, 6</td>
                        <td>Python</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>4限</td>
                        <td>345</td>
                        <td>力学</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> -->
                    <tr>
                        <td>1/29 (水)</td>
                        <td>3限</td>
                        <td>374</td>
                        <td>コミュツ</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1/31 (金)</td>
                        <td>1～4限</td>
                        <td>374, 6</td>
                        <td>C++</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            
            <h2 id="test">テスト</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>日時</th>
                        <th>時限</th>
                        <th>教室</th>
                        <th>科目</th>
                        <th>時限</th>
                        <th>教室</th>
                        <th>科目</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2/6 (木)</td>
                        <td>2限</td>
                        <td>-</td>
                        <td>情報数学</td>
                        <td>4限</td>
                        <td>-</td>
                        <td>C++</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>5限</td>
                        <td>-</td>
                        <td>プロマネ</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2/7 (金)</td>
                        <td>3限</td>
                        <td>-</td>
                        <td>解析学</td>
                        <td>4限</td>
                        <td>-</td>
                        <td>線形代数</td>
                    </tr>
                </tbody>
            </table>
            
            <!-- テスト対策用（未実装） -->
            <h2>テスト対策</h2>
            <p>欲しいものがあれば言ってください</p>
            
            <!-- 意見・要望フォーム -->
            <h2 id="form" class="enter-form">意見・要望</h2>
            <form action="submit.php" method="post">
                <div class="row g-3">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <div class="bottom-space">
                                <label for="number">学籍番号</label>
                            </div>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text small-text" id="addon-wrapping">TK</span>
                                <input type="text" class="form-control" id="number" placeholder="24XXXX" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <div class="bottom-space">
                                <label for="name">氏名</label>
                            </div>
                            <input type="text" class="form-control" id="name" placeholder="Username" name="comment">
                        </div>
                    </div>
                </div>
                <div class="top-space">
                    <div class="form-group">
                        <div class="bottom-space">
                            <label for="comment">コメント</label>
                        </div>
                        <textarea class="form-control" placeholder="現在作成中です..." name="message" id="comment" rows="8"></textarea>
                    </div>
                </div>
                <div class="top-space">
                    <button type="submit" class="btn btn-outline-secondary btn-sm btn-xs">送信</button>
                </div>
            </form>
            
            <img src="https://pbs.twimg.com/media/GiROrC_aEAAFxMx?format=jpg&name=360x360"
                class="picture">
        </div>
    </div>
    
    <script>
            const urlContainer0 = document.getElementById('url-container0');
            const urlContainer1 = document.getElementById('url-container1');
            const urlContainer2 = document.getElementById('url-container2');
            const urlContainer3 = document.getElementById('url-container3');
            const currentTime = new Date();
            const day = currentTime.getDay();
            const hour = currentTime.getHours();
            const minute = currentTime.getMinutes();
            
            /* 水曜日 */
            if (day == 1) {
                /* 3限 13:10 - 14:50 */
                if (hour == 17 && 1 <= minute && minute <= 59) {
                    urlContainer0.src = "https://pbs.twimg.com/media/GiZ60bvbkAA7k_T?format=jpg&name=small";
                    urlContainer1.innerHTML = '<h5 class="card-title"><a href="https://lms-tokyo.iput.ac.jp/mod/attendance/view.php?id=72622" target="_blank">コミュニケーションツールD（2024_火曜2限_IT1D）</a></h5>';
                    urlContainer2.innerHTML = '<p class="card-text">後期(24_学部共)</p>';
                    urlContainer3.innerHTML = '<p class="card-text"><small class="text-body-secondary">13:20 - 14:50</small></p>';
                }
            }

            /* 金曜日 */
            if (day == 3) {
                /* 1限 9:05 - 4限 16:30 */
                if ((hour == 9 && minute >= 5) || (10 <= hour && hour <= 17) || (hour == 18 && minute <= 30)) {
                    urlContainer0.src = "https://pbs.twimg.com/media/Gicsl-QbcAAMaVZ?format=jpg&name=small";
                    urlContainer1.innerHTML = '<h5 class="card-title"><a href="https://lms-tokyo.iput.ac.jp/mod/attendance/view.php?id=73031" target="_blank">組込みC, C++言語B（2024_月曜1・2限_IT1B/IT1D）</a></h5>';
                    urlContainer2.innerHTML = '<p class="card-text">後期(24_共_IT)</p>';
                    urlContainer3.innerHTML = '<p class="card-text"><small class="text-body-secondary">9:15 - 16:30</small></p>';
                }
            }
    </script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
    
</html>