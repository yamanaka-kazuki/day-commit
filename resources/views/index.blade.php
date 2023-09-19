<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
        <style>
            .output-status-text {
                text-align: center;
                font-size: 40px;
                font-weight: bold;
                padding-top: 10px;
            }

            .btn {
                height: 36px;
                border-radius: 4px;
            }

            .card-body {
                margin-bottom: -20px;
            }
        </style>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="#">day commit</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"
                                >Home <span class="sr-only">(current)</span></a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div id="container">
                <div class="top-section d-flex justify-content-around mt-5">
                    <p style="font-size: 24px; font-weight: bold">
                        ダッシュボード
                    </p>
                    <button type="button" class="btn btn-primary btn-sm">
                        ＋ 今日のアウトプット
                    </button>
                </div>

                <div class="status-section d-flex justify-content-center mt-3">
                    <div class="card mb-3" style="width: 18rem">
                        <div class="card-body">
                            <h5 class="card-title text-center font-weight-bold">
                                アウトプット合計日数
                            </h5>
                            <p class="output-status-text">20日</p>
                        </div>
                    </div>
                    <div class="card mb-3" style="width: 18rem">
                        <div class="card-body">
                            <h5 class="card-title text-center font-weight-bold">
                                アウトプット継続日数
                            </h5>
                            <p class="output-status-text">12日</p>
                        </div>
                    </div>
                    <div class="card mb-3" style="width: 18rem">
                        <div class="card-body">
                            <h5 class="card-title text-center font-weight-bold">
                                今日の達成状況
                            </h5>
                            <p class="output-status-text">✅</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
