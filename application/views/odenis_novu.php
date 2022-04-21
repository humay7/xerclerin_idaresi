<html>
    <head>
        <title>Xerclerin idaresi</title>
        <style>
            body {
                font-family:tahoma;
                font-size:12px;
            }

            #signup-step {
                margin:auto;
                padding:0;
                width:53%
            }

            #signup-step li {
                list-style:none; 
                float:left;
                padding:5px 10px;
                border-top:#004C9C 1px solid;
                border-left:#004C9C 1px solid;
                border-right:#004C9C 1px solid;
                border-radius:5px 5px 0 0;
            }

            .active {
                color:#FFF;
            }

            #signup-step li.active {
                background-color:#004C9C;
            }

            #signup-form {
                clear:both;
                border:1px #004C9C solid;
                padding:20px;
                width:50%;
                margin:auto;
            }

            .demoInputBox {
                padding: 10px;
                border: #CDCDCD 1px solid;
                border-radius: 4px;
                background-color: #FFF;
                width: 50%;
            }

            .signup-error {
                color:#FF0000; 
                padding-left:15px;
            }

            .message {
                color: #00FF00;
                font-weight: bold;
                width: 100%;
                padding: 10;
            }

            .btnAction {
                padding: 5px 10px;
                background-color: #F00;
                border: 0;
                color: #FFF;
                cursor: pointer;
                margin-top:15px;
            }

            label {
                line-height:35px;
            }

        </style>

        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script>
            function validate() {
                var output = true;
                $(".signup-error").html('');

               

                if ($("#odenis-field").css('display') != 'none') {
                    if (!($("#mebleg").val())) {
                        output = false;
                        $("#mebleg-error").html("Meblegi daxil edin!");
                    }

                    if (!($("#kategoriya").val())) {
                        output = false;
                        $("#kategoriya-error").html("Kategoriya daxil edin!");
                    }

                    

                    
                }

                return output;
            }

            $(document).ready(function () {
                $("#next").click(function () {
                    var output = validate();
                    if (output === true) {
                        var current = $(".active");
                        var next = $(".active").next("li");
                        if (next.length > 0) {
                            $("#" + current.attr("id") + "-field").hide();
                            $("#" + next.attr("id") + "-field").show();
                            $("#back").show();
                            $("#finish").hide();
                            $(".active").removeClass("active");
                            next.addClass("active");
                            if ($(".active").attr("id") == $("li").last().attr("id")) {
                                $("#next").hide();
                                $("#finish").show();
                            }
                        }
                    }
                });


                $("#back").click(function () {
                    var current = $(".active");
                    var prev = $(".active").prev("li");
                    if (prev.length > 0) {
                        $("#" + current.attr("id") + "-field").hide();
                        $("#" + prev.attr("id") + "-field").show();
                        $("#next").show();
                        $("#finish").hide();
                        $(".active").removeClass("active");
                        prev.addClass("active");
                        if ($(".active").attr("id") == $("li").first().attr("id")) {
                            $("#back").hide();
                        }
                    }
                });

                $("input#finish").click(function (e) {
                    var output = validate();
                    var current = $(".active");

                    if (output === true) {
                        return true;
                    } else {
                        //prevent refresh
                        e.preventDefault();
                        $("#" + current.attr("id") + "-field").show();
                        $("#back").show();
                        $("#finish").show();
                    }
                });
            });
        </script>

    </head>
    <body>

        <ul id="signup-step">
            <li id="nov" class="active">Odenis novu</li>
            <li id="valyuta">Valyuta</li>
            <li id="odenis">Odenis</li>
            
        </ul>

        <?php
        if (isset($success)) {
            // echo '<div>User record inserted successfully</div>';
            redirect('http://localhost/CodeIgniter/index.php/OdenisTable');
        }

        $attributes = array('name' => 'frmRegistration', 'id' => 'signup-form');
        echo form_open($this->uri->uri_string(), $attributes);
        // redirect('http://www.tutorialspoint.com');
        
        ?>
        <div id="nov-field">
            
            <label>Odenis novu</label>
            <div>
                <select name="nov" id="nov" class="demoInputBox">
                
                <?php
                // $data['odenis_novu'] = $this->nov_model->fetch_nov();
			
                // $data['valyuta'] = $this->nov_model->fetch_valyuta();
              foreach($odenis_novu as $row){
              echo '<option value="'.$row->id.'">'.$row->name.'</option>';
              }
      ?>                                                                                                                                               
                </select>
            </div>
        </div>

        <div id="valyuta-field" style="display:none;">
        <label>Valyuta</label>
            <div>
                <select name="valyuta" id="valyuta" class="demoInputBox">
                
                
                <?php
              foreach($valyuta as $row2){
              echo '<option value="'.$row2->id.'">'.$row2->name.'</option>';
              }
      ?>                          
                                                                                                                                                    
                </select>
            </div>
        </div>

        <div id="odenis-field" style="display:none;">
            <label>Mebleg</label><span id="mebleg-error" class="signup-error"></span>
            <div><input type="number" name="mebleg" id="mebleg" class="demoInputBox" /></div>
            <label>Kategoriya</label><span id="kategoriya-error" class="signup-error"></span>
            <div><input type="text" name="kategoriya" id="kategoriya" class="demoInputBox" /></div>
            <label>Rey</label>
            <div><textarea name="rey" id="rey" class="demoInputBox" rows="5" cols="50"></textarea></div>
        </div>

        <div>
            <input class="btnAction" type="button" name="back" id="back" value="Back" style="display:none;">
            <input class="btnAction" type="button" name="next" id="next" value="Next" >
            <input class="btnAction" type="submit" name="finish" id="finish" value="Finish" style="display:none;">
        </div>
        <?php echo form_close(); ?>

    </body>
</html>