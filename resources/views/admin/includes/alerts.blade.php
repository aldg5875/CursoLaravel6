<div class="alert">

     <!-- exemplo sem passagem de parametro
     <p>Alert</p>
     -->
     
     {{-- exemplo com passagem de parametro <p> Alert {{$content}} </p> --}}

     <!-- exemplo com passagem de parametro e teste com ?? se a variavel está vazia ou não, se tiver mostra o que está dentro das aspas-->
     <p>Alert - {{$content ?? '' }}</p>
     <!---->



</div>    