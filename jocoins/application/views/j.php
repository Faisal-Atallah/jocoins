<div class="navbar-header">

</div>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <spaan>
            </spaan>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">


                <li><a href="#"><i class="fa fa-home fa fa-2x" aria-hidden="true"></i> Home </a></li>
                <li><a href="#"><i class="fa fa-info-circle fa fa-2x" aria-hidden="true"></i> About</a></li>
                <li><a href="#"><i class="fa fa-commenting-o fa fa-2x" aria-hidden="true"></i>
                        Contact Us</a></li>

            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-facebook-official fa fa-2x" aria-hidden="true"></i>
                    </a></li>
                <li><a href="#"><i class="fa fa-twitter-square fa fa-2x" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="dividline light-grey"></div>

<div class="container" id="stepsContainer">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Step 3</p>
            </div>
        </div>
    </div>
    <form role="form" id="steps" method="post" action="http://localhost/PhoenixBit/Home/steps">
        <div class="row setup-content" id="step-1">

            <div class="">
                <h3></h3>
                <!-- First name --->
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-sm-offset-4 col-md-offset-4">
                        <div class="form-group">
                            <div class="inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input name="fname" id="fname" placeholder="Enter First Name" class="form-control"  type="text">
                                </div>
                            </div></div>
                    </div></div></div>

            <div class="row">
                <div class="col-sm-4 col-md-4 col-sm-offset-4 col-md-offset-4">
                    <div class="form-group">
                        <div class="inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <input name="lname" id="lname" placeholder="Enter Last Name" class="form-control"  type="text">
                            </div>
                        </div></div>
                </div></div></div>

        <div class="row">
            <div class="col-sm-4 col-md-4 col-sm-offset-4 col-md-offset-4">
                <div class="form-group">
                    <div class="inputGroupContainer">
                        <div class="input-group">
                            <div class="checkbox checkbox-primary">
                                <input id="anonymous" type="checkbox" checked=""/>
                                <label id="anonymousLabel" for="anonymous">
                                    I'd prefer to deal anonymously(Optional)
                                </label>
                            </div>
                        </div>
                    </div></div>
            </div></div>

        <div class="row">
            <div class="col-sm-4 col-md-4 col-sm-offset-4 col-md-offset-4">
                <div class="form-group">
                    <div class="inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="email" name="email" id="email" placeholder="E-Mail Address" class="form-control"/>
                        </div>
                    </div>
                </div></div></div>

        <div class="row">
            <div class="col-sm-4 col-md-4 col-sm-offset-4 col-md-offset-4">
                <div class="form-group">
                    <div class="inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                            <input type="text" name="phone" placeholder="Enter Phone/Mobile number(Optional)" class="form-control"/>
                        </div>
                    </div></div>
            </div></div>

        <div class="row">
            <div class="col-sm-4 col-md-4 col-sm-offset-4 col-md-offset-4">
                <div class="form-group">
                    <div class="inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                            <select name="state" class="form-control selectpicker" >
                                <option value=" " >Please select your state</option>
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option >Arizona</option>
                                <option >Arkansas</option>
                                <option >California</option>
                                <option >Colorado</option>
                                <option >Connecticut</option>
                                <option >Delaware</option>
                                <option >District of Columbia</option>
                                <option> Florida</option>
                                <option >Georgia</option>
                                <option >Hawaii</option>
                                <option >daho</option>
                                <option >Illinois</option>
                                <option >Indiana</option>
                                <option >Iowa</option>
                                <option> Kansas</option>
                                <option >Kentucky</option>
                                <option >Louisiana</option>
                                <option>Maine</option>
                                <option >Maryland</option>
                                <option> Mass</option>
                                <option >Michigan</option>
                                <option >Minnesota</option>
                                <option>Mississippi</option>
                                <option>Missouri</option>
                                <option>Montana</option>
                                <option>Nebraska</option>
                                <option>Nevada</option>
                                <option>New Hampshire</option>
                                <option>New Jersey</option>
                                <option>New Mexico</option>
                                <option>New York</option>
                                <option>North Carolina</option>
                                <option>North Dakota</option>
                                <option>Ohio</option>
                                <option>Oklahoma</option>
                                <option>Oregon</option>
                                <option>Pennsylvania</option>
                                <option>Rhode Island</option>
                                <option>South Carolina</option>
                                <option>South Dakota</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option> Uttah</option>
                                <option>Vermont</option>
                                <option>Virginia</option>
                                <option >Washington</option>
                                <option >West Virginia</option>
                                <option>Wisconsin</option>
                                <option >Wyoming</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div></div>

        <div class="row">
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>

        </div>

        <div class="row setup-content" id="step-2">
            <div class="col-xs-10  col-xs-offset-1">
                <div class="col-md-10  col-xs-offset-1">
                    <h3>Leave us a message.(Optional) </h3>
                    <textarea class="form-control" id="exampleTextarea"  rows="10"></textarea>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 3</h3>
                    <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
                </div>
            </div>
        </div>
    </form>
</div>



<div class="row">
    <div class="col-sm-5 col-md-4 col-md-offset-4">
        <div class="form-group">
            <label class="control-label">How would you like us to contact you? (Optional)</label>
            <div class="inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                    <select  name="contactOption" id="contactOption"  class="form-control selectpicker" >
                        <option value="0" >Please select your option</option>
                        <option value="1"> Phone call</option>
                        <option value="2"> Text message</option>
                        <option value="3"> WhatsApp message</option>

                    </select>
                </div>
            </div>
        </div>
    </div></div>


<div class="container" id="stepsContainer">
    <form id="personalinfoForm" method="post">
        <h3 class="col-md-offset-4">Personal Information</h3>
        <div class="row" id="group1">
            <div class="col-sm-5 col-md-4 col-md-offset-4">
                <div class="form-group">
                    <label class="control-label">First name</label>
                    <div class="inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input name="fname" id="fname" placeholder="Enter First Name" class="form-control"
                                   type="text" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-md-4 col-md-offset-4">
                <div class="form-group">
                    <label class="control-label">Last name</label>
                    <div class="inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input name="lname" id="lname" placeholder="Enter Last Name" class="form-control"

                                   type="text" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-md-4 col-md-offset-4">
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <div class="inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="email" name="email" id="email" placeholder="E-Mail Address" class="form-control"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-md-4 col-md-offset-4">
                <div id="option">
                </div>
            </div>
        </div>
        <!-- button-->
        <div class="row">
            <button class="btn btn-primary" id="submitPersonalInfo" type="submit">Submit</button>
        </div>
    </form>
</div>
<div class="container"  id="exchangeContainer">
    <div id="box">
        <form id="exchangeForm" action="http://localhost/PhoenixBit/Exchange/sendData" method="post">
            <div class="row">
                <h3 class="col-md-offset-4">Title</h3>
                <!-- Paybal -->
                <div class="col-sm-5 col-md-4 col-md-offset-4">
                    <div class="form-group">
                        <div class="selectContainer">
                            <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-paypal" aria-hidden="true"></i>
                        </span>
                                <select name="paying" id="paying" class="form-control selectpicker" >
                                    <option value="Paypal">Paypal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- bitcoins -->
                <div class="col-sm-5 col-md-4 col-md-offset-4">
                    <div class="form-group">
                        <div class="selectContainer">
                            <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-btc" aria-hidden="true"></i>
                                                                                                 </span>
                                <select name="receiving" id="receiving" class="form-control selectpicker" >
                                    <option>Bitcoins</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- amount -->
                <div class="col-sm-5 col-md-4 col-md-offset-4">
                    <div class="form-group">
                        <div class="inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i> </span>
                                <input type="text" name="amount" id="amount" placeholder="Enter amount" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- button-->
            <div class="row ">
                <div class=" ">
                    <button class="btn btn-primary" type="submit" id="exchangeButton">Exchange Now</button>
                </div>
            </div>
        </form>
    </div>






























    <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <h3>Personal Information</h3>
                <form class="" method="post" action="#">

                    <div class="form-group">
                        <label class="control-label">First name</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <input name="fname" id="fname" placeholder="Enter First Name" class="form-control"
                                       type="text" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Last name</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <input name="lname" id="lname" placeholder="Enter Last Name" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="email" name="email" id="email" placeholder="E-Mail Address" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button  type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
