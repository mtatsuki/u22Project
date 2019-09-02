{{--
    /**
    add blade
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
    
            <title>add blade</title>
            <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        </head>
        <body class="add">
            <header>
                <h1>JR大阪駅エリア</h1>
            </header>
            <main class="add__main_contents">
                    <form class="add__answer_box" action="post">
                        <p>名前</p>
                        <input type="text" name="username" id="username">
                        <p>質問内容</p>
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