{{--
    /**
    show blade
     */
    --}}
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <meta name="author" content="">
            <!--キャッシュを残さない対策-->
            <meta http-equiv="Pragma" content="no-cache">
            <meta http-equiv="Cach-Content" content="no-store">
    
            <title>show blade</title>
            <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        </head>
        <body class="show">
            <header>
                <h1>JR大阪駅エリア</h1>
            </header>
            <main class="show__main_contents">
                <div class="show__question_box">
                    <h2>User Name</h2>
                    <p>サンプルテキスト</p>
                </div>
                <ul class="show__contents_list">
                    <li>
                        <a href="">
                            <p class="user_name">User Name</p>
                            <p class="sample_text">サンプルテキスト</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <p class="user_name">User Name</p>
                            <p class="sample_text">サンプルテキスト</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <p class="user_name">User Name</p>
                            <p class="sample_text">サンプルテキスト</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <p class="user_name">User Name</p>
                            <p class="sample_text">サンプルテキスト</p>
                        </a>
                    </li>
                </ul>
                <form class="show__answer_box" action="post">
                    <p>回答</p>
                    <textarea name="answer_text"></textarea>
                    <input type="button" value="送信">
                </form>
            </main>
            <footer>
                <p>
                    <a href="/project_file/u22/u22Project/public/"></a>
                </p>
            </footer>
        </body>
    </html>