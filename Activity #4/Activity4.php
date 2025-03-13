<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity4</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
    <body>
        <h1>Activity 4</h1>

        <div class="container">
            <div class="page-header">
                <h1>Form Validation Styles</h1>
            </div>

            <form class="form-inline">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" disabled class="form-control">
            </div>
            <div class="form-group has-feedback has-warning">
                <label for="">Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback has-success">
                <label for="">Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-ok form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback has-error">
                <label for="">Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
            
            </form>

            <div class="page-header">
                <h1>Form Validation Styles</h1>
            </div>
            
            <form>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" disabled class="form-control">
            </div>
            <div class="form-group has-feedback has-warning">
                <label for="">Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback has-success">
                <label for="">Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-ok form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback has-error">
                <label for="">Name</label>
                <input type="text" class="form-control"><span class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
            
        </form>
        </div>
     

    <br/>
    <br/>
    <br/>
    <hr/>   
        <div class="container">
        <div class="page-header">
                <h1>My Form Horizontal 2</h1>
            </div>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="name" class="control-label col-md-2">Enter Your Name</label>
                    <div class="col-md-10">
                    <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label col-md-2">Enter Your Email</label>
                    <div class="col-md-10">
                    <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label col-md-2">Enter Your Pasword</label>
                    <div class="col-md-10">
                    <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="comment" class="control-label col-md-2">Comment</label>
                    <div class="col-md-10">
                    <textarea class="form-control" rows="10"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="comment" class="control-label col-md-2">SKills</label>
                    <div class="col-md-10">
                        <div class="checkbox">
                            <label for=""><input type="checkbox">PHP</label>
                        </div>
                        <div class="checkbox">
                            <label for=""><input type="checkbox">BOOTSTRAP</label>
                        </div>
                        <div class="checkbox">
                            <label for=""><input type="checkbox">JAVA</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="comment" class="control-label col-md-2">SKills</label>
                    <div class="col-md-10">
                        <div class="checkbox">
                            <label class="checkbox-inline"><input type="checkbox">PHP</label>
                            <label class="checkbox-inline"><input type="checkbox">BOOTSTRAP</label>
                            <label class="checkbox-inline"><input type="checkbox">JAVA</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="comment" class="control-label col-md-2">Gender</label>
                    <div class="col-md-10">
                        <div class="radio">
                            <label><input type="radio" name="gender">Male</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="gender">Female</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="comment" class="control-label col-md-2">Gender</label>
                    <div class="col-md-10">
                        <div class="radio">
                            <label class="radio-inline"><input type="radio" name="gender">Male</label>
                            <label class="radio-inline"><input type="radio" name="gender">Female</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Course</label>
                    <div class="col-md-10">
                        <select class="form-control">
                            <option value="">BSCS</option>
                            <option value="">BSIT</option>
                            <option value="">BSIS</option>
                            <option value="">BSEMC</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <button class="btn btn-success btn-block">Click to Submit</button>
                    </div>
                </div>
            </form>


            <div class="page-header">
                <h1>My Form Horizontal</h1>
            </div>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="name" class="control-label col-md-2">Enter Your Name</label>
                    <div class="col-md-10">
                    <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label col-md-2">Enter Your Email</label>
                    <div class="col-md-10">
                    <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label col-md-2">Enter Your Pasword</label>
                    <div class="col-md-10">
                    <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label col-md-2">Confirm Password</label>
                    <div class="col-md-10">
                    <input type="text" class="form-control">
                    </div>
                </div>
            </form>
        
        <div class="container">
            <div class="page-header">
                <h1>My Form Inline</h1>
            </div>
            <form class="form-inline">
                <div class="form-group">
                    <label for="name">Enter Your Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Enter Your Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Enter Your Password</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Confirm Password</label>
                    <input type="text" class="form-control">
                </div>
            </form>

            <div class="page-header">
                <h1>My Form Design</h1>
            </div>
            <form action="">
                <div class="form-group">
                    <label for="name">Enter Your Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Enter Your Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Enter Your Password</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Confirm Password</label>
                    <input type="text" class="form-control">
                </div>
            </form>
        </div>


    <br/>
    <br/>
    <br/>
    <hr/>   
    <?php
    /*
        <nav class="navbar navbar-default>
        <nav class="navbar navbar-inverse">
        <nav class="navbar navbar-inverse navbar-fixed-bottom">
        <nav class="navbar navbar-inverse navbar-fixed-top">
    */
    ?>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">College</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">CCS</a></li>
                        <li><a href="#">CET</a></li>
                        <li class="active"><a href="#">CBA</a></li>
                        <li><a href="#">CAS</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    
    </body>
</html>