function reset()
 {
    document.getElementById("f").reset();
}


function envoyer()
{

//   var verif = 0;

/*   if (f.rep2.value != "" && f.cas.value.length > 0)
     {
         alert("Vous ne pouvez pas répondre en même temps aux boutons radio et au champ autres");
     }
     else
     {
	     verif ++;
     } */

         var valueDate = document.getElementById('myDate').value;
   //var valueDate_m = document.getElementById('myDate').value;
    // var valueDate1 = document.getElementById('myDate1').value;


//   if(verif == 1)
//   {    
        var d = new Date();
         var day_t= d.getDate(); //today's date
         var day= valueDate.substring(8);
         var calculday  = Number(day_t) - Number(day);

         var d1 = new Date();
         var month_t= d1.getMonth() + 1; //today's month
         var month= valueDate.substring(5,7);
         var calculmonth = Number(month_t) - Number(month);

         var d2 = new Date();
         var year_t= d2.getFullYear(); //today's year
         var year= valueDate.substring(0,4);
         var calculyear = Number(year_t) - Number(year);
         
         var calcultous = calculday+(calculmonth*30)+(calculyear*365);

         if(calcultous<=7)
         {
          //  return true;
            return true;
         }
         else 
         {
            alert("Vous avez dépassez 7jours..");
            //window.location.reload();
            return false;
         }
      

        /*  if(calculyear==0)
         {
            if (calculmonth==0 || calculmonth==1) 
            {
                if (calculday<=7) 
                {
                    alert("vous pouvez ..");
                }
                else if (calculday>7) 
                {
                    alert("vous pouvez pas ..")
                }
            }
            else if (calculmonth!=0) 
            {
                alert("vous pouvez pas ..")
            }
        }
        else if (calculyear!=0) 
        {
            alert("vous pouvez pas ..")
        }*/



        // var month= valueDate.substring(5,indexOf("-",5));
        //var day1 = valueDate1.substring(8);
        //var courant = "2017";
	   


	 	  } 
