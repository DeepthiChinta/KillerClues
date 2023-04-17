<script>
window.setInterval((function(){

    var start = Date.now();

   var d = document.getElementById('time');
   
   
   d.innerHTML = '0:00'; 
   return function() {
        
        res = Math.floor((Date.now()-start)/1000);
        
        if(res >= 60)
        {
            var sc = Math.floor(res/60);
             
            res = sc.toString().padStart(2,'0') + ":" + (res%60).toString().padStart(2,'0');
        }
        else{
            res = "00:"+ res.toString().padStart(2,'0');
        }
        
        
        d.innerHTML = res;
        };
   }()), 1000);
    

</script>