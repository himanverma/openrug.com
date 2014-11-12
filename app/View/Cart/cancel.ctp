<center><h1>Error in processing your transaction.</h1>
    Redirecting to main page in <span id="secr4e">10</span> seconds...
</center>
<script type="text/javascript">
    var cntDn = 10;
    setInterval(function(){
        cntDn--;
        $('#secr4e').html(cntDn);
        if(cntDn < 1){
            window.location = "/";
        }
    },10000);
</script>