<style>
.Animimage{
    width: 150px;
    height: 150px;
    margin: 10px auto;
    perspective: 800px;
}
.Photo{
    width: 150px;
    animation: rotate 20s linear infinite;
    transform-style:preserve-3d ;
    margin-top: 150px;
}
.Photo img{
    height: 150px;
    width: 150px;
}
.Photo div{
    position: absolute;
    width: 150px;
    height: 150px;
}
.front{
    transform: translateZ(200px);
}
.back{
    transform: rotateY(-70deg)
    translateZ(250px);
}
.left{
    transform: rotateY(70deg)
    translateX(-250px);
    transform-origin: left;
}
.rigth{
    transform: rotateY(-70deg)
    translateX(250px);
    transform-origin: right;
}
.top{
    transform: rotateY(70deg)
    translateX(250px);
    transform-origin: top;
}
.b{
    transform: rotateY(-200deg)
    translateX(290px);
    transform-origin:center;
}
.f{
    transform: rotateY(-90deg)
    translateX(300px);
    transform-origin:center;
}
.a{
    transform: rotateY(-90deg)
    translateX(-200px);
    transform-origin:bottom;
}

@keyframes rotate{
    0%{transform:rotateY(0%) ;}
    100%{transform: rotateY(360deg);}
}
.membres{
    width: 60%;
    background : black;
    opacity: 0.8;
    word-spacing: 8px;
}

@media (max-width: 800px) {
    

    .Animimage{
        width: 200px;
        height: 200px;
        margin: 10px auto;
        perspective: 800px;
    }
    .Photo{
        width: 7%;
        height: 600px;
        animation: rotate 20s linear infinite;
        transform-style:preserve-3d ;
        margin-top: 150px;
    }
    .Photo img{
        height: 20px;
        width: 20px;
    }
    .Photo div{
        position: absolute;
        width: 20px;
        height: 20px;
    }
    .front{
        transform: translateZ(200px);
    }
    .back{
        transform: rotateY(-70deg)
        translateZ(250px);
    }
    .left{
        transform: rotateY(70deg)
        translateX(-250px);
        transform-origin: left;
    }
    .rigth{
        transform: rotateY(-70deg)
        translateX(250px);
        transform-origin: right;
    }
    .top{
        transform: rotateY(70deg)
        translateX(250px);
        transform-origin: top;
    }
    .b{
        transform: rotateY(-200deg)
        translateX(290px);
        transform-origin:center;
    }
    .f{
        transform: rotateY(-90deg)
        translateX(300px);
        transform-origin:center;
    }
    .a{
        transform: rotateY(-90deg)
        translateX(-200px);
        transform-origin:bottom;
    }
    
    @keyframes rotate{
        0%{transform:rotateY(0%) ;}
        100%{transform: rotateY(360deg);}
    }
}
</style>
<div class="membres">
<h2>Nous vous remercions de nous avoir suivi jusqu'a la grande finale.
    Alors nous vous presentons les menmbres de ce tournoi! Et a bientot.
     </h2>
</div>
  <div class="Animimage">
    <div class="Photo">

  <div class="front">
     <img src="foto/Jenn.jpg">
  </div>

  <div class="back">
     <img src="foto/Adlet.jpg">
  </div>

  <div class="left">
      <img src="foto/James.jpg">
  </div>

</div>  
  </div>