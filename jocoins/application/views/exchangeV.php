 <div class="container" id="EXContainer">
        <div class="row main">
            <div class="main-login main-center">
                <h3 class="text-center">Title</h3>
                <form id="exchangeForm" action="http://localhost/PhoenixBit/Exchange/sendData" method="post">
                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <div class="cols-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-paypal" aria-hidden="true"></i>
                                                                                                      </span>
                                <select name="paying" id="paying" class="form-control selectpicker" >

                                    <option value="Paypal">Paypal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <div class="cols-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-btc" aria-hidden="true"></i>
                                                                                                 </span>
                                <select name="receiving" id="receiving" class="form-control selectpicker" >
                                    <option>Bitcoins</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Amount</label>
                        <div class="cols-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i> </span>
                                <input type="text" name="amount" id="amount" placeholder="Enter amount" class="form-control"
                                required minlength="1"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <button  type="submit" id="EXbutton" class="btn btn-primary btn-lg btn-block login-button">Exchange Now</button>
                    </div>

            </div>
        </div>
    </div>
 <div class="container">

     <div class="stepwizard col-xs-offset-3 col-md-offset-3 ">
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


     <div class="row setup-content" id="step-1">
         <div class="col-xs-9 col-sm-6 col-md-6 col-xs-offset-2 col-md-offset-3">
             <div class="col-md-12">

                     <h3> Step 1</h3>
                     <div class="form-group">
                         <label class="control-label">First name</label>
                         <div class="cols-sm-10">
                             <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                 <input name="fname" id="fname" placeholder="Enter First Name" class="form-control"
                                        type="text"   />
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="control-label">Last name</label>
                         <div class="cols-sm-10">
                             <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                 <input name="lname" id="lname" placeholder="Enter Last Name" class="form-control"
                                        type="text"
                                 />
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="control-label">Email</label>
                         <div class="cols-sm-10">
                             <div class="input-group">
                                 <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                 <input  name="email" id="email" placeholder="E-Mail Address" class="form-control"
                                         type="email"
                                 />
                             </div>
                         </div>
                     </div>
                     <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
             </div>
         </div>
     </div>

     <div class="row setup-content" id="step-2">
         <div class="col-xs-6 col-md-offset-3">
             <div class="col-md-12">
                 <h3> How would you like us to contact you? (Optional)</h3>
                 <div class="form-group">
                     <label class="control-label"></label>
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

                     <div id="option">
                         <div id="phoneCall" class="field">
                             <div class="form-group">
                                 <label class="control-label">Phone</label>
                                 <div class="inputGroupContainer">
                                     <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                         <input type="text" name="phone" id="phone" placeholder="Enter Phone Mobile number" class="form-control">

                                     </div>
                                 </div></div>
                         </div>



                         <div id="textMessage" class="field">
                             <div class="form-group">
                                 <label for="tmessage">Text message</label>
                                 <textarea id="tmessage" name="tmessage" class="form-control" rows="5"></textarea>
                             </div>
                         </div>


                         <div id="whatsappMessage" class="field">
                             <div class="form-group">
                                 <label class="control-label">WhatsApp message</label>
                                 <div class="inputGroupContainer">
                                     <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
                                         <input name="whatsapp" id="whatsapp" placeholder="Enter your WhatsApp number" class="form-control"
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </div>

                 </div>
             </div>

             <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>



         </div>
     </div>
 </div>

 <div class="row setup-content" id="step-3">


     <div class="col-xs-6 col-md-offset-3">

         <div class="col-md-12">

             <h3> Step 3</h3>
             <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>


         </div>


     </div>



     </form>



 </div>






















