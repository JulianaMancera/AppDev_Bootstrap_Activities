<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        section{
        width: 100vw;
        height: 100vw;
        padding: 50px

        }
        img{
            width: 300px;
            transition: opacity is ease-in-out;
        }
        
        img:hover{
            opacity: .10;
        }
        .col-text{
            -webkit-column-count: 3;
        }
</style>
 

    </head>

    <body data-spy="scroll" data-target=".navbar">
        <nav class="nav navbar-inverse navbar-fixed-bottom">
            <ui class="nav navbar-nav">
                <li><a href="#home">Home</a></li>
                <li><a href="#work">What I do</a></li>
                <li><a href="#about">What about me</a></li>
                <li><a href="#contact">Contact Me</a></li>
            </ui>

        </nav>
        <section id="home" style="background: url(pic/sunset.jpg); background-size: 100% 100%;" class="text-center">
            <h1>My Portfolio</h1>
            <p>Welcome to my world, The life of a Programmer</p>
            <button class="btn btn-default">Contant Me</button>
        </section>
        <section id="work">
            <div class="page-header">
                <h1 class="text-center">My Works</h1>
            </div>
            <div class="text-center">
                <img src="pic/profile.jpg" class="img-thumbnail"/>
                <img src="pic/profile2.jpg" class="img-thumbnail"/>
                <img src="pic/profile3.jpg" class="img-thumbnail"/>
                <img src="pic/profile4.jpg" class="img-thumbnail"/>
            </div>
        </section>

        <section id="about" class="container">
            <h2 class="text-center">My Skills</h2>
            <div class="col-text">
            text text text text text text text text
            text text text text text text text text
            text text text text text text text text
            text text text text text text text text
            text text text text text text text text
            text text text text text text text text
            text text text text text text text text
            text text text text text text text text
            text text text text text text text text
            text text text text text text text text
            text text text text     

            </div>
            <br/>

            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>PHP Programmer</h4>
                        </div>
                        <div class="panel-body">
                        <img src="pic/wiee.jpg" class="img-circle center-block">
                        <p class="lead text-center">I Do PHP Bro</p>

                        </div>
                        <div class="panel-footer"></div>

                    </div>
                </div>

                <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Web Designer</h4>
                        </div>
                        <div class="panel-body">
                        <img src="pic/wiee.jpg" class="img-circle center-block">
                        <p class="lead text-center">I do CSS Bootstrap Designing</p>

                        </div>
                        <div class="panel-footer"></div>

                    </div>
                </div>
            </div>
        </section>

        <section id="contact" style="background: silver">
            <div class="page-header">
                <h2 class="text-center">Contact Me</h2>
            </div>
                <form class="col-md-4 col-md-offset-4">
                <div class="form-group">
                    <input class="form-control" placeholder="Enter your name" type="text"/>
                </div>
                 <div class="form-group">
                    <input class="form-control" placeholder="Enter your e-mail" type="email"/>
                </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Subject" type="email"/>
                </div>
                  <div class="form-group">
                    <textarea class="form-control rows=10"> Comments </textarea>
                </div>
                  <div class="form-group">
                    <input class="btn btn-success btn-block" type="submit"/>
                </div>
            </form>
        </section>

    </body>
</html>
