<HTML>
<HEAD>
<TITLE>Sistema Planetario</TITLE>

<STYLE TYPE="text/css">
#sol {
  position: absolute;
  top:  200;
  left: 350;
}

#planeta {
  position: absolute;
  top:  200;
  left: 490;
}

#luna {
  position: absolute;
  top:  216;
  left: 556;
}
</STYLE>


</HEAD>
<BODY BGCOLOR="#000000" BACKGROUND="stars.gif" >


<SPAN ID=sol><img src="../IMAGENES/(heart)_scaled_45.png"></SPAN>
<SPAN ID=planeta><img src="../IMAGENES/(inlove)_scaled_45.png"></SPAN>
<SPAN ID=luna><img src="../IMAGENES/(kiss)_scaled_51.png"></SPAN>


<SCRIPT>
  Xi     = 300;
  Yi     = 200;
  radiop = 190; 
  radiol = 50;
  inc    = Math.PI/130
  ang = 0;

  function mover() {
        x_planeta = (radiop * Math.cos(ang)) + Xi;
        y_planeta = (radiop * Math.sin(ang)) + Yi;

        x_luna    = x_planeta + 16 + radiol*Math.cos(6*ang);
        y_luna    = y_planeta + 16 + radiol*Math.sin(6*ang);

        document.planeta.left = x_planeta;
        document.planeta.top  = y_planeta;
        document.luna.left    = x_luna;
        document.luna.top     = y_luna;

        ang+=inc;
        if ( ang >= 2*Math.PI ) ang = 0;

        setTimeout("mover()", 20);
  }

  setTimeout("mover()", 20);
</script>

</BODY>