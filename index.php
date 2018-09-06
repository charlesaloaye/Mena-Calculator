<?php include"includes/header.php";?>
<body class="bg-secondary">
<div class="container">
   <div class="row">
      <div class="col-md-4 col-2"></div>
               <div class="col-md-3 col-8">
            <form name="Calculator" style="margin-top: 150px;padding-top: 25px; padding-bottom: 50px;padding-left: 10px;border-radius: 7px;border-bottom-right-radius: 100px;border-bottom-left-radius: 100px;border:2px red;" autocomplete="off" class="bg-success">
                  <div class="form-group">
                     <h3 style="font-family: gabriola; text-align: center;"><?php echo $appname;?> 1.0</h3>
                     <hr style="background: #fff;">
                  <input type="text" name="display" placeholder="0" class="form-control" style="text-align: right;width: 230px;">
               </div>
               <div class="form-group" style="margin-top: 15px;">
                     <button type="button" value="7"  class="btn btn-primary" onclick="document.Calculator.display.value +='7' ">7</button>
                     <button type="button" value="8"  class="btn btn-primary" onclick="document.Calculator.display.value +='8' ">8</button>
                     <button type="button" value="9"  class="btn btn-primary" onclick="document.Calculator.display.value +='9' ">9</button>
                     <button type="button" value="-"  class="btn btn-primary" onclick="document.Calculator.display.value +='-' ">-</button>

                       <button type="button" value="*"  class="btn btn-primary" onclick="document.Calculator.display.value +='*' ">*</button>
                       <button type="button" value="+"  class="btn btn-primary" onclick="document.Calculator.display.value  +='+'">+</button>
                        </div>

                            <div class="form-group">
                                 <button type="button" value="4"  class="btn btn-primary" onclick="document.Calculator.display.value +='4' ">4</button>

                                 <button type="button" value="5"  class="btn btn-primary" onclick="document.Calculator.display.value +='5' ">5</button>

                                 <button type="button" value="6"  class="btn btn-primary" onclick="document.Calculator.display.value +='6' ">6</button>
                                 <button type="button" value="/"  class="btn btn-primary" onclick="document.Calculator.display.value +='/' ">/</button>

                                    <button type="button" value="."  class="btn btn-primary" onclick="document.Calculator.display.value +='.'  ">.</button>

                                   <button type="button" value="%"  class="btn btn-primary" onclick="btnMod() ">%</button>
                              </div>

                              <div class="form-group">
                                 <button type="button" value="3"  class="btn btn-primary" onclick="document.Calculator.display.value +='3' ">3</button>

                                 <button type="button" value="2"  class="btn btn-primary" onclick="document.Calculator.display.value +='2' ">2</button>

                                 <button type="button" value="1"  class="btn btn-primary" onclick="document.Calculator.display.value +='1' ">1</button>
                                 <button type="button" value="0"  class="btn btn-primary" onclick="document.Calculator.display.value +='0' ">0</button>

                                    <button type="button" value="="  class="btn btn-primary" onclick="document.Calculator.display.value=eval(document.Calculator.display.value) ">=</button>

                                   <button type="reset" value="C"  class="btn btn-primary" onclick="document.Calculator.display.value ">C</button>
                              </div>
            </form>
      </div>
      <script>
         function btnMod() 
         {
            document.Calculator.display.value +="%";
         }
      </script>
   </div>
</div>
</body>
</html>