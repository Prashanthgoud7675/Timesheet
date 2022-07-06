<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
  <link rel="stylesheet" type="text/css" href="{{url('css/main.css') }}" />
  <script type="text/javascript" src="{{url('js/main.js') }}"></script>
  <style>
    body {
      background-color: #fafafa;
    }

   
  </style>
</head>

<body>

  <br>
  <br>

  <div class="row">
    <div class="col-md-12">

      <div class="date" style="margin-bottom:-5%">

        <h4 class="text-end"  style="color: black; font-size:20px; font-weight:750;margin-left: 70%;"></h4>
  
    </div>

    </div>

  </div>



  <div class="row">

    <div class="container ">
      <div class="col-md-6">

        <div class="card" style="margin-left: 12.6%; width: 87.3%;">

          <div>
      
            <div id="picker" style="margin-bottom:-20.5%" ></div>
      
          </div>
      
        </div>



        

         

          <div >
         
          <div class="part__day">
            <span class="time" style="width:100px">Regular</span>


                <div id="regularMon" class="span" style="width:100px;text-align:center;padding-top:25px;">8:00hrs</div>
                <div id="regularTue" class="span" style="width:100px;text-align:center;padding-top:25px">8:00hrs</div>
                <div id="regularWed" class="span" style="width:100px;text-align:center;padding-top:25px">8:00hrs</div>
                <div id="regularThu" class="span" style="width:100px;text-align:center;padding-top:25px; margin-left: 2%;">8:00hrs</div>
                <div id="regularFri" class="span" style="width:100px;text-align:center;padding-top:25px">8:00hrs</div>
                <div id="regularSat" class="span" style="width:100px;text-align:center;padding-top:25px">0:00hrs</div>
                <div id="regularSun" class="span" style="width:100px;text-align:center;padding-top:25px;margin-left: 1%;">0:00hrs</div>

          </div>


          <div class="part__day">
            <span class="time" style="width:100px">Overtime</span>

            <div style="padding:2px">
              <input id="overTimeMon" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="overTimeTue" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="overTimeWed" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="overTimeThu" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="overTimeFri" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="overTimeSat" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="overTimeSun" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
          </div>

          
          <div class="part__day">
            <span class="time" style="width:100px">Sick</span>


            <div style="padding:2px">
              <input id="sickMon" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="sickTue" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="sickWed" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="sickThu" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="sickFri" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="sickSat" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="sickSun" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
          </div>

          
          <div class="part__day">
            <span class="time" style="width:100px">Vacation</span>

            <div style="padding:2px">
              <input id="vacationMon" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="vacationTue" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="vacationWed" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="vacationThu" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="vacationFri" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="vacationSat" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="vacationSun" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
          </div>


          <div class="part__day">
            <span class="time" style="width:100px">Holiday</span>

            <div style="padding:2px">
              <input id="holidayMon" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="holidayTue" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="holidayWed" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="holidayThu" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="holidayFri" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="holidaySat" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="holidaySun" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
          </div>

          <div class="part__day">
            <span class="time" style="width:100px">Unpaid leave</span>
           
            <div  style="padding:2px">
                <input type="text" id="unpaidMon" style="width:100px;;text-align:center;height:70px">
            </div>
            <div  style="padding:2px">
                <input type="text" id="unpaidTue" style="width:100px;;text-align:center;height:70px">
            </div><div style="padding:2px" >
                <input type="text" id="unpaidWed" style="width:100px;;text-align:center;height:70px">
            </div><div  style="padding:2px">
                <input type="text" id="unpaidThu" style="width:100px;;text-align:center;height:70px">
            </div><div  style="padding:2px">
                <input type="text" id="unpaidFri" style="width:100px;;text-align:center;height:70px">
            </div><div  style="padding:2px">
                <input type="text" id="unpaidSat" style="width:100px;;text-align:center;height:70px">
            </div>
            <div  style="padding:2px">
                <input type="text" id="unpaidSun"style="width:100px;;text-align:center;height:70px">
            </div>
        </div>




          <div class="part__day">
            <span class="time" style="width:100px">Other</span>
           
            <div  style="padding:2px">
                <input type="text" id="otherMon"style="width:100px;;text-align:center;height:70px">
            </div>
            <div  style="padding:2px">
                <input type="text" id="otherTue" style="width:100px;;text-align:center;height:70px">
            </div><div style="padding:2px" >
                <input type="text" id="otherWed" style="width:100px;;text-align:center;height:70px">
            </div><div  style="padding:2px">
                <input type="text" id="otherThu" style="width:100px;;text-align:center;height:70px">
            </div><div  style="padding:2px">
                <input type="text" id="otherFri" style="width:100px;;text-align:center;height:70px">
            </div><div  style="padding:2px">
                <input type="text" id="otherSat" style="width:100px;;text-align:center;height:70px">
            </div>
            <div  style="padding:2px">
                <input type="text" id="otherSun"style="width:100px;;text-align:center;height:70px">
            </div>
        </div>

          <div class="part__day">
            <span class="time" style="width:100px">Total</span>

            <div style="padding:2px">
              <input id="mon" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="tue" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="wed" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="thu" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="fri" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="sat" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            <div style="padding:2px">
              <input id="sun" type="text" style="width:100px;;text-align:center;height:70px">
            </div>
            
          </div>
        </div>
      </div>

      <br>
      <br>
      <br>

      <div>

        <label style="font-size:20px; font-weight:600;">Total Hours reported:  <input id="sum" type="text" style="font-size:20px; width:20%; padding-left: 2%;"> </label>

        <button id="submit" style="background-color:rgba(22, 13, 13, 0.723); border-radius: 5px;; height:30px; width: 20%; padding-top: 5px; padding-bottom: 7px; font-size: 17px; font-weight: 600; color: white; ">Submit</button>

      </div>


     
    </div>



  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 
  <script type="text/javascript">
    (function ($) {
      $('#picker').markyourcalendar({


      });
    })(jQuery);
  </script>


</body>

</html>

<script>

const date = new Date();




document.querySelector(".date h4").innerHTML= new Date().toDateString();

  //submit function

  var btn = document.getElementById('submit');

  btn.addEventListener("click", monday);
  btn.addEventListener("click", thuesday);
  btn.addEventListener("click", wednesday);
  btn.addEventListener("click", thursday);
  btn.addEventListener("click", friday);
  btn.addEventListener("click", saturday);
  btn.addEventListener("click", sunday);
  btn.addEventListener("click", total);

  

  
//Monday Data


function monday(){

 document.getElementById('regularMon').value='8';
 document.getElementById('overTimeMon').value;
 document.getElementById('sickMon').value;
 document.getElementById('vacationMon').value;
 document.getElementById('holidayMon').value;
 document.getElementById('unpaidMon').value;
 document.getElementById('otherMon').value;


 
 const regular = parseInt( document.getElementById('regularMon').value);
 const over = parseInt( document.getElementById('overTimeMon').value);
 
 const sick = parseInt( document.getElementById('sickMon').value);
 const vacation = parseInt( document.getElementById('vacationMon').value);
 
 const holiday = parseInt( document.getElementById('holidayMon').value);

 const unpaid = parseInt( document.getElementById('unpaidMon').value);
 const other = parseInt( document.getElementById('otherMon').value);

 const result =  regular + over + sick + vacation + holiday + unpaid + other;

 const total = document.getElementById('mon').value= result;

}

//Tuesday Data

function thuesday(){

 document.getElementById('regularTue').value='8';
 
 document.getElementById('overTimeTue').value;
 document.getElementById('sickTue').value;
 document.getElementById('vacationTue').value;
 document.getElementById('holidayTue').value;
 document.getElementById('unpaidTue').value;
 document.getElementById('otherTue').value;


 
 const regulartue = parseInt( document.getElementById('regularTue').value);
 const overtue = parseInt( document.getElementById('overTimeTue').value);
 
 const sicktue = parseInt( document.getElementById('sickTue').value);
 const vacationtue = parseInt( document.getElementById('vacationTue').value);
 
 const holidaytue = parseInt( document.getElementById('holidayTue').value);

 const unpaidtue = parseInt( document.getElementById('unpaidTue').value);
 const othertue = parseInt( document.getElementById('otherTue').value);

 const resulttue = regulartue + overtue + sicktue + vacationtue + holidaytue + unpaidtue + othertue;

 const totaltue = document.getElementById('tue').value= resulttue;

}

//Wednesday Data

function wednesday(){

document.getElementById('regularWed').value='8';
 document.getElementById('overTimeWed').value;
 document.getElementById('sickWed').value;
 document.getElementById('vacationWed').value;
 document.getElementById('holidayWed').value;
 document.getElementById('unpaidWed').value;
 document.getElementById('otherWed').value;


 
 const regularwed = parseInt( document.getElementById('regularWed').value);
 const overwed = parseInt( document.getElementById('overTimeWed').value);
 
 const sickwed = parseInt( document.getElementById('sickWed').value);
 const vacationwed = parseInt( document.getElementById('vacationWed').value);
 
 const holidaywed = parseInt( document.getElementById('holidayWed').value);

 const unpaidwed = parseInt( document.getElementById('unpaidWed').value);
 const otherwed = parseInt( document.getElementById('otherWed').value);

 const resultwed = regularwed + overwed + sickwed + vacationwed + holidaywed + unpaidwed + otherwed;

 const totalwed = document.getElementById('wed').value= resultwed;

}

 //Thursday Data

 function thursday(){

 document.getElementById('regularThu').value='8';
 document.getElementById('overTimeThu').value;
 document.getElementById('sickThu').value;
 document.getElementById('vacationThu').value;
 document.getElementById('holidayThu').value;
 document.getElementById('unpaidThu').value;
 document.getElementById('otherThu').value;


 
 const regularthu = parseInt( document.getElementById('regularThu').value);
 const overthu = parseInt( document.getElementById('overTimeThu').value);
 
 const sickthu = parseInt( document.getElementById('sickThu').value);
 const vacationthu = parseInt( document.getElementById('vacationThu').value);
 
 const holidaythu = parseInt( document.getElementById('holidayThu').value);

 const unpaidthu = parseInt( document.getElementById('unpaidThu').value);
 const otherthu = parseInt( document.getElementById('otherThu').value);

 const resultthu = regularthu + overthu + sickthu + vacationthu + holidaythu + unpaidthu + otherthu;

 const totalthu = document.getElementById('thu').value= resultthu;

 }

 //Friday Data

 function friday(){

 document.getElementById('regularFri').value='8';
 document.getElementById('overTimeFri').value;
 document.getElementById('sickFri').value;
 document.getElementById('vacationFri').value;
 document.getElementById('holidayFri').value;
 document.getElementById('unpaidFri').value;
 document.getElementById('otherFri').value;


 
 const regularfri = parseInt( document.getElementById('regularFri').value);
 const overfri = parseInt( document.getElementById('overTimeFri').value);
 
 const sickfri = parseInt( document.getElementById('sickFri').value);
 const vacationfri = parseInt( document.getElementById('vacationFri').value);
 
 const holidayfri = parseInt( document.getElementById('holidayFri').value);

 const unpaidfri = parseInt( document.getElementById('unpaidFri').value);
 const otherfri = parseInt( document.getElementById('otherFri').value);

 const resultfri = regularfri + overfri + sickfri + vacationfri + holidayfri + unpaidfri + otherfri;

 const totalfri = document.getElementById('fri').value= resultfri;

 }

 //Saturday Data

 function saturday(){

 document.getElementById('regularSat').value='0';
 document.getElementById('overTimeSat').value;
 document.getElementById('sickSat').value;
 document.getElementById('vacationSat').value;
 document.getElementById('holidaySat').value;
 document.getElementById('unpaidSat').value;
 document.getElementById('otherSat').value;


 
 const regularsat = parseInt( document.getElementById('regularSat').value);
 const oversat = parseInt( document.getElementById('overTimeSat').value);
 
 const sicksat = parseInt( document.getElementById('sickSat').value);
 const vacationsat = parseInt( document.getElementById('vacationSat').value);
 
 const holidaysat = parseInt( document.getElementById('holidaySat').value);

 const unpaidsat = parseInt( document.getElementById('unpaidSat').value);
 const othersat = parseInt( document.getElementById('otherSat').value);

 const resultsat = regularsat + oversat + sicksat + vacationsat + holidaysat + unpaidsat + othersat;

 const totalsat = document.getElementById('sat').value= resultsat;

 }

 //Sunday Data

 function sunday(){

 document.getElementById('regularSun').value='0';
 document.getElementById('overTimeSun').value;
 document.getElementById('sickSun').value;
 document.getElementById('vacationSun').value;
 document.getElementById('holidaySun').value;
 document.getElementById('unpaidSun').value;
 document.getElementById('otherSun').value;


 
 const regularsun = parseInt( document.getElementById('regularSun').value);
 const oversun = parseInt( document.getElementById('overTimeSun').value);
 
 const sicksun = parseInt( document.getElementById('sickSun').value);
 const vacationsun = parseInt( document.getElementById('vacationSun').value);
 
 const holidaysun = parseInt( document.getElementById('holidaySun').value);

 const unpaidsun = parseInt( document.getElementById('unpaidSun').value);
 const othersun = parseInt( document.getElementById('otherSun').value);

 const resultsun = regularsun + oversun + sicksun + vacationsun + holidaysun + unpaidsun + othersun;

 const totalsun = document.getElementById('sun').value= resultsun;

 }

 function total(){
 const Monday = parseInt( document.getElementById('mon').value);
 const Tuesday = parseInt( document.getElementById('tue').value);
 const Wednesday = parseInt( document.getElementById('wed').value);
 const Thursday = parseInt( document.getElementById('thu').value);
 const Friday = parseInt( document.getElementById('fri').value);
 const Saturday = parseInt( document.getElementById('sat').value);
 const Sunday = parseInt( document.getElementById('sun').value);


 const sample = document.getElementById('sum').value = Monday + Tuesday + Wednesday + Thursday + Friday + Saturday + Sunday;

 }
// document.createElement('h1');
 
// body.textContent = `${sample}`;


//Total Data

/*

 const regulartotal = regular + regulartue + regularwed + regularthu + regularfri + regularsat + regularsun;
 document.getElementById('regularTotal').innerHTML=regulartotal;

 const overtimetotal = over + overtue + overwed + overthu + overfri + oversat + oversun;
 document.getElementById('overTimeTotal').innerHTML=overtimetotal;

 
 const sicktotal = sick + sicktue + sickwed + sickthu + sickfri + sicksat +sicksun;
 document.getElementById('sickTotal').innerHTML=sicktotal;

 const vacationtotal = vacation + vacationtue + vacationwed + vacationthu + vacationfri + vacationsat + vacationsun;
 document.getElementById('vacationTotal').innerHTML=vacationtotal;

 const holidaytotal = holiday + holidaytue + holidaywed + holidaythu + holidayfri + holidaysat + holidaysun;
 document.getElementById('holidayTotal').innerHTML=holidaytotal;

 const unpaidtotal = unpaid + unpaidtue + unpaidwed + unpaidthu + unpaidfri + unpaidsat + unpaidsun;
 document.getElementById('unpaidTotal').innerHTML=unpaidtotal;

 const othertotal = other + othertue + otherwed + otherthu + otherfri + othersat + othersun;
 document.getElementById('otherTotal').innerHTML=othertotal;


 const sumtotal = regulartotal + overtimetotal + sicktotal + vacationtotal + holidaytotal + unpaidtotal + othertotal;
 document.getElementById('sumTotal').innerHTML=sumtotal;

 
*/

</script>