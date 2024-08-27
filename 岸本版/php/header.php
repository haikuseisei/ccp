<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://plot-hub.com/code_example/lib/css/reset.css">
        <meta name="robots" content="noindex,nofollow" />
        
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff;
        }

        header {
            background-color: #ade0ee;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 1rem;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        .hero {
            background-color: #e0f7fa;
            padding: 2rem;
            text-align: center;
        }

        .slider {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 1rem;
            margin-top: 1rem;
        }

        .project-card {
            background-color: white;
            border: 1px solid #ddd;
            padding: 1rem;
            border-radius: 5px;
            text-align: left;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .project-card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .projects {
            padding: 2rem;
        }

        footer {
            background-color: #ade0ee;
            color: white;
            text-align: center;
            padding: 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        #loadMore {
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            background-color: #ade0ee;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        </style>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header class="header">
            <div class="header-container">

                <h1 class="header-logo">
                    <a href="#" id="logo" class="logo-link">
                        <img src="/images/logo/logo.png" alt="">
                    </a>
                </h1>

                <nav id="hb-menu" class="nav-menu">
                    <ul class="menu-list">          
                        <li class="menu-item"><a href="#" class="menu-link strong">プロジェクトを始める</a></li>          
                        <li class="menu-item"><a href="#" class="menu-link strong"><strong>プロジェクトをさがす</strong></a></li>         
                        <li class="menu-item"><a href="#" class="menu-link strong"><strong>新規会員登録/ログイン</strong></a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </body>
</html>