<?php

class Mensagem{
    public function showMensagem($msg, $tipo){
        echo (
            "<div id='sus' class='alert px-5 rounded-0 alert-".$tipo."' role='alert'>
                ".$msg."
            </div>
            
            <script>
               setTimeout(function () {
                    $('#sus').hide();
               }, 5000);
            </script>
       ");
    }
}
