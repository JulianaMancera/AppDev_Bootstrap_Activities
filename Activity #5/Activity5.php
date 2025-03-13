<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity5</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
    <body>
        <h1>Activity 5</h1>
        <div class="container">
        <ul class="list-inline">
            <li><a href="#" data-toggle="popover" data-placement="top" title="Top popover" data-content="Some content here in popover">Top</a></li>
            <li><a href="#" data-toggle="popover" data-placement="bottom" title="bottom popover" data-trigger="focus" data-content="Some content here in popover">Bottom</a></li>
            <li><a href="#" data-toggle="popover" data-placement="left" title="left popover" data-trigger="focus" data-content="Some content here in popover">Left</a></li>
            <li><a href="#" data-toggle="popover" data-placement="right" title="right popover">Right</a></li>
        </ul>
        <ul class="list-inline">
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Top Tool Tip">Top</a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="bottom Tool Tip">Bottom</a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="left" title="left Tool Tip">Left</a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="right" title="right Tool Tip">Right</a></li>
        </ul>
        </div>
        <script>
            $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();
            });
        </script>

    <hr/>
    <br/>
    <br/>
        <div class="container">
        <div id="mycarousel" class="carousel slide" data-ride="carousel" style="width:1000px;">
        <ol class="carousel-indicators">
            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mycarousel" data-slide-to="1"></li>
            <li data-target="#mycarousel" data-slide-to="2"></li>
            <li data-target="#mycarousel" data-slide-to="3"></li>
            <li data-target="#mycarousel" data-slide-to="4"></li>
            <li data-target="#mycarousel" data-slide-to="5"></li>
            <li data-target="#mycarousel" data-slide-to="6"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <img src="pic/bocchi1.jpg" width="100%" height="auto">
                <div class="carousel-caption">
                    <h3>Bocchi the Rock Memes</h3>
                    <p>Nonchalant</p>
                </div>
            </div>
            <div class="item">
                <img src="pic/bocchi2.jpg" width="100%" height="auto">
                <div class="carousel-caption">
                    <h3>Bocchi the Rock Memes</h3>
                    <p>Don't hurt her</p>
                </div>
            </div>
            <div class="item">
                <img src="pic/bocchi3.jpg" width="100%" height="auto">
                <div class="carousel-caption">
                    <h3>Bocchi the Rock Memes</h3>
                    <p>Give up</p>
                </div>
            </div>
            <div class="item">
                <img src="pic/bocchi4.jpg" width="100%" height="auto">
                <div class="carousel-caption">
                    <h3>Bocchi the Rock Memes</h3>
                    <p>Suprise</p>
                </div>
            </div>
            <div class="item">
                <img src="pic/bocchi5.jpg" width="100%" height="auto">
                <div class="carousel-caption">
                    <h3>Bocchi the Rock Memes</h3>
                    <p>Drink water people</p>
                </div>
            </div>
            <div class="item">
                <img src="pic/bocchi6.jpg" width="100%" height="auto">
                <div class="carousel-caption">
                    <h3>Bocchi the Rock Memes</h3>
                    <p>Confuse</p>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#mycarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>

        <a class="right carousel-control" href="#mycarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>

    <hr/>
    <br/>
    <br/>
        <div class="container">
        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Open Modal Box</button>
        <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4>This is my modal header</h4>
                    </div>
                <div class="modal-body">
                    <p>This is modal content</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
    </div>
    </body>
</html>